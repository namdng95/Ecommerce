<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use SoftDeletes;

    protected $table = 'payments';
    protected $primaryKey = 'payment_id';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'payment_code',
        'payment_method',
        'payer_email',
        'amount',
        'currency',
        'payment_status',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class, 'payment_id');
    }
}
