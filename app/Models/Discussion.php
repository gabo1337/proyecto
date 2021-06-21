<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Discussion extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'image', 'content'
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function forums()
    {
        return $this->belongsTo('App\Models\Forum');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

}