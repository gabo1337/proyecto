<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class postController extends Controller
{

    public function show($id)
    {
        $post = Post::find($id);
        return view('vistaUnicaPosts',['post'=>$post]);
    }

    public function store(Request $Request)
    {
        $Request->validate([
            'title' => 'required:max:120',
            'content' => 'required:max:120',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imageNombre = $Request->file('image')->store(
            'Posts/','public'

        );

        $user = User::find($Request->user()->id);

        
        $post = new Post();
        $post->title = $Request->get('title');;
        $post->content = $Request->get('content');
        $post->forum_id = $Request->get('id');
        $post->image = $imageNombre;
        $post = $user->posts()->save($post);

        return redirect()->route('post', ['id' => $post->id]);
    }
}
