<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use App\Models\Forum;
use App\Models\News;
use App\Models\Post;

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
        $date = Carbon::now()->startofWeek();
        $noticia = News::latest()->take(4)->get();

        return view('Index',compact('noticia'));
    }

    public function buscar(Request $Request)
    {
        $buscador = $Request->get('search');
        $foro=Forum::where('title','LIKE','%'.$buscador.'%')->get();
        $noticia = News::where('title','LIKE','%'.$buscador.'%')->get();

        return view('busqueda',compact('foro','noticia'));
    }
}
