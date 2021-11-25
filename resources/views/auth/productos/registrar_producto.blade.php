@extends('adminlte::page')

@section('title', "Registro usuario")
    
@section('content_header')
   
@stop
@section('content')
    <div class="container-fluid">
        <div class="row">
                <div class="col-sm-12">
                  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li id="errores">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                    <div class="card card-primary mt-5">
                        <div class="card-header">
                          <h3>Registrar Producto</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{route('productos.store')}}" enctype="multipart/form-data">
                          @csrf
                          <div class="card-body">
                            <div class="row">
                              <div class="col-sm-12">
                                <div class="form-group">
                                  <label for="nombre">Nombre</label>
                                  <input type="text" class="form-control rounded-pill" id="nombre" placeholder="Ingresar Nombre" name="nombre" required >
                                </div>
                              </div>
                              <div class="col-sm-12">
                                <div class="form-group">
                                  <label for="codigoBarras">Codigo de barras</label>
                                  <input type="text" class="form-control rounded-pill" id="codigoBarras" placeholder="Ingresar Codigo" name="codigoBarras" required >
                                </div>
                              </div>
                             
                              
                              <div class="col-sm-12">
                                <div class="form-group">
                                  <label for="precio">Precio</label>
                                  <input type="number" class="form-control rounded-pill" id="precio" name="precio" placeholder="Ingresar precio" min="0" required>
                                </div>
                              </div>
                              <div class="col-sm-12">
                                <div class="form-group">
                                  <label for="foto">Fotografia</label>
                                  <div class="input-group">
                                    <div class="custom-file">
                             
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" placeholder="Imagen" name="foto" required>
                                  
                                    </div>
                                  </div>
                                </div>
                              </div>

                            </div>
                           
                           
                           
                          
                          </div>
                          <!-- /.card-body -->
          
                          <div class="card-footer">
                            <button type="button" class="btn btn-success btn-block rounded-pill" data-toggle="modal" data-target="#exampleModalCenter">
                             Registrar
                            </button>
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Guardar Cambios</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="form-group">
                                      <label for="pass">Contraseña</label>
                                      <input type="password" class="form-control rounded-pill" id="pass" name="pass"  placeholder="Ingresar contraseña" required>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                </div>
        </div>
    </div>
@include('sweetalert::alert')
@stop