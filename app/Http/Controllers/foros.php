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
        $forum = Forum::paginate(5);
        $profile = Profile::all();
        return view('foros',compact('forum','user','profile'));
    }

    public function show()
    {
        return view('crearForo.nuevo');
    }

    public function store(Request $Request)
    {

        $Request->validate([

            'title' => 'required:max:120',
            'content' => 'required:max:120',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'image2' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imageNombre = $Request->file('image')->store(
            'forums/Images_forum/fondo','public'

        );

        $imageNombre2 = $Request->file('image2')->store(
            'forums/Images_forum/Icon','public'

        );
        $title = $Request->get('title');
        $color1 = $Request->get('color1');
        $color2 = $Request->get('color2');
        $content = $Request->get('content');
        
        $foro = $Request->user()->Forums()->create([
            'title' => $title,
            'image' => $imageNombre,
            'content' => $content,
            'icon' => $imageNombre2,
            'color1' => $color1,
            'color2' => $color2,
            'views' => 0,
            'likes' => 0,

        ]);

    }
    public function eliminar($foro)
    {

        if (auth()->user()->Rol == 'admin'){
            $foro = Forum::find($foro);
            $foro->delete();
            return redirect('/foros');
        }
        else {
            $foro = Forum::find($foro);
            echo $foro;
            $foro->delete();
            return redirect('/foros');
        }

        

        
    }
    public function prueba($id)
    {

        $resultado = Forum::find($id);
        $resultado->views = $resultado->views + 1;
        $resultado->save();

        

       return view('foroUnico',['forums'=>$resultado]);

        
    }

        
}
