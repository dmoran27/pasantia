
 <!-- Modal form to show a post -->
   
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-4 " for="id">ID:</label>
                            <div class="col-sm-8 ">
                                <input type="text" class="form-control" id="id_show" disabled required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4 " for="id">Identificador:</label>
                            <div class="col-sm-8 ">
                                <input type="text" class="form-control" id="identificador_show" name="identificador"    required autofocus>
                                 @if ($errors->has('identificador'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('identificador') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                        	<label class="control-label col-sm-4 " for="id">Nombre:</label>
                            <div class="col-sm-8 ">
                                <input type="name" class="form-control" id="title_show" name="nombre"   required autofocus>
                                 @if ($errors->has('nombre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4 " for="id">Marca:</label>
                            <div class="col-sm-8 ">
                                <input type="text" class="form-control" id="marca_show" name="marca"   required autofocus>
                                 @if ($errors->has('marca'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('marca') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4 " for="id">Modelo:</label>
                            <div class="col-sm-8 ">
                                <input type="text" class="form-control" id="modelo_show" name="modelo"   required autofocus>
                                 @if ($errors->has('modelo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('modelo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4 " for="id">Serial:</label>
                            <div class="col-sm-8 ">
                                <input type="text" class="form-control" id="serial_show" name="serial"   required autofocus>
                                 @if ($errors->has('serial'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('serial') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                          <div class="form-group" id="estado_equipo">
                           
                        </div>
                       <div class="form-group" id="perteneciente">
                          
                        </div> 
                        <div class="form-group">
                            <label class="control-label col-sm-4 " for="id">Fecha de registro:</label>
                            <div class="col-sm-8 ">
                                <input type="text" class="form-control" id="registro_show" disabled required autofocus>
                                 @if ($errors->has('created_at'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('created_at') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4 " for="id">Fecha ultima modificación:</label>
                            <div class="col-sm-8 ">
                                <input type="text" class="form-control" id="modificacion_show" disabled required autofocus>
                                 @if ($errors->has('updated_at'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('updated_at') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        	
                       
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">
                            Cerrar
                        </button>
                    </div>
                </div>
           
      