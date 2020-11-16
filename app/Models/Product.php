<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $table = 'products';
    protected $primaryKey = 'product_id';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'product_name',
        'product_price',
        'product_slug',
        'product_desc',
        'product_quantity',
        'product_img',
        'product_status',
        'product_viewed',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'cate_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_details', 'order_id', 'product_id');
    }
    
    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}
