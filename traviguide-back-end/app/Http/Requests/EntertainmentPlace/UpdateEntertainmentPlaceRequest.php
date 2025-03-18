<?php

namespace App\Http\Requests\EntertainmentPlace;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEntertainmentPlaceRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'sometimes|string|max:255',
            'location' => 'sometimes|string|max:255',
            'description' => 'string',
            'address' => 'sometimes|string|max:255',
            'price_range' => 'sometimes|in:low,medium,high',
            'rating' => 'nullable|numeric|between:1,5',
            'type_of_activity' => 'sometimes|string|max:255',
            'open_time' => 'sometimes|date_format:H:i:s',
            'close_time' => 'sometimes|date_format:H:i:s',
            'contacts' => 'sometimes|array',
            'contacts.*' => 'string|max:255',
            'categories' => 'sometimes|array',
            'categories.*' => 'exists:categories,id',
        ];
    }
}
