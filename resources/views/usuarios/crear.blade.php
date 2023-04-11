@extends('layouts.app')

@section('js')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   

<script type="text/javascript">
        $(document).ready(function () {
            $('#estados').on('change', function () {
                var id = this.value;
                $('#municipios').html('');
                $.ajax({
                    url: '{{ route('municipios') }}?id='+id,
                    type: 'get',
                    success: function (res) {
                        $('#municipios').html('<option value="">Selecciona municipio</option>');
                        $.each(res, function (key, value) {
                               $('#municipios').append('<option value="' + value
                                .id + '">' + value.nombre + '</option>');
                        });
                       
                    }
                });
            });
            
        });
    </script>
@endsection 

@section('content')   
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Alta de Usuarios</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">    

                        @if ($errors->any())                                                
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>                        
                                @foreach ($errors->all() as $error)                                    
                                    <span class="badge badge-danger">{{ $error }}</span>
                                @endforeach                        
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @endif

                        {!! Form::open(array('route' => 'usuarios.store','method'=>'POST')) !!}
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="name" >Nombre</label>
                                    {!! Form::text('name', null, array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    {!! Form::text('email', null, array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="name" >Numero de Telefono</label>
                                    <input class="col-xs-12 col-sm-12 col-md-12" id="celular" class="text" class="validate"></input>
                                </div>
                            </div>

                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    
                                    
                                </div>
                            </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    {!! Form::password('password', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="confirm-password">Confirmar Password</label>
                                    {!! Form::password('confirm-password', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="">Roles</label>
                                    {!! Form::select('roles[]', $roles,[], array('class' => 'form-control')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="">Estados</label>
                                    <select id="estados" class="form-control">
                                        <option selected disabled>-- Selecciona un estado --</option>
                                        @foreach($estados as $estado)
                                            <option value="{{ $estado->id }}"> {{ $estado->nombre }} </option>
                                        @endforeach 
                                    </select> 
                                    
                                </div>                                
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="">Municipios</label>
                                    <select id="municipios" class="form-control"></select>    
                                </div>                                
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>                        

                        {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script>
    
        let celular = document.getElementById('celular')

            celular.addEventListener('keypress', (event) => {
            event.preventDefault()
            // console.log(event.keyCode)
            let valorTecla = String.fromCharCode(event.keyCode)
            console.log(valorTecla)
            let valorParsed = parseInt(valorTecla)
            // console.log(valorParsed)
            if(valorParsed) {
                celular.value = celular.value + valorParsed
            }
            })


    
    </script>
    
@endsection



