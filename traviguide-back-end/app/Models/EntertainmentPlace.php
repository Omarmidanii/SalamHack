<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntertainmentPlace extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'location',
        'address',
        'price_range',
        'rating',
        'type_of_activity',
        'open_time',
        'close_time',
        'contacts'
    ];
    protected $casts = [
        'contacts' => 'array',
    ];

    public function categories()
    {
        return $this->morphToMany(Category::class, 'categorizable');
    }
}
