
@extends('layouts.app')

@section('content')
<section class="content login">	

      <div class="row">
        <div class="col-xs-12">
         
          <div class="box" >
            <div class="box-header">
              <h3 class="box-title">Tabla de equipos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="overflow-x: scroll;">
              <table id="" class="dataTable1 table table-bordered table-hover">
                <thead>
                <tr>
                	<th>id</th>
				<th>Identificador</th>
				<th>Nombre</th>
				<th>Marca</th>
				<th>Modelo</th>
				<th>Serial</th>
				<th>Estado</th>
				<th>Perteneciente</th>
				<th>Registro</th>
                <th>Modificación</th>
				<th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($equipos as $equipo)
	               <tr class="item{{$equipo->id}} ">
						<td>{{$equipo->id}}</td>
						<td>{{$equipo->identificador}}</td>
						@can('equipos.create')
						<td>
							<a href="{{route('equipos.show', $equipo->id)}}" class="show-modal mostrar" data-content="{{$equipo->id}}" id="{{$equipo->id}}">
                                {{$equipo->nombre}}
                            </a>
						</td>
						@endcan					
						<td>{{$equipo->marca}}</td>
						<td>{{$equipo->modelo}}</td>
						<td>{{$equipo->serial}}</td>
						<td>{{$equipo->estado_equipo}}</td>
						<td>{{$equipo->perteneciente}}</td>
						 <td>{{date("d/m/Y", strtotime($equipo->created_at)) }}</td>
                        <td>{{date("d/m/Y", strtotime($equipo->updated_at)) }}</td>
						<td class="d-flex justify-content-between">
							@can('equipos.edit')
                            <a href="{{route('equipos.edit', $equipo->id)}}" class="show-modal editar" data-content="{{$equipo->id}}" id="{{$equipo->id}}"
                                ><i class="fa fa-edit"></i>
                            </a>
							@endcan
		  					@can('equipos.delete')
		  					<a href="#" class="delete-modal " data-id="{{$equipo->id}}" data-title="{{$equipo->nombre}}" data-content="{{$equipo->identificador}}"><i class="fa fa-trash"></i></a>		
							@endcan 	                           
						</td>
					</tr>
                @endforeach
                </tbody>
                <tfoot>
	                <tr>
		               	<th>id</th>
						<th>Identificador</th>
						<th>Nombre</th>
						<th>Marca</th>
						<th>Modelo</th>
						<th>Serial</th>
						<th>Estado</th>
						<th>Perteneciente</th>
						<th>Registro</th>
                   		<th>Modificación</th>
						<th>Acciones</th>
	                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row d-flex justify-content-end ">
			  @can('equipos.create')
			<div class="col-md-2 ">
				<a href="#" id="crear-modal" class="btn btn-primary add m-2 crear-modal">Agregar Nuevo Equipo</a>
			</div>
			  @endcan
			
			
		</div>

