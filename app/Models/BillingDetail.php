<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillingDetail extends Model
{
    protected $table = 'billing_details';

    protected $primaryKey = 'billing_detail_id'; // ✅ tell Laravel the real primary key

    public $incrementing = true; // optional, if auto-incrementing

    protected $keyType = 'int'; 
    protected $fillable = [
       // 'order_id',
        'first_name',
        'last_name',
        'country',
        'city',
        'phone',
        'email',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class, 'billing_detail_id', 'billing_detail_id');
    }
}
