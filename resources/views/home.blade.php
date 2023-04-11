@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Dashboard</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 col-xl-4">
                                    <div class="card bg-c-blue order card">
                                        
                                        <div class="card-blok">
                                            <h5>Usuarios</h5>
                                            @php
                                            use App\Models\User;
                                            $cant_usuarios = User::count();
                                            @endphp
                                            <h2 class="text-right"><i class="fa fa-users f-left"></i><span>{{$cant_usuarios}}</span></h2>
                                            <p class="m-b-o text-right"><a href="/usuarios" class="text-white">Ver Mas</a></p>                               
                                        </div>
                                        </div>
                                    <div class="card bg-c-pink order card">

                                        <div class="card-blok">
                                            <h5>Roles</h5>
                                            
                                            <h2 class="text-right"><i class="fa fa-users f-left"></i><span></span></h2>
                                            <p class="m-b-o text-right"><a href="/roles" class="text-white">Ver Mas</a></p> 

                                        </div>
                                        <br>
                                    </div>

                                    
                                </div>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

