<?php

use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\EntertainmentPlaceController;
use App\Http\Controllers\API\HotelController;
use App\Http\Controllers\API\RestaurantController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout')->middleware('auth:sanctum');
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResources([
    'restaurants' => RestaurantController::class,
    'hotels' => HotelController::class,
    'entertainmentplaces' => EntertainmentPlaceController::class,
    'categories' => CategoryController::class,
]);
