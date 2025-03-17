<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\RestaurantRepositoryInterface;
use App\Models\Restaurant;

class RestaurantRepository extends BaseRepository implements RestaurantRepositoryInterface
{
    public function __construct(Restaurant $model)
    {
        parent::__construct($model);
    }
}
