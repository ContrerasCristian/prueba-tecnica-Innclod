@extends('documentos')
@section('content')
<form method="POST" action="{{ route('tipo.update', ['tipo' => $tipo->tip_id]) }}">
    @method('PATCH')
    @csrf
    <input type="hidden" name="prod_id" value="{{$tipo->tip_id}}">
    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Tipo Documento</label>
        <div class="col-sm-10">
            <input name="nombre" type="text" class="form-control" id="inputEmail1" value="{{$tipo->tip_nombre}}">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Tipo Prefijo</label>
        <div class="col-sm-10">
            <input name="prefijo" type="text" class="form-control" id="inputEmail3" value="{{$tipo->tip_prefijo}}" >
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Actualizar tipo</button>
</form>
@endsection