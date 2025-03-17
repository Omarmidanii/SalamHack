<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\CategoryRepositoryInterface;
use App\Models\Category;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    public
    function __construct()
    {
        parent::__construct(new Category());
    }
}
