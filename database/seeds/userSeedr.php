<?php

use Illuminate\Database\Seeder;

class userSeedr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'mmaks',
            'email' => 'mmaks17@gmail.com',
            'password' => bcrypt('Qwerty7'),
            'role'=>1
        ]);
        //
    }
}
