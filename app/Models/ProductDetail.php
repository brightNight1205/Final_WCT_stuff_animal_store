<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
   // protected $primaryKey = 'billing_detail_id';
   protected $primaryKey = 'product_detail_id';


    protected $fillable = [
        'name',
        'discount',
        'cost',
        'category_animal_id',
        'available_status_id',
        'image',
    ];

public function category()
    {
        return $this->belongsTo(CategoryAnimal::class, 'category_animal_id');
    }

    public function availableStatus()
    {
        return $this->belongsTo(Available::class, 'available_status_id');
    }

    public function productSingles()
    {
        return $this->hasMany(ProductSingle::class, 'product_detail_id');
    }

}
