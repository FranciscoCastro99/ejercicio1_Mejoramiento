<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Mostrar Cliente</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="blue-300">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">CRUD</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('project.index')}}">Listar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('project.create')}}">Crear</a>
                </li>
            </ul>
          </div>
        </div>
    </nav>
    <div class="d-flex justify-content-center align-items-center flex-column" style="height: calc(100vh - 56px);">
        <h1 class="mb-3">Mostrar Cliente</h1>
        <div class="w-25">
            <div class="form-floating mb-3">
                <input name="descripcion" type="text" class="form-control" id="descripcion" value="{{$projects->descripcion}}" disabled>
                <label for="descripcion">descripcion</label>
            </div>
            <div class="form-floating mb-3">
                <input name="cuantia" type="text" class="form-control" id="cuantia" value="{{$projects->cuantia}}" disabled>
                <label for="cuantia">cuantia</label>
            </div>
            <div class="form-floating mb-3">
                <input name="fechaDeInicio" type="date" class="form-control" id="fechaDeInicio" value="{{$projects->fechaDeInicio}}" disabled>
                <label for="fechaDeInicio">Fecha De Inicio</label>
            </div>
            <div class="form-floating mb-3">
                <input name="client_id" type="text" class="form-control" id="client_id" value="{{$projects->client_id}}" disabled>
                <label for="client_id">Cliente</label>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
