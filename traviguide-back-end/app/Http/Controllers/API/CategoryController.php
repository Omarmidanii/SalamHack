<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\CategoryRepositoryInterface;
use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Trait\ApiResponse;
use Throwable;

class CategoryController extends Controller
{
    use ApiResponse;
    private $categoryrepository;
    public function __construct(CategoryRepositoryInterface $categoryrepository)
    {
        $this->categoryrepository = $categoryrepository;
        $this->middleware('auth:sanctum', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data = $this->categoryrepository->index();
            return $this->SuccessMany($data, CategoryResource::class, 'Categories Indexed Successfully');
        } catch (Throwable $th) {
            return $this->Error($th);
        }
    }

    public function store(StoreCategoryRequest $request)
    {
        try {
            $data = $this->categoryrepository->store($request->validated());
            return $this->SuccessOne($data, null, 'Category created Successfully');
        } catch (Throwable $th) {
            return $this->Error($th);
        }
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $data = $this->categoryrepository->show($id);
            return $this->SuccessOne($data, CategoryResource::class, 'Category fetched Successfully');
        } catch (Throwable $th) {
            return $this->Error($th);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, $id)
    {
        try {
            $data = $this->categoryrepository->update($id, $request->validated());
            return $this->SuccessOne($data, CategoryResource::class, 'Category Updated Successfully');
        } catch (Throwable $th) {
            return $this->Error($th);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $this->categoryrepository->destroy($id);
            return $this->SuccessOne(null, null, 'Category deleted Successfully');
        } catch (Throwable $th) {
            return $this->Error($th);
        }
    }
}
