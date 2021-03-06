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
                    <div class="card card-primary">
                        <div class="card-header">
                          <h3>Registrar empleados</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{route('empleaods.store')}}" enctype="multipart/form-data">
                          @csrf
                          <div class="card-body">
                            <div class="row">
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label for="nombre">Nombre</label>
                                  <input type="text" class="form-control rounded-pill" id="nombre" placeholder="Ingresar Nombre" name="nombre" required pattern="[a-zA-Z ]{2,254}">
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label for="curp">Curp</label>
                                  <input type="text" class="form-control rounded-pill" id="curp" placeholder="Ingresar Curp" name="curp" required pattern="^[A-Z]{1}[AEIOU]{1}[A-Z]{2}[0-9]{2}(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[HM]{1}(AS|BC|BS|CC|CS|CH|CL|CM|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[B-DF-HJ-NP-TV-Z]{3}[0-9A-Z]{1}[0-9]{1}$">
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label for="rfc">RFC</label>
                                  <input type="text" class="form-control rounded-pill" id="rfc" name="rfc" placeholder="Ingresar RFC" required pattern="??([A-Z??]|\&){4}[0-9]{2}(0[1-9]|1[0-2])([12][0-9]|0[1-9]|3[01])[A-Z0-9]{3}$">
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label for="salariobruto">Salario mensual bruto</label>
                                  <input type="number" class="form-control rounded-pill" id="salariobruto" name="salariobruto" placeholder="Ingresar salario" min="0">
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label for="salarioneto">Salario mensual neto</label>
                                  <input type="number" class="form-control rounded-pill" id="salarioneto" name="salarioneto" placeholder="Ingresar salario" min="0">
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label for="fechaEntrada">Fecha de entrada</label>
                                  <input type="date" class="form-control rounded-pill" id="fechaEntrada" name="fechaEntrada">
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label for="horaEntrada">Hora de entrada</label>
                                  <input type="time" class="form-control rounded-pill" id="horaEntrada" name="horaEntrada" >
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label for="horaSalida">Hora de salida</label>
                                  <input type="time" class="form-control rounded-pill" id="horaSalida" name="horaSalida" >
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label for="email">Correo</label>
                                  <input type="email" class="form-control rounded-pill" id="email" name="email" placeholder="Ingresar correo">
                                </div>
                              </div>
                             
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label for="password">Contrase??a</label>
                                  <input type="password" class="form-control rounded-pill" id="password" name="password"  placeholder="Ingresar contrase??a">
                                </div>
                              </div>
                              <div class="col-sm-6">

                                <div class="form-group">
                                  <label for="inputState">Tipo de empleado</label>
                                  <select id="inputState" class="form-control rounded-pill" name="rol">
                                    <option selected>Roles</option>
                                    <option>Administrador</option>
                                    <option>Vendedor</option>
                                    <option>Almacenista</option>
                                    <option>Empleado</option>
                                    <option>Recursos humanos</option>
                                  </select>
                                </div>


                              </div>
                              <div class="col-sm-6">
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
                                      <label for="pass">Contrase??a</label>
                                      <input type="password" class="form-control rounded-pill" id="pass" name="pass"  placeholder="Ingresar contrase??a" required>
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