<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\User;
use App\Models\Forum;


class noticias extends Controller
{
    public function index()
    {
        $user=User::all();
        $new=News::paginate(10);
        return view('noticias',compact('new'));

    }

    public function show($id)
    {
        $new = News::find($id);
        return view('vistaUnicaNoticias',['noticia'=>$new]);
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

        $user = User::find($Request->user()->id);

        $noticia = new News();
        $noticia->title = $Request->get('title');;
        $noticia->content = $Request->get('content');
        $noticia->forum_id = $Request->get('id');
        $noticia->image = $imageNombre;
        $noticia = $user->news()->save($noticia);
        
        return redirect()->route('noticia', ['id' => $noticia->id]);


    }

    
}
