@extends('adminlte::page')

@section('title', 'Vacantes')


@section('content')
    <div class="content-fluid">
        <div class="row">
            <div class="col-sm-12">

                <div class="card my-3">
                    <div class="card-header">
                      <h3 class="card-title">Vacantes abiertas</h3>
      
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
                            <th>Titulo</th>
                            <th>Descripción</th>
                            <th>Puesto</th>
                            <th>Carreras</th>
                            <th>Salario</th>
                            <th>Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($vacantes as $vacante)
                            @if ($vacante->status==true)
                              
                            
                              <tr>
                                <td>{{$vacante->titulo}}</td>
                                <td>{{$vacante->descripcion}}</td>
                                <td>{{$vacante->puesto}}</td>
                                <td>{{$vacante->carreras}}</td>
                                <td>{{$vacante->salario}}</td>
                                <td>
                                    <form action="{{route('updatevacante')}}" method="POST">
                                        @csrf
                                        


                                        <input type="hidden" value="{{$vacante->id}}" name="id">
                                        <button type="button" class="btn btn-success btn-block rounded-pill" data-toggle="modal" data-target="#exampleModalCenter">
                                          Vacante ocupada
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
                                                   <input type="password" class="form-control" id="pass" name="pass"  placeholder="Ingresar contraseña" required>
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


                                </td>

                              </tr>  

                              @endif  
                            @endforeach

                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer text-muted">
                      <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                          <li> {{ $vacantes->links() }}</li>
                        </ul>
                      </nav>
                    </div>
                  </div>



            </div>


        </div>


    </div>


    @include('sweetalert::alert')
@stop