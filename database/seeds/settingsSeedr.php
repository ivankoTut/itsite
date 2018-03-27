<?php

use Illuminate\Database\Seeder;


class settingsSeedr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('settings')->insert([
            'key' => 'adminmail',
            'name' => 'mmaks@mmaks.cf',
        ]);
        DB::table('settings')->insert([

            'key' => 'title',
            'name' => 'it asterisk vmware exchange mikrotik',

        ]);
        DB::table('settings')->insert([

            'key' => 'keywords',
            'name' => 'it,vmware,exchange,mikrotik,support, remote help,linux,windows,asterisk',

        ]);
        DB::table('settings')->insert([

            'key' => 'name',
            'name' => 'mmaks.cf',

        ]);
        DB::table('settings')->insert([

            'key' => 'description',
            'name' => 'IT',

        ]);
        //
    }
}
