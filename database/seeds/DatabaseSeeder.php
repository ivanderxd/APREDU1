<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{

    // private function seedUsers()
    // {
    // 	DB::table('users')(); 

    // 	$user = new User;
    // 	$user->name = "admin";
    // 	$user->email = "ivan@gmail.com";
    // 	$user->password = Hash::make("123");
    // 	$user->save();  

    // 	$userD = new User;
    // 	$userD->name = "Lupita";
    // 	$userD->email = "Lupita@gmail.com";
    // 	$userD->password = Hash::make("123");
    // 	$userD->save(); 		
    // }

    
    public function run()
    {
      
        $this->call(TipomaterialesSeeder::class);
        $this->call(MaterialesSeeder::class);

    }
}
