<?php

use Faker\Generator as Faker;

$factory->define(App\Ticket::class, function (Faker $faker) {
    return [
        //
 			

 'nombre'=>$faker->name,
           
            
         'tipo'=>$faker->name,
            'identificador'=> str_random(18),
            'marca'=> str_random(8),
            'modelo'=> str_random(8),
            'serial'=> str_random(8),
            'estado_equipo'=> $faker->randomElement(array $array = array('reemplazado', 'obsoleto', 'nuevo')),
            'perteneciente'=> $faker->randomElement(array $array = array('no', 'si')),
            'Observacion'=>$faker->sentence,
           	'area_id'=> str_random(1),
            'estado_bd' => $faker->randomElement(array $array = array('modificado_nuevo', 'modificado_anterior', 'eliminado')), 
			'fecha_i' =>$faker->timezone,
            'fecha_c'=>$faker->timezone,



    ];
});
