<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Request extends Model
{
    use SoftDeletes;

    protected $table = 'requests';
    protected $primaryKey = 'request_id';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'request_content',
        'request_status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
