<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\RestaurantRepositoryInterface;
use App\Http\Requests\Restaurant\StoreRestaurantRequest;
use App\Http\Requests\Restaurant\UpdateRestaurantRequest;
use App\Http\Resources\RestaurantResource;
use App\Models\Restaurant;
use App\Trait\ApiResponse;
use Throwable;

class RestaurantController extends Controller
{
    use ApiResponse;
    private $restaurantRepository;
    public function __construct(RestaurantRepositoryInterface $restaurantRepository)
    {
        $this->restaurantRepository = $restaurantRepository;
        $this->middleware('auth:sanctum', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data = $this->restaurantRepository->index(['categories', 'images']);
            return $this->SuccessMany($data, RestaurantResource::class, 'Restaurants Indexed Successfully');
        } catch (Throwable $th) {
            return $this->Error($th);
        }
    }

    public function store(StoreRestaurantRequest $request)
    {
        try {
            $data = $this->restaurantRepository->store($request->validated());

            return $this->SuccessOne($data, null, 'Restaurants created Successfully');
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
            $data = $this->restaurantRepository->show($id, ['categories', 'images']);
            return $this->SuccessOne($data, RestaurantResource::class, 'Restaurant fetched Successfully');
        } catch (Throwable $th) {
            return $this->Error($th);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRestaurantRequest $request, $id)
    {
        try {
            $data = $this->restaurantRepository->update($id, $request->validated());
            return $this->SuccessOne($data, RestaurantResource::class, 'Restaurant Updated Successfully');
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
            $this->restaurantRepository->destroy($id);
            return $this->SuccessOne(null, null, 'Restaurant deleted Successfully');
        } catch (Throwable $th) {
            return $this->Error($th);
        }
    }
}