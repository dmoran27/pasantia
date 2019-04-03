

@extends('layouts.app')

@section('content')

<div class="row">
	  @can('equipos.create')
	<div class="col">
		<a href="{{route('equipos.create')}}" class="btn btn-outline-info m-2">Agregar Nuevo Tecnico</a>
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
				<th>Identificador</th>
				<th>Nombre</th>
				<th>Marca</th>
				<th>Modelo</th>
				<th>Serial</th>
				<th>Estado del equipo</th>
				<th>Perteneciente</th>
				<th>Acciones</th>
			</thead>
			<tbody>
				@foreach($equipos as $equipo)
				<tr>
					<td>{{$equipo->id}}</td>
					<td>{{$equipo->identificador}}</td>
					<td><a href="{{route('equipos.show', $equipo->id)}}">{{$equipo->nombre}} {{$equipo->apellido}}</a></td>
					<td>{{$equipo->marcal}}</td>
					<td>{{$equipo->modelo}}</td>
					<td>{{$equipo->serial}}</td>
					<td>{{$equipo->estado_equipo}}</td>
					<td>{{$equipo->perteneciente}}</td>
					<td>
						<div class="d-flex justify-content-center">	

	  							@can('equipos.create')
								<a href="{{route('equipos.show', $equipo->id)}}" class="btn btn-outline-success m-2">Mostrar</a>
								@endcan
	  							@can('equipos.create')
								<a href="{{route('equipos.edit', $equipo->id)}}" class="btn btn-outline-success m-2">Editar</a>	
								@endcan
	  							@can('equipos.create')							
								<form method="POST" action="{{route('equipos.destroy', $equipo->id)}}">
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