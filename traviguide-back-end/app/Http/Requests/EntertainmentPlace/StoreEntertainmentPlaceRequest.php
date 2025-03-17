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
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'price_range' => 'required|in:low,medium,high',
            'rating' => 'nullable|numeric|between:1,5',
            'type_of_activity' => 'required|string|max:255',
            'open_time' => 'required|date_format:H:i:s',
            'close_time' => 'required|date_format:H:i:s',
            'contacts' => 'required|array',
            'contacts.*' => 'string|max:255',
        ];
    }
}