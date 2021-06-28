<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guide;
use App\Models\User;
use App\Models\News;
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
    public function show($id)
    {
        $guia = Guide::find($id);
        return view('vistaUnicaGuias',['guia'=>$guia]);
    }
    public function store(Request $Request)
    {
        $Request->validate([
            'title' => 'required:max:120',
            'content' => 'required:max:120',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imageNombre = $Request->file('image')->store(
            'Guides/','public'

        );

        $user = User::find($Request->user()->id);

        
        $guia = new Guide();
        $guia->title = $Request->get('title');;
        $guia->content = $Request->get('content');
        $guia->forum_id = $Request->get('id');
        $guia->image = $imageNombre;
        $guia = $user->guides()->save($guia);

        return redirect()->route('guia', ['id' => $guia->id]);
    }
}

