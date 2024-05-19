@extends('documentos')
@section('content')
<form action="{{route('proceso-actualizar', ['id' => $proceso->pro_id])}}" method="POST">
    @method('PATCH')
    @csrf
    <input type="hidden" name="prod_id" value="{{$proceso->prod_id}}">
    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre Proceso</label>
        <div class="col-sm-10">
            <input name="pro_nombre" type="text" class="form-control" id="inputEmail1" value="{{$proceso->pro_nombre}}">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Proceso Prefijo</label>
        <div class="col-sm-10">
            <input name="pro_prefijo" type="text" class="form-control" id="inputEmail3" value="{{$proceso->pro_prefijo}}" >
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Actualizar proceso</button>
</form>
@endsection