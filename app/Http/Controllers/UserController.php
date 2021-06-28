<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function profile(User $user)
    {
        return view("perfil",compact('user'));
    }

    public function edit(Profile $profile,Request $request)
    {
        $imageNombre = $request->file('image')->store(
            'profile/','public'

        );
        $imageNombre2 = $request->file('image2')->store(
            'portada/','public'

        );
        $contenido = $request->get('content');
        $color1 = $request->get('Color1');
        $color2 = $request->get('Color2');

        $profile->profilephoto = $imageNombre;
        $profile->coverpage = $imageNombre2;
        $profile->description = $contenido;
        $profile->Colour1=$color1;
        $profile->Colour2=$color2;

        $profile->save();



        
        
    }
}
