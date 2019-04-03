

@extends('layouts.app')

@section('content')

<div class="row">
	  @can('softwares.create')
	<div class="col">
		<a href="{{route('softwares.create')}}" class="btn btn-outline-info m-2">Agregar Nuevo Tecnico</a>
	</div>
	  @endcan
	<div class="col">
		<h2>Tecnicos</h2>
	</div>
	
</div>
<div class="row">
	
	<div class="col">
		<table width="100%" border="1">
			<thead>
				<th>id</th>
				<th>Nombre</th>
				<th>Email</th>
				<th>Role</th>
				<th>Acciones</th>
			</thead>
			<tbody>
				@foreach($softwares as $user)
				<tr>
					<td>{{$user->id}}</td>
					<td><a href="{{route('softwares.show', $user->id)}}">{{$user->nombre}} {{$user->apellido}}</a></td>
					<td>{{$user->email}}</td>
					<td>{{$user->role}}</td>
					<td>
						<div class="d-flex justify-content-center">	

	  							@can('softwares.create')
								<a href="{{route('softwares.show', $user->id)}}" class="btn btn-outline-success m-2">Mostrar</a>
								@endcan
	  							@can('softwares.create')
								<a href="{{route('softwares.edit', $user->id)}}" class="btn btn-outline-success m-2">Editar</a>	
								@endcan
	  							@can('softwares.create')							
								<form method="POST" action="{{route('softwares.destroy', $user->id)}}">
									@csrf
									{!!method_field('DELETE')!!}

								 <button type="submit" class="btn btn-outline-danger m-2">Eliminar</button>
								</form>
								@endcan
							</div>
					</td>
				</tr>
				
				@endforeach
				
			</tbody>
		</table>
	</div>
</div>

@endsection