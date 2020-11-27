<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shipping extends Model
{
    use SoftDeletes;

    protected $table = 'shipping';
    protected $primaryKey = 'shipping_id';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'shipping_name',
        'shipping_address',
        'shipping_phone',
        'shipping_desc',
        'shipping_status',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class, 'shipping_id');
    }
}
