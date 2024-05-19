@extends('documentos')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Documentos</h1>
    <a href="{{ route('documento.create') }}" type="button" class="btn btn-outline-primary">Crear documento</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Codigo</th>
            <th>Contenido</th>
            <th>Tipo</th>
            <th>Proceso</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($documentos as $documento)
        <tr>
            <td>{{$documento->doc_id}}</td>
            <td>{{$documento->doc_nombre}}</td>
            <td>{{$documento->doc_codigo}}</td>
            <td>{{$documento->doc_contenido}}</td>
            <td>{{$documento->doc_id_tipo}}</td>
            <td>{{$documento->doc_id_proceso}}</td>
            <td>
                
                <a href="{{ route('documento.show', ['documento' => $documento->doc_id]) }}" type="button" class="btn btn-primary" >editar</a>

                <form method="POST" action="{{ route('documento.destroy', ['documento' => $documento->doc_id]) }}" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" >eliminar documento</button>
                </form>

            </td>
        </tr>
            
        @endforeach
    </tbody>
</table>
@endsection