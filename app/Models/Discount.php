<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Discount extends Model
{
    use HasFactory;

    protected $with = ['groups'];

    /**
     * The groups that belong to the Discounts.
     */
    public function groups(): BelongsToMany
    {
        return $this->belongsToMany(Group::class, 'product_discounts', 'discount_id', 'group_id');
    }
}
