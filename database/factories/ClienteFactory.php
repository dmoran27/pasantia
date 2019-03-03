<?php

use Faker\Generator as Faker;

$factory->define(App\Cliente::class, function (Faker $faker) {
    return [
        //
        =>$faker->sentence,
          'nombre'=>$faker->name,
            'apellido' => $faker->firstName,
            'cedula' => str_random(8),
            'telefono' => $faker->phoneNumber,
            'sexo' => $faker-> randomElement(array $array = array('F', 'M')),
            'email' => $faker->unique()->safeEmail,
            'tipo' => $faker->randomElement(array $array = array('estudiante', 'tecnico', 'cliente')),
            'dependencia_id'=> $faker->str_random(1),
            'estado_bd' => $faker->randomElement(array $array = array('modificado_nuevo', 'modificado_anterior', 'creado','eliminado')),
    ];
    ];
});
