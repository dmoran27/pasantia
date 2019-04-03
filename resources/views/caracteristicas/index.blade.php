

@extends('layouts.app')

@section('content')

<div class="row">
	  @can('caracteristicas.create')
	<div class="col">
		<a href="{{route('caracteristicas.create')}}" class="btn btn-outline-info m-2">Agregar Nuevo caracteristica</a>
	</div>
	  @endcan
	<div class="col">
		<h2>caracteristicas</h2>
	</div>
	
</div>
<div class="row">
	
	<div class="col">
		<table width="100%" border="1">
			<thead>
				<th>id</th>
				<th>Nombre</th>
				<th>Propiedad</th>
				<th>Usuario</th>
				<th>Acciones</th>
			</thead>
			<tbody>
				@foreach($caracteristicas as $caracteristica)
				<tr>
					<td>{{$caracteristica->id}}</td>
					<td>{{$caracteristica->nombre}}</td>
					<td>{{$caracteristica->propiedad}}</td>
					<td>{{$caracteristica->user_id}}</td>
					<td>
						<div class="d-flex justify-content-center">	

	  							@can('caracteristicas.create')
								<a href="{{route('caracteristicas.show', $caracteristica->id)}}" class="btn btn-outline-success m-2">Mostrar</a>
								@endcan
	  							@can('caracteristicas.create')
								<a href="{{route('caracteristicas.edit', $caracteristica->id)}}" class="btn btn-outline-success m-2">Editar</a>	
								@endcan
	  							@can('caracteristicas.create')							
								<form method="POST" action="{{route('caracteristicas.destroy', $caracteristica->id)}}">
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