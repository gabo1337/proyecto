<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Python extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('prueba',compact('user'));

    }
}
