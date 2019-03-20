<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        	'nombre' => $faker->name,
            'apellido' => $faker->firstName,
            'cedula' => mt_rand(10000000,99999999),
            'telefono' => $faker->phoneNumber,
            'area_id'=> $faker-> randomElement(['1', '2']),
            'sexo' => $faker-> randomElement(['Femenino', 'Masculino']),
            'email' => $faker->unique()->safeEmail,
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // 
            'remember_token' => str_random(10),
    ];
});
           
