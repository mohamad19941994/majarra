<?php

namespace App\Http\Controllers\App;

use App\DataTransferObjects\ProductDto;
use App\Http\Requests\App\ProductRequest;
use App\Http\Resources\App\ProductResource;
use App\Services\Product\ProductService;


class ProductController
{
    public function __construct(protected ProductService $service)
    {

    }

    public function store(ProductRequest $request): ProductResource
    {
        $product = $this->service->store(
            ProductDto::fromAppRequest($request),
        );

        return ProductResource::make(
            $product,
        );

    }
}
