<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Discussion;
use App\Models\User;
use App\Notifications\CommentNotification;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');   
    }

    public function storeDis(Request $request)
    {
        # code...
        $request->validate([
            'content' => 'required:max250',
        ]);

        $comment = new Comment();
        $comment->user_id = $request->user()->id;
        $comment->content = $request->get('content');

        $discusion = Discussion::find($request->get('id'));
        $discusion->comments()->save($comment);

        return redirect()->route('discucion', ['id' => $request->get('id')]);
    }
}
