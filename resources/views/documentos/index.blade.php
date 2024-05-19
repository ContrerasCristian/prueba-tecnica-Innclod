@extends('documentos')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Documentos</h1>
    <button type="button" class="btn btn-outline-primary">Crear documento</button>
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
        </tr>
    </thead>
    <tbody>
        {{-- @foreach ($documentos as @documento) --}}
        <tr>
            <td>1</td>
            <td>INSTRUCTIVO DE DESARROLLO</td>
            <td>INS-ING-1</td>
            <td>textograndeconelcontenidodedocumento</td>
            <td>1</td>
            <td>1</td>
        </tr>
            
        {{-- @endforeach --}}
    </tbody>
</table>
@endsection