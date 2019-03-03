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
            'cedula' => str_random(8),
            'telefono' => $faker->phoneNumber,
            'area'=>randomElement(array $array = array('cau', 'cpo'))
            'sexo' => $faker-> randomElement(array $array = array('F', 'M')),
            'email' => $faker->unique()->safeEmail,
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'estado_bd' => $faker->randomElement(array $array = array('modificado_nuevo', 'modificado_anterior', 'creado','eliminado')),
            'remember_token' => str_random(10),
    ];
});
           
