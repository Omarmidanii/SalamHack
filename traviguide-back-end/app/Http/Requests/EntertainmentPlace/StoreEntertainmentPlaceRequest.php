<?php

namespace App\Http\Requests\EntertainmentPlace;

use Illuminate\Foundation\Http\FormRequest;

class StoreEntertainmentPlaceRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'string|max:255',
            'location' => 'string|max:255',
            'address' => 'string|max:255',
            'price_range' => 'in:low,medium,high',
            'rating' => 'nullable|numeric|between:1,5',
            'type_of_activity' => 'string|max:255',
            'open_time' => 'date_format:H:i:s',
            'close_time' => 'date_format:H:i:s',
            'contacts' => 'array',
            'contacts.*' => 'string|max:255',
            'categories' => 'array',
            'categories.*' => 'exists:categories,id',
        ];
    }
}