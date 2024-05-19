@extends('documentos')
@section('content')

<form method="POST" action="{{ route('documento.store') }}">
    @csrf
    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre documento</label>
        <div class="col-sm-10">
            <input name="nombreDoc" type="text" class="form-control" id="inputEmail1">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Documento contenido</label>
        <div class="col-sm-10">
            <input name="contenidoDoc" type="text" class="form-control" id="inputEmail3">
        </div>
    </div>

    <div class="row mb-3">
        <label for="tip_id" class="form-label">Tipo de documento</label>
        <select name="tip_id" class="form-select" id="tip_id" >
            @foreach ($tiposDocumento as $tipoDocumento )

                <option value="{{ $tipoDocumento->tip_id }}">{{$tipoDocumento->tip_nombre}}</option>    
            @endforeach
        </select>
    </div>

    <div class="row mb-3">
        <label for="proc_id" class="form-label">Tipo de proceso</label>
        <select name="proc_id" class="form-select" id="proc_id" >
            @foreach ($tiposProceso as $tipoProceso )
                <option value="{{ $tipoProceso->pro_id }}">{{$tipoProceso->pro_nombre}}</option>    
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Crear documento</button>
</form>
@endsection