<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Rol;

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
    	
    	Rol::create([

    		'name'=>'Admin',
    		'slug'=>'admin',
    		'special'=>'all-access',
    	])
    }
}
