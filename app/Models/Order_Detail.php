<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order_Detail extends Model
{
    use SoftDeletes;

    protected $table = 'order_details';
    protected $primaryKey = 'order_details_id';
    protected $dates = ['deleted_at'];
}
