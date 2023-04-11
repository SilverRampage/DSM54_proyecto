@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
<section class="section">
  <div class="section-header">
      <h3 class="page__heading">Usuarios</h3>
  </div>
      <div class="section-body">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">          
                        
                          <a class="btn btn-primary" href="{{ route('usuarios.create') }}">Nuevo</a> 
                          
                          <a href="{{ route('users.xlsx') }}" class="btn btn-success">Exportar Usuarios Excel</a>

                          <a href="{{ route('users.pdf') }}" class="btn btn-danger">Exportar Usuarios PDF</a>
                          <br>
                          <br>

                            <table id="tablausuarios" class="table table-striper">
                              <thead style="background-color:#6777ef">     
                                <tr>                                
                                  <th style="display: none;">ID</th>
                                  <th style="color:#fff;">Nombre</th>
                                  <th style="color:#fff;">Ocupacion</th>
                                  <th style="color:#fff;">E-mail</th>
                                  <th style="color:#fff;">Rol</th>
                                  <th style="color:#fff;">Acciones</th>  
                                </tr>                                                                 
                              </thead>
                              <tbody>
                                @foreach ($usuarios as $usuario)
                                  <tr>
                                    <td style="display: none;">{{ $usuario->id }}</td>
                                    <td>{{ $usuario->name }}</td>
                                    <td></td>
                                    <td>{{ $usuario->email }}</td>
                                    <td>
                                      @if(!empty($usuario->getRoleNames()))
                                        @foreach($usuario->getRoleNames() as $rolNombre)                                       
                                          <h5><span class="badge badge-dark">{{ $rolNombre }}</span></h5>
                                        @endforeach
                                      @endif
                                    </td>

                                    <td>                                  
                                      <a class="btn btn-warning" href="{{ route('usuarios.edit',$usuario->id) }}">Editar</a>

                                      {!! Form::open(['method' => 'DELETE','route' => ['usuarios.destroy', $usuario->id],'style'=>'display:inline']) !!}
                                          {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                      {!! Form::close() !!}
                                    </td>
                                  </tr>
                                @endforeach
                              </tbody>
                            </table>
                            @section('js')

                            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                            <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
                            <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
                            <script>
                              $(document).ready(function () {
                                  $('#tablausuarios').DataTable();
                              });


                            </script>
                            @endsection 
                            <!-- Centramos la paginacion a la derecha -->
                          <div class="pagination justify-content-end">
                            {!! $usuarios->links() !!}
                          </div>     
                            
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>

    <!-- Carga del listado -->

           
      
    

@endsection



