@extends('layouts.main', ['activePage'=>'add-date', 'titlePage'=>'Editar datos de la cita'])
@section('content')
<!-- AQUÍ SE ENCUENTRA EL CÓDIGO DE LA INTERFAZ EN DONDE SE AGREGAN NUEVOS ADMINISTRADORES-->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('cita.update', $cita->id) }}" method="post" class="form-horizontal">
                    @csrf
                    <!-- USAMOS ESTO PARA INDICAR QUE LA ACCIÓN A REALIZAR ES UNA ACTUALIZACIÓN DE DATOS-->
                    @method('PUT')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Datos de la cita</h4>
                            <p class="card-category">Editar datos</p>
                        </div>
                        <div class="card-body">
                            <div class="card-body">
                                <div class="row">
                                    <h3>DATOS DEL PACIENTE</h3>
                                </div>
                            </div>
                            <div class="row">
                                <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="nombre" value="{{ old('nombre',$cita->nombre)}}" autofocus>
                                    @if ($errors->has('nombre'))
                                        <span class="error text-danger" for="input-nombre">{{ $errors->first('nombre')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="apellido_p" class="col-sm-2 col-form-label">Apellido Paterno</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="apellido_p" value="{{ old('apellido_p', $cita->apellido_p) }}">
                                    @if ($errors->has('apellido_p'))
                                        <span class="error text-danger" for="input-apellido_p">{{ $errors->first('apellido_p')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="apellido_m" class="col-sm-2 col-form-label">Apellido Materno</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="apellido_m" value="{{ old('apellido_m', $cita->apellido_m) }}">
                                    @if ($errors->has('apellido_m'))
                                        <span class="error text-danger" for="input-apellido_m">{{ $errors->first('apellido_m')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="edad" class="col-sm-2 col-form-label">Edad</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="edad" value="{{ old('edad', $cita->edad) }}">
                                    @if ($errors->has('edad'))
                                        <span class="error text-danger" for="input-edad">{{ $errors->first('edad')}}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <h3>DATOS DE CONTACTO</h3>
                                </div>
                            </div>
                            <div class="row">
                                <label for="email" class="col-sm-2 col-form-label">Correo</label>
                                <div class="col-sm-7">
                                    <input type="email" class="form-control" name="email" value="{{ old('email', $cita->email) }}">
                                    @if ($errors->has('email'))
                                        <span class="error text-danger" for="input-email">{{$errors->first('email')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="direccion" class="col-sm-2 col-form-label">Dirección</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="direccion" value="{{ old('direccion', $cita->direccion) }}">
                                    @if ($errors->has('direccion'))
                                        <span class="error text-danger" for="input-direccion">{{ $errors->first('direccion')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="telefono" class="col-sm-2 col-form-label">Teléfono</label>
                                <div class="col-sm-7">
                                    <input type="telefono" class="form-control" name="telefono" value="{{ old('telefono', $cita->telefono) }}">
                                    @if ($errors->has('telefono'))
                                        <span class="error text-danger" for="input-telefono">{{ $errors->first('telefono')}}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <h3>DATOS DE LA CITA </h3>
                                </div>
                            </div>
                            <div class="row">
                                <label for="date_cita" class="col-sm-2 col-form-label">Día de la cita</label>
                                <div class="col-sm-7">
                                    <input type="date" class="form-control" name="date_cita" value="{{ old('date_cita', $cita->date_cita) }}">
                                    @if ($errors->has('date_cita'))
                                        <span class="error text-danger" for="input-date_cita">{{ $errors->first('date_cita')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="hora" class="col-sm-2 col-form-label">Hora de la cita</label>
                                <div class="col-sm-7">
                                    <input type="time" class="form-control" name="hora" value="{{ old('hora', $cita->hora) }}">
                                    @if ($errors->has('hora'))
                                        <span class="error text-danger" for="input-hora">{{ $errors->first('hora')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="motivo" class="col-sm-2 col-form-label">Motivo</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="motivo" value="{{ old('motivo', $cita->motivo) }}">
                                    @if ($errors->has('motivo'))
                                        <span class="error text-danger" for="input-motivo">{{ $errors->first('motivo')}}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- FOOTER -->
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </div>
                        <!-- Final del FOOTER -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection