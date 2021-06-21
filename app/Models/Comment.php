<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function news()
    {
        return $this->belongsTo('App\Models\News');
    }

    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }

    public function discussion()
    {
        return $this->belongsTo('App\Models\Discussion');
    }

    public function guide()
    {
        return $this->belongsTo('App\Models\Guide');
    }
}
