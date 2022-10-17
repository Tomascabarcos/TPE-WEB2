{if !isset($smarty.session.USUARIOS_ID)}
  {else}
    <form action="añadirJugador"  method="POST">
      <input name="Jugador" required class="form-control" type="text" placeholder="Nombre del Jugador"
        aria-label=".form-control-lg example">
      <input name="InputPosicion" required class="form-control" type="text" placeholder="posicion"
        aria-label="default input example">
      <input name="InputNacionalidad" required class="form-control" type="text" placeholder="Nacionalidad"
        aria-label=".form-control-sm example">

      <select name="id_equipo" required class="form-select" aria-label="Default select example">
        <option selected disabled>Seleccione un equipo</option>
        {foreach from=$jugadores item=$jugador}
          <option value={$jugador->id_equipo}>{$jugador->nombre_equipo}</option>
        {/foreach}
      </select>

      <button type="submit" class="btn btn-primary mt-2">AGREGAR</button>
    </form>
  {/if}
  