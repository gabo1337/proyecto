<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'profilephoto', 'coverpage', 'Colour1','Colour2','description'
    ];


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
