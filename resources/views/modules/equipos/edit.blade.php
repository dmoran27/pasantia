
 <!-- Modal form to show a post -->
    <div id="editModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-4 " for="id">ID:</label>
                            <div class="col-sm-8 ">
                                <input type="text" class="form-control" id="id_show" disabled>
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label for="identificador" class="col-md-4 control-label text-md-right">{{ __('Identificador') }}</label>

                            <div class="col-md-8">
                                <input id="identificador" type="text" class="form-control{{ $errors->has('identificador') ? ' is-invalid' : '' }}" name="identificador"  value="{{$errors->has('identificador') ? old('identificador')  :  $equipos->identificador}}" required autofocus>

                                @if ($errors->has('identificador'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('identificador') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="nombre" class="col-md-4 control-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-8">
                                <input id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre"  value="{{$errors->has('nombre') ? old('nombre')  :  $equipos->nombre}}" required autofocus>

                                @if ($errors->has('nombre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="marca" class="col-md-4 control-label text-md-right">{{ __('Marca') }}</label>

                            <div class="col-md-8">
                                <input id="marca" type="text" class="form-control{{ $errors->has('marca') ? ' is-invalid' : '' }}" name="marca" value="{{$errors->has('marca') ? old('marca')  :  $equipos->marca}}" required autofocus>

                                @if ($errors->has('marca'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('marca') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="modelo" class="col-md-4 control-label text-md-right">{{ __('Modelo') }}</label>

                            <div class="col-md-8">
                                <input id="modelo" type="text" class="form-control{{ $errors->has('modelo') ? ' is-invalid' : '' }}" name="modelo"  value="{{$errors->has('modelo') ? old('modelo')  :  $equipos->modelo}}" required autofocus>

                                @if ($errors->has('modelo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('modelo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="serial" class="col-md-4 control-label text-md-right">{{ __('Serial') }}</label>

                            <div class="col-md-8">
                                <input id="serial" type="text" class="form-control{{ $errors->has('serial') ? ' is-invalid' : '' }}" name="serial" value="{{$errors->has('serial') ? old('serial')  :  $equipos->serial}}" required autofocus>

                                @if ($errors->has('serial'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('serial') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="estado_equipo" class="col-md-4 control-label text-md-right">{{ __('Estado del equipo') }}</label>

                            <div class="col-md-8" id="estado_equipo">
  
                            </div>
                        </div>
                       <div class="form-group">
                            <label for="perteneciente" class="col-md-4 control-label text-md-right">{{ __('Pertenece al la institucion? ') }}</label>

                            <div class="col-md-8" id="perteneciente">
                               
                            </div>
                        </div> 
                         
                        <div class="form-group">
                            <label for="observacion" class="col-md-4 control-label text-md-right">{{ __('Observacion') }}</label>

                            <div class="col-md-8">
                                <textarea id="observacion" class="form-control{{ $errors->has('observacion') ? ' is-invalid' : '' }}" name="observacion"  value="{{$errors->has('modelo') ? old('modelo')  :  $equipos->modelo}}" required autofocus></textarea>

                                @if ($errors->has('observacion'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('observacion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4 " for="id">Fecha de registro:</label>
                            <div class="col-sm-8 ">
                                <input type="text" class="form-control" id="registro_show" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4 " for="id">Fecha ultima modificación:</label>
                            <div class="col-sm-8 ">
                                <input type="text" class="form-control" id="modificacion_show" disabled>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-md-8">
                                <input id="user_id" disabled class="hidden" name="user_id" value="{{ Auth::user()->id }}" required>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-md-8">
                                <input id="user_id" type="hidden" class="hidden" name="tipo_id" value="1" required>
                            </div>
                        </div>

                       
                       
                   
                       
                       
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><span>Cerrar</span></button>
                        <button type="button" class="btn btn-info agregar" data-dismiss="modal"><span>Agregar</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
      