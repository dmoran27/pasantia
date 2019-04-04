

@extends('layouts.app')

@section('content')

<div class="row">
	  @can('softwares.create')
	<div class="col">
		<a href="{{route('softwares.create')}}" class="btn btn-outline-info m-2">Agregar Nuevo Tecnico</a>
	</div>
	  @endcan
	<div class="col">
		<h2>Softwares</h2>
	</div>
	
</div>
<div class="row">
	
	<div class="col">
		<table width="100%" border="1">
			<thead>
				<th>id</th>
				<th>Nombre</th>
				<th>Tipo</th>
				<th>Descripcion</th>
				<th>Acciones</th>
			</thead>
			<tbody>
				@foreach($softwares as $software)
				<tr>
					<td>{{$software->id}}</td>
					<td><a href="{{route('softwares.show', $software->id)}}">{{$software->nombre}} {{$software->apellido}}</a></td>
					<td>{{$software->email}}</td>
					<td>{{$software->role}}</td>
					<td>
						<div class="d-flex justify-content-center">	

	  							@can('softwares.create')
								<a href="{{route('softwares.show', $software->id)}}" class="btn btn-outline-success m-2">Mostrar</a>
								@endcan
	  							@can('softwares.create')
								<a href="{{route('softwares.edit', $software->id)}}" class="btn btn-outline-success m-2">Editar</a>	
								@endcan
	  							@can('softwares.create')							
								<form method="POST" action="{{route('softwares.destroy', $software->id)}}">
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