@extends('documentos')
@section('content')
<form method="POST" action="{{ route('tipo.store') }}">
    @csrf
    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre Tipo</label>
        <div class="col-sm-10">
            <input name="nombre" type="text" class="form-control" id="inputEmail1">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Tipo Doc Prefijo</label>
        <div class="col-sm-10">
            <input name="prefijo" type="text" class="form-control" id="inputEmail3">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Crear tipo</button>
</form>
@endsection