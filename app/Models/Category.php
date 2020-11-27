<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $table = 'categories';
    protected $primaryKey = 'cate_id';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'cate_name',
        'cate_slug',
        'cate_desc',
        'cate_status',
        'parent_id',
    ];

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
    
    public function parent()
    {
        return $this->belongsTo(Category::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function scopeSearch($query, $key)
    {
        return $query->where('cate_name', 'LIKE', '%' . $key . '%');
    }

    public function scopeAvailable($query, $status)
    {
        return $query->where('cate_status', $status);
    }

    public function scopeAvailableLatest($query, $status, $order)
    {
        return $query->where('cate_status', $status)->orderBy('cate_id', $order);
    }

    public function scopeCategoryBySlug($query, $slug)
    {
        return $query->where('cate_slug', $slug);
    }
    
}

