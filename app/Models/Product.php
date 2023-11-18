<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    // ================ RELATIONSHIPS ======================
    /**
     * The discounts that belong to the Product.
     */
    public function discounts(): BelongsToMany
    {
        return $this->belongsToMany(Discount::class, 'product_discounts')
        ->withPivot('id', 'product_id', 'discount_id', 'group_id', 'discount_start_date', 'discount_expiry_date');
    }

    public function productStorePrice()
    {
        return $this->attributes['product_price'];
    }

    public function cartQuantityPrice()
    {
        return $this->product_price * $this->pivot->cart_quantity;
    }

    public function getImage()
    {
        return asset('storage/'.$this->product_image1);
    }
}
