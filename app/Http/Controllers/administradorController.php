<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class administradorController extends Controller
{
    public function index()
    {

        $user=User::all();
        return view('administrador',compact('user'));
    }


    public function eliminar($id)
    {

     User::find($id)->delete();
     return view('administrador');

    }


}
