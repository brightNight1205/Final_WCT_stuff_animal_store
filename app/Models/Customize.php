<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customize extends Model
{
    protected $fillable = [
       'customize_product',
    ];

    public function productSingles()
    {
        return $this->hasMany(ProductSingle::class, 'customize_id');
    }
}
