{include file="header.tpl"}

<table class="table">
  <thead>
    <tr>
      <th >Jugador</th>
      <th >Posicion</th>
      <th>Nacionalidad</th>
      <th>EQUIPOS</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{$jugador->nombre}</td>
      <td>{$jugador->posicion}</td>
      <td>{$jugador->nacionalidad}</td>
      <td>{$jugador->equipos}</td>
    </tr>
    </tr>
  </tbody>
</table>