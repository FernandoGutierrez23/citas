@extends('layouts.main',['activePage'=>'list-citas','titlePage'=>'Detalles de la cita'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <div class="card-title">CITAS</div>
                            <p class="card-category">Vista detallada de la cita del paciente {{ $cita->nombre }}</p>
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
                                                        <h5 class="title mx-3">{{ $cita->nombre }}</h5>
                                                    </a>
                                                    <p class="description">
                                                        <b>Apellido paterno: </b>{{ $cita->apellido_p }}<br>
                                                        <b>Apellido materno: </b>{{ $cita->apellido_m }}<br>
                                                        <b>Edad: </b>{{ $cita->edad }}<br>
                                                        <b>Correo electrónico: </b>{{ $cita->email }}<br>
                                                        <b>Dirección: </b>{{ $cita->direccion }}<br>
                                                        <b>Teléfono: </b>{{ $cita->telefono }}<br>
                                                        <b>Fecha: </b>{{ $cita->date_cita }}<br>
                                                        <b>Hora: </b>{{ $cita->hora }}<br>                   
                                                    </p>
                                                </div>
                                            </p>
                                            <div class="card-description">
                                                <h4>Motivo</h4>
                                                {{ $cita->motivo}}   
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="button-container">
                                                <a href="{{ route('cita.index') }}" class="btn btn-sm btn-success mr-3">Regresar</a>
                                                <a href="{{ route('cita.edit', $cita->id) }}" class="btn btn-sm btn-primary mr-3">Editar</a>
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