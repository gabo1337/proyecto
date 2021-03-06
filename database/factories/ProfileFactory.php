<?php

namespace Database\Factories;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

class ProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profile::class;
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $directorio = storage_path(). '/app/public/profiles/photos';
        Storage::makeDirectory('public/profiles/photos/profile_photo');
        Storage::makeDirectory('public/profiles/photos/covers');

        return [
            'profilephoto'=> 'profiles/photos/profile_photo/fotoperfil.png', 
            'coverpage'=>'profiles/photos/covers/cover.jpeg', 
            'Colour1'=>$this->faker->hexcolor(),
            'Colour2'=>$this->faker->hexcolor(),
            'description'=>$this->faker->paragraph(3),
        ];
    }
}
