<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    protected $table = 'orders';
    protected $primaryKey = 'order_id';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'order_status',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    public function shipping()
    {
        return $this->belongsTo(Shipping::class);
    }
}
