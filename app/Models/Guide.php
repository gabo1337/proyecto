<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Guide extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'image', 'content'
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function forum()
    {
        return $this->belongsTo('App\Models\Forum');
    }
}
