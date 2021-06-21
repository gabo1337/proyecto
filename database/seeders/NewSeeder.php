<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Forum;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewSeeder extends Seeder
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
            \App\Models\News::factory(3)
            ->state([
                "forum_id" => $forum_id,
                "user_id" => $user_id,
            ])
            ->create();
        }
    }
}
