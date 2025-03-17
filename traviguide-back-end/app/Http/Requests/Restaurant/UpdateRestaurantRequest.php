<?php

namespace App\Http\Requests\Restaurant;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRestaurantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'sometimes|string|max:255',
            'latitude' => 'sometimes|numeric|between:-90,90',
            'longitude' => 'sometimes|numeric|between:-180,180',
            'address' => 'sometimes|string|max:255',
            'price_range' => 'sometimes|in:low,medium,high',
            'food_types' => 'sometimes|array',
            'food_types.*' => 'string|max:255',
            'character' => 'sometimes|string|max:255',
            'rating' => 'nullable|numeric|between:0,5',
            'open_time' => 'sometimes|date_format:H:i:s',
            'close_time' => 'sometimes|date_format:H:i:s',
            'contacts' => 'sometimes|array',
            'contacts.*' => 'string|max:255',
        ];
    }
}
