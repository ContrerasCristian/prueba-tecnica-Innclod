<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Documentos</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ url('/home') }}">Home</a>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('documentos.index') }}">Documentos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('tipos.index') }}">Tipos de Documento</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('procesos.index') }}">Tipos de Proceso</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('logout')}}" >Salir de la cuenta</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <div class="container mt-4">

        @yield('content')
    </div>
</body>
</html>