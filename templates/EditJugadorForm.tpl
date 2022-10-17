{include file="header.tpl"}

<ul class="list-group list-group-flush">
  <li class="list-group-item">Jugador: {$editarJugador->nombre}</li>
  <li class="list-group-item">Posicion: {$editarJugador->posicion}</li>
  <li class="list-group-item">Nacionalidad: {$editarJugador->nacionalidad}</li>
</ul>

<form action="EditarJugador/{$editarJugador->ID}" method="POST">

  <input name="InputJugador" class="form-control form-control-lg" required type="text" placeholder="Jugador"
    aria-label=".form-control-lg example">
  <input name="InputPosicion" class="form-control form-control-lg" required type="text" placeholder="Posicion"
    aria-label="default input example">
  <input name="InputNacionalidad" class="form-control form-control-lg" required type="text" placeholder="Nacionalidad"
    aria-label=".form-control-sm example">
  <button type="submit" class="btn btn-primary mt-2">EDITAR</button>
  
</form>



