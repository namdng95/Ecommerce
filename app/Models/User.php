<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'username',
        'email',
        'password',
        'fullname',
        'birthday',
        'phone',
        'avatar', 
        'gender',
        'role',
        'facebook',
        'status',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function ratings() 
    {
        return $this->hasMany(Rating::class);
    }

    public function comments() 
    {
        return $this->hasMany(Comments::class);
    }

    public function requests() 
    {
        return $this->hasMany(Request::class);
    }

    public function orders() 
    {
        return $this->hasMany(Order::class);
    }
}
