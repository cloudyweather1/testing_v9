<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductDiscount extends Model
{
    use HasFactory;

    protected $table = 'product_discounts';

    /**
     * Get all of the products for the ProductDiscounts.
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
