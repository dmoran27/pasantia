<div class="form-group">
	<label for="name">Nombre de la etiqueta</label>
	<input type="text" class="form-control" name="name" id="name">
	
</div>
<div class="form-group">
	<label for="slug">URL Amigable</label>
	<input type="text" class="form-control" name="slug" id="slug">
</div>
<div class="form-group">
	<label for="description">Descripcion</label>
	<textarea class="form-control" name="description" id="description"></textarea>
</div>
<hr>
<h3>Permiso especial</h3>
<div class="form-group">
	<label for="special">Acceso total</label>
	 <input type="radio" value="all-access">
	<label for="special">Ningún acceso</label>
	 <input type="radio" value="no-access">
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