<?php

use Illuminate\Database\Seeder;

class ukatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('u_kats')->insert([
            'id' => '1',
            'id_user' => '1',
            'name' => 'Текучка',
        ]);
        DB::table('u_kats')->insert([
            'id' => '7',
            'id_user' => '1',
            'name' => 'Запросы АВ',
        ]);
        DB::table('u_kats')->insert([
            'id' => '2',
            'id_user' => '1',
            'name' => 'Телефония',
        ]);
        DB::table('u_kats')->insert([
            'id' => '3',
            'id_user' => '1',
            'name' => 'Почта',
        ]);
        DB::table('u_kats')->insert([
            'id' => '4',
            'id_user' => '1',
            'name' => 'Магазины',
        ]);
        DB::table('u_kats')->insert([
            'id' => '5',
            'id_user' => '1',
            'name' => 'Документы',
        ]);
        DB::table('u_kats')->insert([
            'id' => '6',
            'id_user' => '1',
            'name' => '1C',
        ]);
        //
    }
}
