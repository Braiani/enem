<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Administrator',
                'created_at' => '2018-05-12 04:13:59',
                'updated_at' => '2018-05-12 04:13:59',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'display_name' => 'CEREL/COGEA',
                'created_at' => '2018-05-12 04:13:59',
                'updated_at' => '2018-05-12 04:26:10',
            ),
        ));
        
        
    }
}