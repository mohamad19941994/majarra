<?php

namespace App\Http\Requests\Api;

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
            'payload.product.title' => ['required', 'max:80'],
            'payload.product.content' => ['required', 'max:1024'],
        ];
    }
}
