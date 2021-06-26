<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'image', 'icon','content','color1','color2','views','likes'
    ];
    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }
    public function discussions()
    {
        return $this->hasMany('App\Models\Discussions');
    }
    public function guides()
    {
        return $this->hasMany('App\Models\Guide');
    }
    public function news()
    {
        return $this->hasMany('App\Models\News');
    }
    
}
