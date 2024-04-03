<?php

namespace App\Models;

use App\Enums\ProductSource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $casts = [
        'source' => ProductSource::class,
    ];
}
