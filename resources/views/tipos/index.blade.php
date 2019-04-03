

@extends('layouts.app')

@section('content')

<div class="row">
	  @can('tipos.create')
	<div class="col">
		<a href="{{route('tipos.create')}}" class="btn btn-outline-info m-2">Agregar Nuevo tipo</a>
	</div>
	  @endcan
	<div class="col">
		<h2>tipos</h2>
	</div>
	
</div>
<div class="row">
	
	<div class="col">
		<table width="100%" border="1">
			<thead>
				<th>id</th>
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>Tipo</th>
				<th>Usuario</th>
				<th>Acciones</th>
			</thead>
			<tbody>
				@foreach($tipos as $tipo)
				<tr>
					<td>{{$tipo->id}}</td>
					<td>{{$tipo->nombre}}</td>
					<td>{{$tipo->descripcion}}</td>
					<td>{{$tipo->tipo}}</td>
					<td>{{$tipo->user_id}}</td>
					<td>
						<div class="d-flex justify-content-center">	

	  							@can('tipos.create')
								<a href="{{route('tipos.show', $tipo->id)}}" class="btn btn-outline-success m-2">Mostrar</a>
								@endcan
	  							@can('tipos.create')
								<a href="{{route('tipos.edit', $tipo->id)}}" class="btn btn-outline-success m-2">Editar</a>	
								@endcan
	  							@can('tipos.create')							
								<form method="POST" action="{{route('tipos.destroy', $tipo->id)}}">
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