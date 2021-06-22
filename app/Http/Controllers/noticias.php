<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\User;

class noticias extends Controller
{
    public function index()
    {
        $user=User::all();
        $new=News::all();
        return view('noticias',compact('new'));

    }
}
