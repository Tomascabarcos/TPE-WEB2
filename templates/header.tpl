<!DOCTYPE html>
<html lang="en">

<head>
  <base href="{BASE_URL}">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Deportes-Jugadores_futbol</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Jugadores_futbol</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home">Jugadores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="EQUIPOS">EQUIPOS</a>
            </li>
            <li class="nav-item">

           
            
            {if !isset($smarty.session.USUARIOS_ID)}
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="formlogin">Iniciar Sesion</a>
              </li>
            {else}
              <li class="nav-item ml-auto">
                <a class="nav-link active" aria-current="page" href="logoutuser">Cerrar-Sesion</a>
              </li>
            {/if}
            </li>

          </ul>
        </div>
      </div>
    </nav>
  </header>