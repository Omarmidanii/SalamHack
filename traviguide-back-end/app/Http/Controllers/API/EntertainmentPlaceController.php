<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\EntertainmentPlaceRepositoryInterface;
use App\Http\Requests\EntertainmentPlace\StoreEntertainmentPlaceRequest;
use App\Http\Requests\EntertainmentPlace\UpdateEntertainmentPlaceRequest;
use App\Http\Resources\EntertainmentPlaceResource;
use App\Trait\ApiResponse;
use Throwable;

class EntertainmentPlaceController extends Controller
{

    use ApiResponse;
    private $entertainmentPlacerepository;
    public function __construct(EntertainmentPlaceRepositoryInterface $entertainmentPlacerepository)
    {
        $this->entertainmentPlacerepository = $entertainmentPlacerepository;
        $this->middleware('auth:sanctum', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data = $this->entertainmentPlacerepository->index(['categories']);
            return $this->SuccessMany($data, EntertainmentPlaceResource::class, 'entertainmentplaces Indexed Successfully');
        } catch (Throwable $th) {
            return $this->Error($th);
        }
    }

    public function store(StoreEntertainmentPlaceRequest $request)
    {
        try {
            $data = $this->entertainmentPlacerepository->store($request->validated());
            return $this->SuccessOne($data, null, 'entertainmentplace created Successfully');
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
            $data = $this->entertainmentPlacerepository->show($id , ['categories']);
            return $this->SuccessOne($data, EntertainmentPlaceResource::class, 'entertainmentplace fetched Successfully');
        } catch (Throwable $th) {
            return $this->Error($th);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEntertainmentPlaceRequest $request, $id)
    {
        try {
            $data = $this->entertainmentPlacerepository->update($id, $request->validated());
            return $this->SuccessOne($data, EntertainmentPlaceResource::class, 'entertainmentplace Updated Successfully');
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
            $this->entertainmentPlacerepository->destroy($id);
            return $this->SuccessOne(null, null, 'entertainmentplace deleted Successfully');
        } catch (Throwable $th) {
            return $this->Error($th);
        }
    }
}