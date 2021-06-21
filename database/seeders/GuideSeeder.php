<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Forum;

class GuideSeeder extends Seeder
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
            \App\Models\Guide::factory(3)
            ->state([
                "forum_id" => $forums->id,
                "user_id" => $forums->user_id
            ])
            ->create();
        }
        
    }
}
