<?php

use Faker\Generator as Faker;

$factory->define(App\Equipo::class, function (Faker $faker) {
    return [
        //

        
         	'tipo'=>$faker->name,
            'identificador'=> str_random(18),
            'marca'=> str_random(8),
            'modelo'=> str_random(8),
            'serial'=> str_random(8),
            'estado_equipo'=> $faker->randomElement(array $array = array('reemplazado', 'obsoleto', 'nuevo')),
            'perteneciente'=> $faker->randomElement(array $array = array('no', 'si')),     
            'estado_bd' => $faker->randomElement(array $array = array('modificado_nuevo', 'modificado_anterior', 'creado','eliminado')),


            timezone

    ];
});
