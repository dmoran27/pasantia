<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->truncateTables(['Area','Users', 'Permissions', 'Roles']),

        $this->call(UsersTableSeeder::class);
         $this->call(PermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
         $this->call(AreasTableSeeder::class);
    }
    protected function truncateTables(array $tables){
        
        DB::Statements('SET FOREING_KEY_CHECKS=0;');
        foreach ($tables as $tabla) {
             DB::table($tables)->truncate();

        }
        DB::Statements('SET FOREING_KEY_CHECKS=1;');

       
    }
}
