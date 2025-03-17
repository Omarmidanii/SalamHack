<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\EntertainmentPlaceRepositoryInterface;
use App\Models\EntertainmentPlace;

class EntertainmentPlaceRepository extends BaseRepository implements EntertainmentPlaceRepositoryInterface
{
    public function __construct(EntertainmentPlace $model)
    {
        parent::__construct($model);
    }
}
