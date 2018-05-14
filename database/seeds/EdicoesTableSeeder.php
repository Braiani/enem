<?php

use Illuminate\Database\Seeder;

class EdicoesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('edicoes')->delete();
        
        \DB::table('edicoes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'ano' => 2009,
            ),
            1 => 
            array (
                'id' => 2,
                'ano' => 2010,
            ),
            2 => 
            array (
                'id' => 3,
                'ano' => 2011,
            ),
            3 => 
            array (
                'id' => 4,
                'ano' => 2012,
            ),
            4 => 
            array (
                'id' => 5,
                'ano' => 2013,
            ),
            5 => 
            array (
                'id' => 6,
                'ano' => 2014,
            ),
            6 => 
            array (
                'id' => 7,
                'ano' => 2015,
            ),
            7 => 
            array (
                'id' => 8,
                'ano' => 2016,
            ),
        ));
        
        
    }
}