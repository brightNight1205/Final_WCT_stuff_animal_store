<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Available extends Model
{
    protected $primaryKey = 'available_id';
    protected $fillable = [
        'status',
    ];

    public function productDetails()
    {
        return $this->hasMany(ProductDetail::class, 'available_status_id');
    }
}
