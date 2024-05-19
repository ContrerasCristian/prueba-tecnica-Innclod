@extends('documentos')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Tipo Documentos</h1>
    <a href="{{route('tipo.create')}}" type="button" class="btn btn-outline-primary">Crear tipo doc</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tipo Documento</th>
            <th>Tipo Doc Prefijo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tipos as $tipo)
        <tr>
            <td>{{$tipo->tip_id }}</td>
            <td>{{$tipo->tip_nombre }}</td>
            <td>{{$tipo->tip_prefijo }}</td>
            <td>
                <a href="{{ route('tipo.show', ['tipo' => $tipo->tip_id]) }}" class="btn btn-primary">Editar</a>

                <form method="POST" action="{{ route('tipo.destroy', ['tipo' => $tipo->tip_id]) }}" style="display:inline">
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