<?php

namespace App\Http\Requests\Restaurant;

use Illuminate\Foundation\Http\FormRequest;

class StoreRestaurantRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'latitude' => 'numeric|between:-90,90',
            'longitude' => 'numeric|between:-180,180',
            'address' => 'required|string|max:255',
            'price_range' => 'required|in:low,medium,high',
            'food_types' => 'required|array',
            'food_types.*' => 'string|max:255',
            'character' => 'required|string|max:255',
            'rating' => 'nullable|numeric|between:0,5',
            'open_time' => 'required|date_format:H:i:s',
            'close_time' => 'required|date_format:H:i:s',
            'contacts' => 'required|array',
            'contacts.*' => 'string|max:255',
        ];
    }
}
