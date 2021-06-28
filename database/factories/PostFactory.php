<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use App\Models\Forum;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;


class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $directorio = storage_path(). '/app/public/Post';
        Storage::makeDirectory('public/Post');

        return [
            'title' => $this->faker->sentence(5),
            'image' => 'Post/logo.jpeg',
            'content' => $this->faker->paragraph(3),
            ];
        } 
    }

