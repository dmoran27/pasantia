



@extends('layouts.app')

@section('content')

<section class="content login">

        

      <div class="row">
        <div class="col-xs-12">
         
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabla de Roles</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="" class="dataTable1 table table-bordered table-hover">
                <thead>
                <tr>
                 <th>id</th>
                <th>Nombre</th>
                <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                        @foreach($roles as $role)
               <tr>
                    <td>{{$role->id}}</td>
                    <td><a href="{{route('roles.show', $role)}}">{{$role->name}}</a></td>
                    <td>
                        <div class="">  

                                @can('roles.create')
                                <div class="col-xs-2 ">
                                    <a href="{{route('roles.show', $role->id)}}" class="btn btn-info ">Mostrar</a>
                                </div>
                                @endcan
                                @can('roles.create')
                                <div class="col-xs-2 ">
                                    <a href="{{route('roles.edit', $role->id)}}" class="btn btn-success ">Editar</a>
                                </div>              
                                @endcan
                                @can('roles.create')                         
                                <div class="col-xs-2  ">
                                    <form method="POST"  action="{{route('roles.destroy', $role->id)}}">
                                    @csrf
                                    {!!method_field('DELETE')!!}

                                 <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </div>
                                </div>
                                @endcan
                            </div>
                    </td>
                </tr>
                
            
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                 <th>id</th>
                <th>Nombre</th>
                <th>Acciones</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row d-flex justify-content-end ">
              @can('roles.create')
            <div class="col-md-2 ">
                <a href="{{route('roles.create')}}" class="btn btn-info m-2">Agregar Nuevo Role</a>
            </div>
              @endcan
            
            
        </div>

    </section>


@endsection