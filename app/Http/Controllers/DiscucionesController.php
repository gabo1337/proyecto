<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discussion;
use App\Models\User;

class DiscucionesController extends Controller
{
    public function index()
    {


    }
    
    public function show($id)
    {
        $discucion = Discussion::find($id);
        return view('vistaUnicaDiscusiones',['discucion'=>$discucion]);
    }

    public function store(Request $Request)
    {
        $Request->validate([
            'title' => 'required:max:120',
            'content' => 'required:max:120',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imageNombre = $Request->file('image')->store(
            'Discuciones/','public'

        );

        $user = User::find($Request->user()->id);

        $discucion = new Discussion();
        $discucion->title = $Request->get('title');;
        $discucion->content = $Request->get('content');
        $discucion->forum_id = $Request->get('id');
        $discucion->image = $imageNombre;
        $discucion = $user->discussions()->save($discucion);

        return redirect()->route('discucion', ['id' => $discucion->id]);
    }
}
