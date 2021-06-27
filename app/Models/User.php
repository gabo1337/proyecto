<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;    
use Jenssegers\Mongodb\Eloquent\Model;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
    public function forums()
    {
        return $this->hasMany('App\Models\Forum');
    }
    public function discussions()
    {
        return $this->hasMany('App\Models\Disscussion');
    }
    public function guides()
    {
        return $this->hasMany('App\Models\Guide');
    }
    public function news()
    {
        return $this->hasMany('App\Models\News');
    }
    public function roles()
    {
        return $this->hasMany('App\Models\Rol');
    }
    public function profile()
    {
        return $this->hasMany('App\Models\Profile');
    }
}
