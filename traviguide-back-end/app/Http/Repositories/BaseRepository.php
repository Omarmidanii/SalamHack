<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\BaseRepositoryInterface;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class BaseRepository implements BaseRepositoryInterface
{
    protected Model $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function index(array $with = [])
    {
        $query = $this->model::query();

        if (!empty($with)) {
            $query->with($with);
        }
        return $query->simplePaginate(10);
    }

    public function show($id, array $with = [])
    {
        $query = $this->model::query();

        if (!empty($with)) {
            $query->with($with);
        }

        $data = $query->find($id);
        if ($data == null) throw new Exception('No such Record', 404);
        return $data;
    }

    public function store(array $data)
    {
        $categories = $data['categories'] ?? [];
        $images = $data['images'] ?? [];
        unset($data['categories'], $data['images']);

        $model = $this->model::create($data);

        if (method_exists($model, 'categories')) {
            $model->categories()->sync($categories);
        }

        if (method_exists($model, 'images')) {
            return $images;
            foreach ($images as $image) {
                $path = $image->store('public/images');
                $model->images()->create([
                    'url' => Storage::url($path)
                ]);
            }
        }

        return $model->load('images');
    }

    public function update($id, array $data)
    {
        $record = $this->model::findOrFail($id);

        $categories = $data['categories'] ?? [];
        $images = $data['images'] ?? [];
        $imagesToDelete = $data['images_to_delete'] ?? [];
        unset($data['categories'], $data['images'], $data['images_to_delete']);

        $record->update($data);

        if (method_exists($record, 'categories')) {
            $record->categories()->sync($categories);
        }

        if (method_exists($record, 'images') && !empty($imagesToDelete)) {
            $images = $record->images()->whereIn('id', $imagesToDelete)->get();
            foreach ($images as $image) {
                Storage::delete(str_replace('/storage', 'public', $image->url)); // Delete file
                $image->delete();
            }
        }


        if (method_exists($record, 'images') && !empty($images)) {
            foreach ($images as $image) {
                $path = $image->store('public/images');
                $record->images()->create([
                    'url' => Storage::url($path)
                ]);
            }
        }

        return $record->load('images');
    }

    public function destroy($id)
    {
        $record = $this->model::find($id);
        if ($record == null) throw new Exception('No such Record', 404);
        return $record->delete();
    }

    public function showDeleted()
    {
        return $this->model::onlyTrashed()->simplePaginate(10);
    }

    public function restore(array $ids)
    {
        foreach ($ids as $id) {
            $model = $this->model::onlyTrashed()->find($id);
            if ($model) $model->restore();
        }
    }
}
