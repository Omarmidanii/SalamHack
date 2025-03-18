<?php

namespace App\Http\Requests\Hotel;

use Illuminate\Foundation\Http\FormRequest;


class StoreHotelRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'string|max:255',
            'location' => 'string',
            'address' => 'string|max:255',
            'price_range' => 'in:low,medium,high',
            'rating' => 'nullable|numeric|between:0,5',
            'has_activity' => 'boolean',
            'room_sizes' => 'array',
            'room_sizes.*' => 'string|max:255',
            'available_times' => 'array',
            'available_times.*' => 'string|max:255',
            'contacts' => 'array',
            'contacts.*' => 'string|max:255',
            'categories' => 'array',
            'categories.*' => "exists:categories,id",
        ];
    }
}
