<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => "Ivan",
                "email" => "ivander123456@outlook.com",
                "password" => "123456"
            ]
        ]);
    }
}
