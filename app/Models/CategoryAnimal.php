<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryAnimal extends Model
{
        protected $table = 'category_animals';

    protected $primaryKey = 'category_animal_id'; // 👈 Important!

    public $incrementing = true;
    protected $keyType = 'int';
    protected $fillable = [
        'name',
        
    ];

    public function productDetails()
    {
        return $this->hasMany(ProductDetail::class, 'category_animal_id');
    }
}
