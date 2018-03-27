<?php

use Illuminate\Database\Seeder;

class katSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategories')->insert([
            'key' => 'exch',
            'name' => 'Exchange Server',
        ]);
        DB::table('kategories')->insert([

                'key' => 'aster',
                'name' => 'Asterisk',

            ]);
        DB::table('kategories')->insert([

                'key' => 'cucm',
                'name' => 'Cisco unifited Communication Manager',

            ]);
        DB::table('kategories')->insert([

                'key' => 'MSSQL',
                'name' => 'Microsoft SQL Server',

            ]);
        DB::table('kategories')->insert([

                'key' => 'web',
                'name' => 'Web Developing',

            ]);
        DB::table('kategories')->insert([

                'key' => 'backup',
                'name' => 'Backup (Veeam etc..)',

            ]);
        DB::table('kategories')->insert([

                'key' => 'Linux',
                'name' => 'Linux',

            ]);
        DB::table('kategories')->insert([

                'key' => 'windows',
                'name' => 'Windows',

            ]);
        DB::table('kategories')->insert([

                'key' => 'mikrotik',
                'name' => 'Mikrotik',

            ]);

        factory(App\Note::class,100)->create();

        /*
         *
         * DB::table('kategories')->insert([

                'key' => 'vmware',
                'name' => 'Vmware vSphere',

            ]);
         *
         */
        //
    }
}
