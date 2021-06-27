<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use App\Models\Forum;
use App\Models\News;
use App\Models\Post;
use App\Models\User;
use App\Models\Profile;
use App\Models\Discussion;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = Auth::id();
        $resultado = User::find($user_id);
        if ($resultado->profile == '[]' )
        {
            $perfil = New Profile;
            $perfil->profilephoto = 'profiles/photos/profile_photo/fotoperfil.png';
            $perfil->coverpage = 'profiles/photos/covers/cover.png';
            $perfil->Colour1 = '#54259a';
            $perfil->Colour2 = '#54259a';
            $perfil->description = 'funciona  :D';
            $resultado->profile()->save($perfil);   
        }

        $date = Carbon::now()->startofWeek();
        $noticia = News::latest()->take(4)->get();

        return view('Index',compact('noticia'));
    }

    public function buscar(Request $Request)
    {
        $buscador = $Request->get('search');
        $foro=Forum::where('title','LIKE','%'.$buscador.'%')->get();
        $noticia = News::where('title','LIKE','%'.$buscador.'%')->get();
        $post = Post::where('title','LIKE','%'.$buscador.'%')->get();
        $discucion = Discussion::where('title','LIKE','%'.$buscador.'%')->get();
        $user = User::all();
        $profile = Profile::all();

        return view('buscadorproyecto',compact('foro','noticia','post','discucion','user','profile'));
    }
}
