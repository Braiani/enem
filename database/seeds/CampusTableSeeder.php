<?php

use Illuminate\Database\Seeder;

class CampusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('campus')->delete();
        
        \DB::table('campus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nome' => 'Aquidauana',
                'sigla' => 'AQ',
            ),
            1 => 
            array (
                'id' => 2,
                'nome' => 'Campo Grade',
                'sigla' => 'CG',
            ),
            2 => 
            array (
                'id' => 3,
                'nome' => 'Corumbá',
                'sigla' => 'CB',
            ),
            3 => 
            array (
                'id' => 4,
                'nome' => 'Coxim',
                'sigla' => 'CX',
            ),
            4 => 
            array (
                'id' => 5,
                'nome' => 'Dourados',
                'sigla' => 'DR',
            ),
            5 => 
            array (
                'id' => 6,
                'nome' => 'Jardim',
                'sigla' => 'JD',
            ),
            6 => 
            array (
                'id' => 7,
                'nome' => 'Naviraí',
                'sigla' => 'NV',
            ),
            7 => 
            array (
                'id' => 8,
                'nome' => 'Nova Andradina',
                'sigla' => 'NA',
            ),
            8 => 
            array (
                'id' => 9,
                'nome' => 'Ponta Porã',
                'sigla' => 'PP',
            ),
            9 => 
            array (
                'id' => 10,
                'nome' => 'Três Lagoas',
                'sigla' => 'TL',
            ),
        ));
        
        
    }
}