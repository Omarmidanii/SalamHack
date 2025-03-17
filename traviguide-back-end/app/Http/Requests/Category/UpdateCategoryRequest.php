<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Allow all users to update categories
    }

    public function rules()
    {
        return [
            'name' => 'sometimes|string|max:255|unique:categories,name,' . $this->category,
        ];
    }
}
