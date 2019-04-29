@extends('layouts.app')

@section('content')

<section class="content login">

		

      <div class="row">
        <div class="col-xs-12">
         
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabla de Tecnicos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="" class="dataTable1 table table-bordered table-hover">
                <thead>
                <tr>
                <th>id</th>
				<th>id</th>
				<th>Nombre</th>
				<th>Email</th>
				<th>Role</th>
				<th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                		@foreach($users as $user)
               <tr>
					<td>{{$user->id}}</td>
					<td><a href="{{route('users.show', $user)}}">{{$user->nombre}} {{$user->apellido}}</a></td>
					<td>{{$user->email}}</td>
					<td>{{$user->role}}</td>
					<td>
						<div class="">	

	  							@can('users.create')
	  							<div class="col-xs-2 ">
	  								<a href="{{route('users.show', $user->id)}}" class="btn btn-info ">Mostrar</a>
	  							</div>
	  							@endcan
	  							@can('users.create')
	  							<div class="col-xs-2 ">
	  								<a href="{{route('users.edit', $user->id)}}" class="btn btn-success ">Editar</a>
	  							</div>				
								@endcan
	  							@can('users.create')							
								<div class="col-xs-2  ">
									<form method="POST"  action="{{route('users.destroy', $user->id)}}">
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
				<th>id</th>
				<th>Nombre</th>
				<th>Email</th>
				<th>Role</th>
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
			  @can('users.create')
			<div class="col-md-2 ">
				<a href="{{route('users.create')}}" class="btn btn-info m-2">Agregar Nuevo Tecnico</a>
			</div>
			  @endcan
			
			
		</div>

    </section>


@endsection