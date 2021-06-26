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
        $new=News::paginate(10);
        return view('noticias',compact('new'));

    }

    public function show()
    {
        return view('nuevanoticia');

    }

    public function store(Request $Request)
    {
        $Request->validate([
            'title' => 'required:max:120',
            'content' => 'required:max:120',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imageNombre = $Request->file('image')->store(
            'News/','public'

        );
        $title = $Request->get('title');
        $content = $Request->get('content');
        
        $foro = $Request->user()->News()->create([
            'title' => $title,
            'image' => $imageNombre,
            'content' => $content,
        ]);

    }

    
}
