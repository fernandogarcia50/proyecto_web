@extends('adminlte::page')

@section('title', "Registro vacante")
    
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
                    <div class="card card-primary my-3">
                        <div class="card-header">
                          <h3>Registrar vacante</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{route('vacantes.store')}}" enctype="multipart/form-data">
                          @csrf
                          <div class="card-body">
                            <div class="row">
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label for="nombre">Titulo de la vacante</label>
                                  <input type="text" class="form-control rounded-pill" id="nombre" placeholder="Ingresar Nombre" name="titulo" required >
                                </div>
                              </div>
                             
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label for="nombre">Puesto</label>
                                  <input type="text" class="form-control rounded-pill" id="nombre" placeholder="Ingresar Nombre" name="puesto" required >
                                </div>
                              </div>
                              
                              <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Carreras</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="carreras"></textarea>
                                  </div>

                              </div>
                              <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Descripción</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion"></textarea>
                                  </div>

                              </div>

                              <div class="col-sm-12">
                                <div class="form-group">
                                  <label for="salariobruto">Salario mensual bruto</label>
                                  <input type="number" class="form-control rounded-pill" id="salariobruto" name="salario" placeholder="Ingresar salario" min="0" required>
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