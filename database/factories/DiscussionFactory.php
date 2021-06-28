<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\User;
use App\Models\Forum;
use App\Models\Discussion;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

class DiscussionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Discussion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $directorio = storage_path(). '/app/public/Discussion';
        Storage::makeDirectory('public/Discussion');

        return [
            'title' => $this->faker->sentence(5),
            'image' => 'Discussion/logo.jpeg',
            'content' => $this->faker->paragraph(3),
            ];
        }  
    }

