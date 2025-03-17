<?php

namespace App\Providers;

use App\Http\Interfaces\BaseRepositoryInterface;
use App\Http\Interfaces\CategoryRepositoryInterface;
use App\Http\Interfaces\EntertainmentPlaceRepositoryInterface;
use App\Http\Interfaces\HotelRepositoryInterface;
use App\Http\Interfaces\RestaurantRepositoryInterface;
use App\Http\Repositories\BaseRepository;
use App\Http\Repositories\CategoryRepository;
use App\Http\Repositories\EntertainmentPlaceRepository;
use App\Http\Repositories\HotelRepository;
use App\Http\Repositories\RestaurantRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(BaseRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(RestaurantRepositoryInterface::class, RestaurantRepository::class);
        $this->app->bind(HotelRepositoryInterface::class, HotelRepository::class);
        $this->app->bind(EntertainmentPlaceRepositoryInterface::class, EntertainmentPlaceRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
