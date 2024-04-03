<?php

namespace App\Http\Controllers\Api\V1;

use App\DataTransferObjects\ProductDto;
use App\Http\Requests\Api\ProductRequest;
use App\Http\Resources\Api\ProductResource;
use App\Services\Product\ProductService;


class ProductController
{
    public function __construct(protected ProductService $service)
    {

    }

    public function store(ProductRequest $request): ProductResource
    {
        $product = $this->service->store(
            ProductDto::fromApiRequest($request),
        );

        return ProductResource::make(
            $product,
        );

    }
}
