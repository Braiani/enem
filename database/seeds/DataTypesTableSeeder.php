<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-05-12 04:13:57',
                'updated_at' => '2018-05-12 04:13:57',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-05-12 04:13:57',
                'updated_at' => '2018-05-12 04:13:57',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-05-12 04:13:57',
                'updated_at' => '2018-05-12 04:13:57',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'candidatos',
                'slug' => 'candidatos',
                'display_name_singular' => 'Candidato',
                'display_name_plural' => 'Candidatos',
                'icon' => 'voyager-study',
                'model_name' => 'App\\Candidato',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-05-12 04:54:10',
                'updated_at' => '2018-05-17 04:03:33',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'edicoes',
                'slug' => 'edicoes',
                'display_name_singular' => 'Edição',
                'display_name_plural' => 'Edições',
                'icon' => 'voyager-settings',
                'model_name' => 'App\\Edicao',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-05-12 04:55:49',
                'updated_at' => '2018-05-12 04:55:49',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'campus',
                'slug' => 'campus',
                'display_name_singular' => 'Campus',
                'display_name_plural' => 'Campi',
                'icon' => 'voyager-company',
                'model_name' => 'App\\Campus',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-05-17 00:24:21',
                'updated_at' => '2018-05-17 00:24:21',
            ),
        ));
        
        
    }
}