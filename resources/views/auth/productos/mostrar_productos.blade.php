@extends('adminlte::page')

@section('title', 'Productos')


@section('content')
    <div class="content-fluid">
        <div class="row">
            <div class="col-sm-12">

                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Productos registrados</h3>
      
                      <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
      
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                              <i class="fas fa-search"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap">
                        <thead>
                          <tr>
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Codigo</th>
                            <th>Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $producto)
                              <tr>
                                <td><img src="{{ asset( 'img/productos/'.$producto->foto)}}" style ="height:5em" ></td>
                                <td>{{$producto->nombre}}</td>
                                <td>{{$producto->precio}}</td>
                                <td>{{$producto->codigoBarras}}</td>
                                <td>
                                  
                                  <form method="POST" action="{{route('eliminarproducto')}}">
                                    @csrf
                                    
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                                      Devolver
                                     </button>
                                     <input type="hidden"  name="id" value="{{$producto->id}}">
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
                                    <a href="{{route('productos.edit', $producto->id)}}" type="button" class="btn btn-info">Editar</a>
                                </form>
                                

                                </td>
                              </tr>  
                            @endforeach

                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer text-muted">
                      <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                          <li> {{ $productos->links() }}</li>
                        </ul>
                      </nav>
                    </div>
                  </div>



            </div>


        </div>


    </div>


    @include('sweetalert::alert')
@stop