<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;

class UserController extends Controller
{
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


        $profile->profilephoto = $imageNombre;
        $profile->description = $contenido;
        $profile->save();



        
        
    }
}
