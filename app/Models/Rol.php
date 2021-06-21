<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    use HasFactory;
    protected $fillable = [
        'Rol', 'Permiso'
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}


