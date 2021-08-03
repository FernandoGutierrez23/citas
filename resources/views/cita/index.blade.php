@extends('layouts.main', ['activePage'=>'list-citas','titlePage' => 'Lista de Citas'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Citas</h4>
                                    <p class="card-category">Citas Registradas</p>
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
                                            <a href="{{ route('vista-citas') }}" class="btn btn-sm btn-facebook">Agregar nueva cita</a>
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
                                                <th>Teléfono</th>
                                                <th>Fecha</th>
                                                <th>Hora</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($citas as $cita)                                               
                                                <tr>
                                                    <td>{{ $cita->id }}</td>
                                                    <td>{{ $cita->nombre }}</td>
                                                    <td>{{ $cita->apellido_p }}</td>
                                                    <td>{{ $cita->apellido_m }}</td>
                                                    <td>{{ $cita->edad }}</td>
                                                    <td>{{ $cita->telefono }}</td>
                                                    <td>{{ $cita->date_cita }}</td>
                                                    <td>{{ $cita->hora }}</td>
                                                    <td class="td-actions text-right">
                                                        <a href="{{ route('cita.show',$cita->id)}}" class="btn btn-info" type="button">
                                                            <i class="material-icons">person</i>
                                                        </a>
                                                        <a href="{{ route('cita.edit',$cita->id) }}" class="btn btn-warning" type="button">
                                                            <i class="material-icons">edit</i>
                                                        </a>
                                                        <form action="{{ route('cita.delete', $cita->id) }}" method="post" style="display: inline-block;" onsubmit="return confirm('¿Esta seguro de eliminar a esta cita')">
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
                                    {{ $citas->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection