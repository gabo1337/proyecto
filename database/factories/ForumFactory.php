<?php

namespace Database\Factories;

use App\Models\Forum;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

class ForumFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Forum::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   

        $directorio = storage_path(). '/app/public/forums/Images_forum';
        Storage::makeDirectory('public/forums/Images_forum/Icon');

        return [
            'title' => $this->faker->sentence(5),
            'image' => 'forums/Images_forum/logo.jpeg',
            'content' => $this->faker->paragraph(3),
            'icon' => 'forums/Images_forum/Icon/logo.jpeg',
            'color1' => $this->faker->hexcolor(),
            'color2' => $this->faker->hexcolor(),
            'views' => $this->faker->randomNumber($nbDigits = NULL, $strict = false),
            'likes' => $this->faker->randomNumber($nbDigits = NULL, $strict = false),
        ];
    }
}
