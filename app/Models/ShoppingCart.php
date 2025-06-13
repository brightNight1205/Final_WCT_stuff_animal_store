<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    // Set the correct primary key column name here:
     protected $primaryKey = 'cart_id';

    protected $fillable = [
        'user_id',
        'product_detail_id',
        'quantity',
        'size',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function product()
    {
        return $this->belongsTo(ProductDetail::class, 'product_detail_id');
    }
}
