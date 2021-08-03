@extends('layouts.main', ['activePage'=>'list-pacientes','titlePage' => 'Lista de Pacientes'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Pacientes</h4>
                                    <p class="card-category">Pacientes Registrados</p>
                                </div>
                                <div class="card-body">
                                    <!-- VALIDAMOS QUE LOS DATOS SE AGREGARON CORRECTAMENTE-->
                                    @if (session('success'))
                                    <div class="alert alert-success" role="success">
                                        {{ session('success')}}
                                    </div>                                        
                                    @endif
                                    
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <a href="{{ route('vista-pacientes') }}" class="btn btn-sm btn-facebook">Agregar nuevo paciente</a>
                                        </div>
                                    </div>
                                    <div class="table responsive">
                                        <table class="table">
                                            <thead class="text-primary">
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Apellido Paterno</th>
                                                <th>Apellido Materno</th>
                                                <th>Edad</th>
                                                <th>Correo</th>
                                                <th>Dirección</th>
                                                <th>Teléfono</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($pacientes as $paciente)                                               
                                                <tr>
                                                    <td>{{ $paciente->id }}</td>
                                                    <td>{{ $paciente->nombre }}</td>
                                                    <td>{{ $paciente->apellido_p }}</td>
                                                    <td>{{ $paciente->apellido_m }}</td>
                                                    <td>{{ $paciente->edad }}</td>
                                                    <td>{{ $paciente->email }}</td>
                                                    <td>{{ $paciente->direccion }}</td>
                                                    <td>{{ $paciente->telefono }}</td>
                                                    <td class="td-actions text-right">
                                                        <a href="{{ route('paciente.show',$paciente->id) }}" class="btn btn-info">
                                                            <i class="material-icons">person</i>
                                                        </a>
                                                        <a href="{{ route('paciente.edit',$paciente->id)}}" class="btn btn-warning" type="button">
                                                            <i class="material-icons">edit</i>
                                                        </a>
                                                        <form action="{{ route('paciente.delete', $paciente->id) }}" method="post" style="display: inline-block;" onsubmit="return confirm('¿Esta seguro de eliminar a este paciente?')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger" type="submit">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer mr-auto">
                                    {{ $pacientes->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection