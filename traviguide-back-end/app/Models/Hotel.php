<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hotel extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'location',
        'address',
        'price_range',
        'rating',
        'has_activity',
        'room_sizes',
        'available_times',
        'contacts',
    ];

    protected $casts = [
        'room_sizes' => 'array',
        'available_times' => 'array',
        'contacts' => 'array',
        'location' => 'array',
    ];
    public function categories()
    {
        return $this->morphToMany(Category::class, 'categorizable');
    }
}
