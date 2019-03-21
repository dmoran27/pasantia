<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\User::class,10)->create();

        App\User::create([

                    'nombre'=> 'Diana',
                    'apellido'=> 'Moran',
                    'cedula'=> '2727727',
                    'telefono'=> '123456',
                    'sexo'=> 'Femenino',
                    'area_id'=> 1,                     
                    'email'=>'dianacmoran27@gmail.com',
                    'password'=>bcrypt('123123'),

        ]);
    	
    	Role::create([

    		'name'=>'Admin',
    		'slug'=>'admin',
    		'special'=>'all-access',
    	]);
    }
}
