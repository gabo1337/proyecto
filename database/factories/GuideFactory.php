<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Forum;
use App\Models\Guide;
use Illuminate\Support\Facades\Storage;


class GuideFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Guide::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $directorio = storage_path(). '/app/public/Guides';
        Storage::makeDirectory('public/Guides');

        return [
            'title' => $this->faker->sentence(5),
            'image' => 'Guides/'. $this->faker->image($directorio , 400, 300, null, false),
            'content' => $this->faker->paragraph(3),
            ];
        }
    }

