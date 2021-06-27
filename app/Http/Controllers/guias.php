<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guide;
use App\Models\User;
use App\Models\Profile;

class guias extends Controller
{
    public function index()
    {
        $user = User::all();
        $guia = Guide::paginate(4);
        $profile = Profile::all();

        return view('guias',compact('guia','user','profile'));
    }
}

