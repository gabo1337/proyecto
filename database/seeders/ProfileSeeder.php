<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all(); 

        foreach($users as $user){
            $user_id = $user->_id;    
            \App\Models\Profile::factory(1)
            ->state([
                "user_id" => $user_id,
            ])
            ->create();
    }
  }
}


