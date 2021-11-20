@extends('adminlte::page')
@section('title', "Editar usuario")
    
@section('content_header')
<h2>Editar datos de Registro</h2>
@stop


@section('content')
<div class="container">
    
<section class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Datos generales</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <form method="POST" action="{{route('empleaods.update', $empleado->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
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
                  </div>
                
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control rounded-pill" id="nombre" placeholder="Ingresar Nombre" name="nombre" readonly required pattern="[a-zA-Z ]{2,254}" value="{{$empleado->nombre}}">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="curp">Curp</label>
                    <input type="text" class="form-control rounded-pill" id="curp" placeholder="Ingresar Curp" name="curp" readonly required value="{{$empleado->curp}}" pattern="^[A-Z]{1}[AEIOU]{1}[A-Z]{2}[0-9]{2}(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[HM]{1}(AS|BC|BS|CC|CS|CH|CL|CM|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[B-DF-HJ-NP-TV-Z]{3}[0-9A-Z]{1}[0-9]{1}$" readonly>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="rfc">RFC</label>
                    <input type="text" class="form-control rounded-pill" id="rfc" name="rfc" placeholder="Ingresar RFC" readonly required value="{{$empleado->rfc}}" pattern="ˆ([A-ZÑ]|\&){4}[0-9]{2}(0[1-9]|1[0-2])([12][0-9]|0[1-9]|3[01])[A-Z0-9]{3}$">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="salariobruto">Salario mensual bruto</label>
                    <input type="number" class="form-control rounded-pill" id="salariobruto" name="salariobruto" placeholder="Ingresar salario"  min="0">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="salarioneto">Salario mensual neto</label>
                    <input type="number" class="form-control rounded-pill" id="salarioneto" name="salarioneto" placeholder="Ingresar salario"  min="0">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="fechaEntrada">Fecha de entreda</label>
                    <input type="date" class="form-control rounded-pill" id="fechaEntrada" name="fechaEntrada" >
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
                    <input type="email" class="form-control rounded-pill" id="email" name="email" placeholder="Ingresar correo" value="{{$empleado->user->email}}">
                  </div>
                </div>
               
              
             

              </div>
              <div class="card-footer">
                  <div class="row">
                      <div class="col-sm-12">
                        <button type="button" class="btn btn-success btn-block rounded-pill" data-toggle="modal" data-target="#exampleModalCenter">
                            Registrar
                           </button>
                      </div>

                  </div>
                
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
        <!-- /.card -->
      </div>
    </div>
    <div class="col-md-6">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Contraseña</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <form action="{{route('update')}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control rounded-pill" id="password" name="password"  placeholder="Ingresar contraseña">
                        </div>
                    </div>
                    <input type="hidden" name="id" value="{{$empleado->id}}">
                </div>

           
          <!-- /.card-body -->
        </div>
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
        </form>
          </div>
        <!-- /.card -->
      </div>
    </div>
    <div class="col-md-6">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Rol</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
   
  </section>



      

      
      
</div>
@include('sweetalert::alert')
@stop