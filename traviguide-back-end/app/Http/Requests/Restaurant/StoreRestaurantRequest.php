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
            'name' => 'string|max:255',
            'location' => 'string',
            'address' => 'string|max:255',
            'description' => 'string',
            'price_range' => 'in:low,medium,high',
            'food_types' => 'array',
            'food_types.*' => 'string|max:255',
            'character' => 'string|max:255',
            'rating' => 'nullable|numeric|between:0,5',
            'open_time' => 'date_format:H:i:s',
            'close_time' => 'date_format:H:i:s',
            'contacts' => 'array',
            'contacts.*' => 'string|max:255',
            'categories' => 'array',
            'categories.*' => "exists:categories,id",
        ];
    }
}
