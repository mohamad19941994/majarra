<?php

namespace App\Http\Requests\App;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{

    public function authorize(): bool
    {
        return false;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'max:80'],
            'content' => ['required', 'max:1024'],
        ];
    }
}
