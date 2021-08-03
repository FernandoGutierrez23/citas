@extends('layouts.main',['activePage'=>'list-pacientes','titlePage'=>'Detalles del paciente'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <div class="card-title">PACIENTES</div>
                            <p class="card-category">Vista detallada del paciente {{ $paciente->nombre }}</p>
                        </div>
                        <!-- BODY -->
                        <div class="card-body">
                            <!-- VALIDAMOS QUE LOS DATOS SE AGREGARON CORRECTAMENTE-->
                            @if (session('success'))
                            <div class="alert alert-success" role="success">
                                {{ session('success')}}
                            </div>                                        
                            @endif
                            <div class="row">
                                
                                <div class="col-md-4">
                                    <div class="card card-user">
                                        <div class="card-body">
                                            <p class="card-text">
                                                <div class="author">
                                                    <a href="#" class="d-flex">
                                                        <img src="{{ asset('/img/default-avatar.png')}}" alt="image" class="avatar">
                                                        <h5 class="title mx-3">{{ $paciente->nombre }}</h5>
                                                    </a>
                                                    <p class="description">
                                                        <b>Apellido paterno: </b>{{ $paciente->apellido_p }}<br>
                                                        <b>Apellido materno: </b>{{ $paciente->apellido_m }}<br>
                                                        <b>Edad: </b>{{ $paciente->edad }}<br>
                                                        <b>Correo electrónico: </b>{{ $paciente->email }}<br>
                                                        <b>Dirección: </b>{{ $paciente->direccion }}<br>
                                                        <b>Teléfono: </b>{{ $paciente->telefono }}<br>                     
                                                    </p>
                                                </div>
                                            </p>
                                            <div class="card-description">
                                                <h4>Descripción</h4>
                                                {{ $paciente->descripcion}}   
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="button-container">
                                                <a href="{{ route('paciente.index') }}" class="btn btn-sm btn-success mr-3">Regresar</a>
                                                <a href="{{ route('paciente.edit', $paciente->id) }}" class="btn btn-sm btn-primary mr-3">Editar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection