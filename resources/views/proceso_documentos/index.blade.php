@extends('documentos')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Procesos</h1>
    <a type="button" href="{{ route('formularioProcesos') }}" class="btn btn-outline-primary">Crear Proceso</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre Proceso</th>
            <th>Proceso Prefijo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($procesos as $proceso)
        <tr>
            <td>{{$proceso->pro_id}}</td>
            <td>{{$proceso->pro_nombre}}</td>
            <td>{{$proceso->pro_prefijo}}</td>
            <td>
                <a href="{{ route('obtener-proceso',  ['id' => $proceso->pro_id])}}" class="btn btn-primary" >Editar</a>

                <form  method="POST" action="{{ route('proceso-eliminar', ['id'=> $proceso->pro_id]) }}" style="display:inline">
                    @csrf
                    @method('DELETE')
                    
                    <button type="submit" class="btn btn-danger" >eliminar</button>
                </form>

            </td>
        </tr>
            
        @endforeach
    </tbody>
</table>
@endsection