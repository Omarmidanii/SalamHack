<?php

namespace App\Providers;

use App\Http\Interfaces\BaseRepositoryInterface;
use App\Http\Interfaces\HotelRepositoryInterface;
use App\Http\Interfaces\RestaurantRepositoryInterface;
use App\Http\Repositories\BaseRepository;
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
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
