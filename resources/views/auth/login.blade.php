<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input name="email" type="email" class="form-control" id="inputEmail3">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input name="password" type="password" class="form-control" id="inputPassword3">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Iniciar sesion</button>
    <a href="{{ route('usuarios.create') }}" class="btn btn-primary">Crear usuario</a>
</form>