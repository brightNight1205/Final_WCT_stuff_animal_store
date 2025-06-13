<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductSingle extends Model
{
     protected $primaryKey = 'product_single_id'; 
    protected $fillable = [
        'product_detail_id',
        'description',
        'size',
        'quantity',
        'color',
        'customize_id',
    ];

    public function productDetail()
    {
        return $this->belongsTo(ProductDetail::class, 'product_detail_id');
    }
    public function customize()
    {
        return $this->belongsTo(Customize::class, 'customize_id');
    }
}
