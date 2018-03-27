<?php

use Illuminate\Database\Seeder;
use App\Kategory;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         $this->call(katSeeder::class);
         $this->call(settingsSeedr::class);
         $this->call(userSeedr::class);
        $this->call(ukatSeeder::class);
        
    }
}
