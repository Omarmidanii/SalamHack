<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Allow all users to create categories
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255|unique:categories,name',
        ];
    }
}