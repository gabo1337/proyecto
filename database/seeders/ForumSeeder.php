<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Forum;
use App\Models\Post;
use App\Models\Discussion;
use App\Models\Guide;
use App\Models\News;

class ForumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Forum::factory($forums)
        ->create();
        
    }
}
