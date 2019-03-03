<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

        public function run()
    {
        //Usuarios**********************************************************************************************
          Permission::create([
        		'name' =>'Listar Tecnicos',
        		'slug' => 'user.index',
        		'description'=>'Listar todos los usuarios del sistema',

        ]);
           Permission::create([
        		'name' =>'Ver detalle de Tecnicos',
        		'slug' => 'user.show',
        		'description'=>'Ver en detalle cada usuario del sistema',

        ]);
            Permission::create([
        		'name' =>'Editar de Tecnicos',
        		'slug' => 'user.edit',
        		'description'=>'Editar cualquier dato de un usuario del sistema',

        ]);
             Permission::create([
        		'name' =>'Eliminar Tecnicos',
        		'slug' => 'user.destroy',
        		'description'=>'Eliminar cualquier usuario del sistema',

        ]);
               Permission::create([
        		'name' =>'Crear Tecnicos',
        		'slug' => 'user.create',
        		'description'=>'Agregar usuario al sistema',
        ]);
               //Roles********************************************************************************************
          Permission::create([
        		'name' =>'Listar edificio',
        		'slug' => 'role.index',
        		'description'=>'Listar todos los roles del sistema',

        ]);
           Permission::create([
        		'name' =>'Ver detalle de roles',
        		'slug' => 'role.show',
        		'description'=>'Ver en detalle cada rol del sistema',

        ]);
            Permission::create([
        		'name' =>'Editar de roles',
        		'slug' => 'role.edit',
        		'description'=>'Editar cualquier dato de un rol del sistema',

        ]);
             Permission::create([
        		'name' =>'Eliminar rol',
        		'slug' => 'role.destroy',
        		'description'=>'Eliminar cualquier rol del sistema',

        ]);
               Permission::create([
        		'name' =>'Crear rol',
        		'slug' => 'role.create',
        		'description'=>'Agregar rol al sistema',
        ]);

                    

                   //edificio*********************************************************************************
          Permission::create([
        		'name' =>'Listar edificios',
        		'slug' => 'edificio.index',
        		'description'=>'Listar todos los edificios del sistema',

        ]);
           Permission::create([
        		'name' =>'Ver detalle de edificio',
        		'slug' => 'edificio.show',
        		'description'=>'Ver en detalle cada edificio del sistema',

        ]);
            Permission::create([
        		'name' =>'Editar de edificio',
        		'slug' => 'edificio.edit',
        		'description'=>'Editar cualquier dato de un edificio del sistema',

        ]);
             Permission::create([
        		'name' =>'Eliminar edificio',
        		'slug' => 'edificio.destroy',
        		'description'=>'Eliminar cualquier edificio del sistema',

        ]);
               Permission::create([
        		'name' =>'Crear edificio',
        		'slug' => 'edificio.create',
        		'description'=>'Agregar edificio al sistema',
        ]);

               //Clientes**************************************************************************************
          Permission::create([
        		'name' =>'Listar Clientes',
        		'slug' => 'cliente.index',
        		'description'=>'Listar todos los clientes del sistema',

        ]);
           Permission::create([
        		'name' =>'Ver detalle de Clientes',
        		'slug' => 'cliente.show',
        		'description'=>'Ver en detalle cada clientes del sistema',

        ]);
            Permission::create([
        		'name' =>'Editar de Clientes',
        		'slug' => 'cliente.edit',
        		'description'=>'Editar cualquier dato de un  clientes del sistema',

        ]);
             Permission::create([
        		'name' =>'Eliminar Clientes',
        		'slug' => 'cliente.destroy',
        		'description'=>'Eliminar cualquier  clientes del sistema',

        ]);
               Permission::create([
        		'name' =>'Crear Clientes',
        		'slug' => 'cliente.create',
        		'description'=>'Agregar clientes al sistema',
        ]);

        //Dependencia**************************************************************************************
          Permission::create([
        		'name' =>'Listar Dependencias',
        		'slug' => 'dependencia.index',
        		'description'=>'Listar todos los Dependencia del sistema',

        ]);
           Permission::create([
        		'name' =>'Ver detalle de Dependencias',
        		'slug' => 'dependencia.show',
        		'description'=>'Ver en detalle cada Dependencia del sistema',

        ]);
            Permission::create([
        		'name' =>'Editar de Dependencias',
        		'slug' => 'dependencia.edit',
        		'description'=>'Editar cualquier dato de un  Dependencia del sistema',

        ]);
             Permission::create([
        		'name' =>'Eliminar Dependencias',
        		'slug' => 'dependencia.destroy',
        		'description'=>'Eliminar cualquier  Dependencia del sistema',

        ]);
               Permission::create([
        		'name' =>'Crear Dependencias',
        		'slug' => 'dependencia.create',
        		'description'=>'Agregar dependencias al sistema',
        ]);
                       //tickets**************************************************************************************
          Permission::create([
        		'name' =>'Listar tickets',
        		'slug' => 'ticket.index',
        		'description'=>'Listar todos los tickets del sistema',

        ]);
           Permission::create([
        		'name' =>'Ver detalle de tickets',
        		'slug' => 'ticket.show',
        		'description'=>'Ver en detalle cada ticket del sistema',

        ]);
            Permission::create([
        		'name' =>'Editar de tickets',
        		'slug' => 'ticket.edit',
        		'description'=>'Editar cualquier dato de una ticket del sistema',

        ]);
             Permission::create([
        		'name' =>'Eliminar tickets',
        		'slug' => 'ticket.destroy',
        		'description'=>'Eliminar cualquier  ticket del sistema',

        ]);
               Permission::create([
        		'name' =>'Crear tickets',
        		'slug' => 'ticket.create',
        		'description'=>'Agregar ticket al sistema',
        ]);
                       //Clientes**************************************************************************************
          Permission::create([
        		'name' =>'Listar Areas',
        		'slug' => 'area.index',
        		'description'=>'Listar todos los Areas del sistema',

        ]);
           Permission::create([
        		'name' =>'Ver detalle de Areas',
        		'slug' => 'area.show',
        		'description'=>'Ver en detalle cada Areas del sistema',

        ]);
            Permission::create([
        		'name' =>'Editar de Areas',
        		'slug' => 'area.edit',
        		'description'=>'Editar cualquier dato de un  Areas del sistema',

        ]);
             Permission::create([
        		'name' =>'Eliminar Areas',
        		'slug' => 'area.destroy',
        		'description'=>'Eliminar cualquier  Areas del sistema',

        ]);
               Permission::create([
        		'name' =>'Crear Areas',
        		'slug' => 'area.create',
        		'description'=>'Agregar clientes al sistema',
        ]);



    }

}
