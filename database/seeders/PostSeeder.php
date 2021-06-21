<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Forum;
use App\Models\Post;
use App\Models\Discussion;
use App\Models\Guide;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $forum = Forum::all(); 
        foreach($forum as $forums){
            $forum_id = $forums->id;
            $user_id = $forums->user_id;
            \App\Models\Post::factory(3)
            ->state([
                "forum_id" => $forum_id,
                "user_id" => $user_id,
            ])
            ->create();
        }
        
    }
}
