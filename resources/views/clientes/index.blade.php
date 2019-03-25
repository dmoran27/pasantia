

@extends('layouts.app')

@section('content')

<div class="row">
	  @can('clientes.create')
	<div class="col">
		<a href="{{route('clientes.create')}}" class="btn btn-outline-info m-2">Agregar Nuevo Cliente</a>
	</div>
	  @endcan
	<div class="col">
		<h2>Clientes</h2>
	</div>
	
</div>
<div class="row">
	
	<div class="col">
		<table width="100%" border="1">
			<thead>
				<th>id</th>
				<th>Nombre</th>
				<th>Cedula</th>
				<th>Tipo</th>
				<th>Departamento</th>
				<th>Acciones</th>
			</thead>
			<tbody>
				@foreach($clientes as $cliente)
				<tr>
					<td>{{$cliente->id}}</td>
					<td><a href="{{route('clientes.show', $cliente->id)}}">{{$cliente->nombre}} {{$cliente->apellido}}</a></td>
					<td>{{$cliente->cedula}}</td>
					<td>{{$cliente->tipo}}</td>
					<td>{{$cliente->departamento_id}}</td>
					<td>
						<div class="d-flex justify-content-center">	

	  							@can('clientes.create')
								<a href="{{route('clientes.show', $cliente->id)}}" class="btn btn-outline-success m-2">Mostrar</a>
								@endcan
	  							@can('clientes.create')
								<a href="{{route('clientes.edit', $cliente->id)}}" class="btn btn-outline-success m-2">Editar</a>	
								@endcan
	  							@can('clientes.create')							
								<form method="POST" action="{{route('clientes.destroy', $cliente->id)}}">
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