<?php

namespace App\DataTransferObjects;

use App\Enums\ProductSource;
use App\Http\Requests\App\ProductRequest as AppProductRequest;
use App\Http\Requests\Api\ProductRequest as ApiProductRequest;

class ProductDto
{
    public function __construct(
        public readonly string $title,
        public readonly string $content,
        public readonly ProductSource $source,
    )
    {

    }

    public static function fromAppRequest(AppProductRequest $request)
    {
        return new self(
            title:  $request->validated('title'),
            content:  $request->validated('content'),
            source: ProductSource::App
        );
    }

    public static function fromApiRequest(ApiProductRequest $request)
    {
        return new self(
            title:  $request->validated('payload.product.title'),
            content:  $request->validated('payload.product.content'),
            source: ProductSource::Api
        );
    }
}
