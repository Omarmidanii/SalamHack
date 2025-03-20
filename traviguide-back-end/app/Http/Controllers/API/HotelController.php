<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\HotelRepositoryInterface;
use App\Http\Requests\Hotel\StoreHotelRequest;
use App\Http\Requests\Hotel\UpdateHotelRequest;
use App\Http\Resources\HotelResource;
use App\Trait\ApiResponse;
use Throwable;

class HotelController extends Controller
{
    use ApiResponse;
    private $hotelrepository;
    public function __construct(HotelRepositoryInterface $hotelrepository)
    {
        $this->hotelrepository = $hotelrepository;
        $this->middleware('auth:sanctum', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data = $this->hotelrepository->index(['categories', 'images']);
            return $this->SuccessMany($data, HotelResource::class, 'Hotels Indexed Successfully');
        } catch (Throwable $th) {
            return $this->Error($th);
        }
    }

    public function store(StoreHotelRequest $request)
    {
        try {
            $data = $this->hotelrepository->store($request->validated());
            return $this->SuccessOne($data, null, 'Hotels created Successfully');
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
            $data = $this->hotelrepository->show($id, ['categories', 'images']);
            return $this->SuccessOne($data, HotelResource::class, 'Hotel fetched Successfully');
        } catch (Throwable $th) {
            return $this->Error($th);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHotelRequest $request, $id)
    {
        try {
            $data = $this->hotelrepository->update($id, $request->validated());
            return $this->SuccessOne($data, HotelResource::class, 'Hotel Updated Successfully');
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
            $this->hotelrepository->destroy($id);
            return $this->SuccessOne(null, null, 'Hotel deleted Successfully');
        } catch (Throwable $th) {
            return $this->Error($th);
        }
    }
}