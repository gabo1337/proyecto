<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Forum;
use App\Models\News;
use Illuminate\Support\Facades\Storage;


class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $directorio = storage_path(). '/app/public/News';
        Storage::makeDirectory('public/News');

        return [
            'title' => $this->faker->sentence(5),
            'image' => 'News/'. $this->faker->image($directorio , 400, 300, null, false),
            'content' => $this->faker->paragraph(3),
            ];
        }      
    }
