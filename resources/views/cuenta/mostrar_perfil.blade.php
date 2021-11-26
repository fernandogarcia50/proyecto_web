@extends('adminlte::page')

@section('title', 'Perfil')

@section('content')

   
  

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid my-3">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="col-12">
                
                <img src="{{ asset( 'img/empleados/'.$user->empleado->foto)}}" class="product-image my-5" alt="User image">
              </div>
            
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3">{{$user->name}}</h3>

              <hr>
         
              

             
              <form action="{{route('updatecontra')}}" method="POST">
                @csrf
                <div class="col-sm-12">
                  <h4 class="mt-3">Cambiar contraseña</h4>
                  <div class="form-group">
                    <input type="hidden" name="id" value="{{$user->id}}">
                    <input type="password" class="form-control rounded-pill" id="pass" name="password"  placeholder="Ingresar contraseña" required>
                  </div>
                  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Contraseña antigua</h5>
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
                  <button type="button"data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-success rounded-pill">Guardar Cambios</button>
                </div>

              </form>
              
               
                <div class="col-sm-12">
                  <h4 class="mt-3">Constancia</h4>
                  <a href="" class="btn btn-success rounded-pill">Descargar constancia</a>
        
                </div>
                <div class="col-sm-12">
                    <h4 class="mt-3">Creación</h4>
                    <p>{{$user->created_at}}</p>
          
                  </div>
                  <div class="col-sm-12">
                    <h4 class="mt-3">Última modifación</h4>
                    <p>{{$user->updated_at}}</p>
          
                  </div>  

              

              

              
            </div>
          </div>
         
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  
    @include('sweetalert::alert')
@stop