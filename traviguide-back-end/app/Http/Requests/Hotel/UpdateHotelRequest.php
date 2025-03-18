<?php

namespace App\Http\Requests\Hotel;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHotelRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'sometimes|string|max:255',
            'location' => 'string',
            'address' => 'sometimes|string|max:255',
            'description' => 'string',
            'price_range' => 'sometimes|in:low,medium,high',
            'rating' => 'nullable|numeric|between:0,5',
            'has_activity' => 'sometimes|boolean',
            'room_sizes' => 'sometimes|array',
            'room_sizes.*' => 'string|max:255',
            'available_times' => 'sometimes|array',
            'available_times.*' => 'string|max:255',
            'contacts' => 'sometimes|array',
            'contacts.*' => 'string|max:255',
            'categories' => 'sometimes|array',
            'categories.*' => "exists:categories,id",
        ];
    }
}