<?php

use Faker\Generator as Faker;

$factory->define(App\Dependencia::class, function (Faker $faker) {
    return [

 			'nombre'=>$faker->name,
 			'piso' => str_random(1),
            'edificio_id' => str_random(1),
            'estado_bd' => $faker->randomElement(array $array = array('modificado_nuevo', 'modificado_anterior', 'creado','eliminado')),

    ];
});