</section>
     <div id="showModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    @include('modules.equipos.form')

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">
                            Cerrar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
       
    <!-- Modal form to delete a form -->
    <div id="deleteModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <h3 class="text-center">Seguro que quiere eliminar este Equipo?</h3>
                    <br />
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="id">ID:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="id_delete" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title">Nombre:</label>
                            <div class="col-sm-10">
                                <input type="name" class="form-control" id="title_delete" disabled>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><span>No, cancelar</span></button>
               			<button type="button" class="btn btn-danger delete" data-dismiss="modal"><span>Si, eliminar</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
     
    <script type="text/javascript">
        /************************************************
            Configurar DataTable
        *********************************************************/
		$('.dataTable1').DataTable({
	      'paging'      : true,
	      'lengthChange': true,
	      'searching'   : true,
	      'ordering'    : true,
	      'info'        : true,
	      'autoWidth'   : true
	    });

		//-- AJAX CRUD operations -->


        /************************************************
            Mostrar y editar equipos
        *********************************************************/
        $(document).on('click', '.show-modal', function(e) {
        	 e.preventDefault();
             var dis;
             if($(this).hasClass("editar")){
               $("#showModal form *").children().prop('disabled',false);
                $('.modal-title').text('editar equipo');
                $('#showModal').modal('show');
                $('#showModal .modal-footer').html("<button type='button' class='btn btn-primary edit' data-dismiss='modal'> Guardar </button>");
             }else{
                dis="disabled";
                $("#showModal form *").children().prop('disabled',true);
                $('.modal-title').text('Detalles del equipo');
                $('#showModal').modal('show');
                $('#showModal .modal-footer').html("<button type='button' id='edit' class='btn btn-primary edit' data-dismiss='modal'> editar </button>");
                $('.edit').on('click', function(){
                    $("#showModal form *").children().prop('disabled',false);
                        $('#showModal .modal-footer').html("<button type='button' class='btn btn-primary edit' data-dismiss='modal'> Guardar </button>");
                    });
                }
              
            $.ajax({
            	headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                type: 'GET',
                url: '/equipos/' + $(this).attr("id"),  
                 success: function(data){ 
                      console.log(data); 
                    				
		          
		            $('#title_show').val(data['nombre']);
		            $('#identificador_show').val(data['identificador']);
		            $('#marca_show').val(data['marca']);
		            $('#modelo_show').val(data['modelo']);
		            $('#serial_show').val(data['serial']);
		           


		            $('#estado_equipo').html("<label for='estado_equipo' class='col-sm-4 control-label text-md-right'>{{ __('Estado del equipo') }}</label><div class='col-sm-8'><select class='form-control{{ $errors->has('estado_equipo') ? ' is-invalid' : '' }}' name='estado_equipo'"+dis+">@foreach($enumoption as $estado_equipo)<option value='{{$estado_equipo}}' selected  > {{$estado_equipo}} </option> @endforeach </select></div>"); 

                    $('#perteneciente').html(" <label for='perteneciente' class='col-sm-4 control-label text-md-right' name='perteneciente'>{{ __('Pertenece al la institucion? ') }}</label><div class='col-sm-8'><select class='form-control{{ $errors->has('perteneciente') ? ' is-invalid' : '' }}' name='perteneciente' "+dis+">@foreach($enumoption2 as $perteneciente)<option value='{{$perteneciente}}' selected  > {{$perteneciente}} </option>@endforeach</select></div>");  				
					 
	                },
                    fail: function(){
                       console.log("error al cargar pagina"); 
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                    },    
            });
        });
         /************************************************
            Editar equipos
        *********************************************************/
       
        $('.modal-footer').on('click', 'edit', function() {
            $.ajax({
                 headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                type: 'PUT',
                url: '/equipos/' + $('#id_delete').val() ,             
                
                    
                 success: function(data){ 
                      },
                    fail: function(){
                       console.log("error al cargar pagina"); 
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                    }    
            });
        });
       /************************************************
            Eliminar equipos
        *********************************************************/
        $(document).on('click', '.delete-modal', function() {
            $('.modal-title').text('Eliminar');
            $('#id_delete').val($(this).data('id'));
            $('#title_delete').val($(this).data('title'));
            $('#deleteModal').modal('show');
            id = $('#id_delete').val();
        });


        $('.modal-footer').on('click', '.delete', function() {
            $.ajax({
            	 headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                type: 'DELETE',
                url: '/equipos/' + id,
               
                
                    
                 success: function(data){ 
                      
                    $('.item' + data['id']).remove();
                     console.log(data['id']); 
	                },
                    fail: function(){
                       console.log("error al cargar pagina"); 
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                    }    
            });
        });

        /************************************************
            Crear equipos
        *********************************************************/
         $(document).on('click', '.crear-modal', function(e) {
             e.preventDefault();
                $('.modal-title').text('Agregar equipo');
                $('#crearModal').modal('show');
            
                    $('#id').val();
                    $('#title').val();
                    $('#identificador').val();
                    $('#marca').val();
                    $('#modelo').val();
                    $('#serial').val();
                    $('#modificacion').val();
                    $('#registro').val();
                    $('#pertenece').val();
                    $('#estado').val();
                    $('#estado_equipo').html("<select class='form-control{{ $errors->has('estado_equipo') ? ' is-invalid' : '' }}' name='estado_equipo'>@foreach($enumoption as $estado_equipo)<option value='{{$estado_equipo}}' selected > {{$estado_equipo}} </option> @endforeach </select>"); 
                    $('#perteneciente').html("<select class='form-control{{ $errors->has('perteneciente') ? ' is-invalid' : '' }}' name='perteneciente' @foreach($enumoption2 as $perteneciente)<option value='{{$perteneciente}}' selected > {{$perteneciente}} </option>@endforeach </select>");           
        });
         $('.modal-footer').on('click', '.crear', function() {
            $.ajax({
                 headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                type: 'PUT',
                url: '/equipos/create' ,
               
                
                    
                 success: function(data){ 
                      
                    $('.item' + data['id']).remove();
                     console.log(data['id']); 
                    },
                    fail: function(){
                       console.log("error al cargar pagina"); 
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                    }    
            });
        });
       
    </script>
@endsection

  