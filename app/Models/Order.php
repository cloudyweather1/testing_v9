<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'subtotal',
        'total',
        'payment',
        'payment_id',
    ];

    /**
     * The products that belong to the Order.
     */
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }

    /**
     * Get all of the order_product for the Order.
     */
    public function order_product(): HasMany
    {
        return $this->hasMany(Order_product::class, 'order_id');
    }
}
