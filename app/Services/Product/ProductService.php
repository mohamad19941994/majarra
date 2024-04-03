<?php

namespace App\Services\Product;

use App\DataTransferObjects\ProductDto;
use App\Models\Product;

class ProductService
{
    public function store(ProductDto $dto)
    {
        return Product::create([
            'title' => $dto->title,
            'content' => $dto->content,
            'source' => $dto->source,
        ]);
    }
}
