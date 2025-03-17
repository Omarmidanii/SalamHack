<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\HotelRepositoryInterface;
use App\Models\Hotel;

class HotelRepository extends BaseRepository implements HotelRepositoryInterface
{
    public function __construct(Hotel $model)
    {
        parent::__construct($model);
    }
}
