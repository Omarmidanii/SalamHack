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
            'name' => 'required|string|max:255',
            'location' => 'required|string',
            'address' => 'required|string|max:255',
            'price_range' => 'required|in:low,medium,high',
            'rating' => 'nullable|numeric|between:0,5',
            'has_activity' => 'required|boolean',
            'room_sizes' => 'required|array',
            'room_sizes.*' => 'string|max:255',
            'available_times' => 'required|array',
            'available_times.*' => 'string|max:255',
            'contacts' => 'required|array',
            'contacts.*' => 'string|max:255',
        ];
    }
}
