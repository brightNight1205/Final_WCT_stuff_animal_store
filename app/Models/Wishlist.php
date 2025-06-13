<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $primaryKey = 'wishlist_id'; 
    protected $fillable = [
        'user_id',
        'product_detail_id',
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
