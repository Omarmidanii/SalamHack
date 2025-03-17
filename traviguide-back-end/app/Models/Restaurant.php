<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Restaurant extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'location',
        'address',
        'price_range',
        'food_types',
        'character',
        'rating',
        'open_time',
        'close_time',
        'contacts',
    ];

    protected $casts = [
        'food_types' => 'array',
        'contacts' => 'array',
    ];
    public function categories()
    {
        return $this->morphToMany(Category::class, 'categorizable');
    }
}
