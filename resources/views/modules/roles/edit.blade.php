@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Roles</div>

                <div class="panel-body">                    
                     <form method="POST" action="{{ route('roles.store') }}" aria-label="{{ __('registrar') }}">
                          @csrf
                                    {!!method_field('PUT')!!}
                       <div class="form-group">
    <label for="name">Nombre de la etiqueta</label>
    <input type="text" class="form-control" name="name" id="name" value="{{$errors->has('name') ? old('name')  :  $role->name}}">
    
</div>
<div class="form-group">
    <label for="slug">URL Amigable</label>
    <input type="text" class="form-control" name="slug" id="slug" value="{{$errors->has('slug') ? old('slug')  :  $role->slug}}">
</div>
<div class="form-group">
    <label for="description">Descripcion</label>
    <textarea class="form-control" name="description" id="description" value="{{$errors->has('description') ? old('description')  :  $role->description}}"></textarea>
</div>
<hr>
<h3>Permiso especial</h3>
<div class="form-group">
    <label for="special">Acceso total</label>
     <input type="radio" name="special" value="all-access">
    <label for="special">Ningún acceso</label>
     <input type="radio" name="special" value="no-access">
</div>
<hr>
<h3>Lista de permisos</h3>
<div class="form-group">
    <ul class="list-unstyled">
        @foreach($permissions as $permission)
        <li>
            <label>

     <input type="checkbox" id="$permission->id">{{ $permission->name }}
            
            
            <em>({{ $permission->description }})</em>
            </label>
        </li>
        @endforeach
    </ul>
</div>
 
<div class="form-group">
      <button type="submit" class="btn btn-primary">
                                    {{ __('Regitrar') }}
                                </button>
</div> 
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection