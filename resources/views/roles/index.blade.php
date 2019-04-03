

@extends('layouts.app')

@section('content')

<div class="row">
      @can('roles.create')
    <div class="col">
        <a href="{{route('roles.create')}}" class="btn btn-outline-info m-2">Agregar Nuevo Trole</a>
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
                <th>Acciones</th>
            </thead>
            <tbody>
                @foreach($roles as $role)
                <tr>
                    <td>{{$role->id}}</td>
                    <td><a href="{{route('roles.show', $role)}}">{{$role->name}}</a></td>
                    
                   
                    <td>
                        <div class="d-flex justify-content-center"> 

                                @can('roles.show')
                                <a href="{{route('roles.show', $role->id)}}" class="btn btn-outline-success m-2">Mostrar</a>
                                @endcan

                                @can('roles.edit')
                                <a href="{{route('roles.edit', $role->id)}}" class="btn btn-outline-success m-2">Editarr</a>
                                @endcan

                                @can('roles.delete')                            
                                <form method="POST" action="{{route('roles.destroy', $role->id)}}">
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