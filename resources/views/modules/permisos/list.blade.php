@extends('layout')

@section('contenido')

	<div class="text-center"><h2 class="text-primary m-3">Mensajes</h2></div>
	
	<table width="100%" border="1" class="table-striped bg-light shadow border-0">
	<thead class="text-center">
			<th>id</th>
			<th>Nombre</th>
			<th>Email</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			@foreach($msg as $messages)
			<tr>

				<td>{{$messages->id}}</td>
				<td>{{$messages->name}}</td>
				<td>{{$messages->email}}</td>
				<td>
					<div class="d-flex justify-content-center">	
						<a href="{{route('message.show', $messages->id)}}" class="btn btn-outline-success m-2">Mostrar</a>
						<form method="POST" action="{{route('message.destroy', $messages->id)}}">
							{!!csrf_field()!!}
							{!!method_field('DELETE')!!}
						 <button type="submit" class="btn btn-outline-danger m-2">Eliminar</button>
						</form>
					</div>
				</td>
			</tr>
			
			@endforeach
			
		</tbody>
	</table>

		<a class="mt-5 btn btn-primary " href="{{route('message.create')}}"><span><i class="pr-2 fa fa-add"></i>Enviar Mensaje </span>
		</a>
@stop