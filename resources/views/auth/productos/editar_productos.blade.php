@extends('adminlte::page')

@section('title', 'Editar producto')

@section('content')

   
  

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid my-3">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="col-12">
                
                <img src="{{ asset( 'img/productos/'.$producto->foto)}}" class="product-image" alt="Product Image">
              </div>
            
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3">{{$producto->nombre}}</h3>

              <hr>
         
              

             
              <form action="{{route('actualizarproducto')}}" method="POST">
                @csrf
                <div class="col-sm-12">
                  <h4 class="mt-3">Precio</h4>
                  <div class="form-group">
                    <input type="hidden" name="id" value="{{$producto->id}}">
                    <input type="number" class="form-control rounded-pill" id="precio" name="precio" placeholder="Ingresar precio" min="0" required>
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
                  <button type="button"data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-success rounded-pill">Guardar Cambios</button>
                </div>

              </form>
              <form action="{{route('actualizarproductocod')}}" method="POST">
                @csrf
                <div class="col-sm-12">
                  <h4 class="mt-3">Codigo de barras</h4>
                  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li id="errores">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                  <div class="form-group">
                    <input type="hidden" name="id" value="{{$producto->id}}">
                    <input type="text" class="form-control rounded-pill" id="codigoBarras" placeholder="Ingresar Codigo" name="codigoBarras" required >
                  </div>
                  <div class="modal fade" id="exampleModalCentero" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                  <button type="button"data-toggle="modal" data-target="#exampleModalCentero" class="btn btn-success rounded-pill">Guardar Cambios</button>
                 
                </div>

              </form>
              

              

              
            </div>
          </div>
         
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  

@stop