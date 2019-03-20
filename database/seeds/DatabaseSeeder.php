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

       // $this->truncateTables(['Area','Permissions','Users','']);
        
        $this->call(PermissionsTableSeeder::class);
        $this->call(AreasTableSeeder::class);
        $this->call(UsersTableSeeder::class);

        $this->call(EdificiosTableSeeder::class);
        $this->call(DependenciasTableSeeder::class);
        $this->call(ClientesTableSeeder::class);
        $this->call(TicketsTableSeeder::class);
        $this->call(TiposTableSeeder::class);
        $this->call(EquiposTableSeeder::class);
        $this->call(PerifericosTableSeeder::class);
        $this->call(CaracteristicasTableSeeder::class);
         
    }
    protected function truncateTables(array $tables){
        
        DB::Statements('SET FOREING_KEY_CHECKS=0;');
        foreach ($tables as $tabla) {
             DB::table($tables)->truncate();

        }
        DB::Statements('SET FOREING_KEY_CHECKS=1;');

       
    }
}
