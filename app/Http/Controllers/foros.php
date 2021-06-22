<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Forum;
use App\Models\User;
use App\Models\Profile;

class foros extends Controller
{
    public function index()
    {
        $user = User::all();
        $forum = Forum::all();
        $profile = Profile::all();

        
         return view('foros',compact('forum','user','profile'));
    }
}
