{include file="header.tpl"}

<table class="table">
  <thead>
    <tr>
        <th>Jugador</th>
        <th>DetalleJugador</th>
    </tr>
  </thead>
  {foreach from=$jugadores item=$jugador}
    <tbody>
      <tr>
        <td>{$jugador->nombre}</td>
        <td><a href='DetalleJugador/{$jugador->ID}' type='button' class="btn btn-info">Detalle Jugador</a></td>
        {if !isset($smarty.session.USUARIOS_ID)}
        {else}
        
          <td><a href='BorrarJugador/{$jugador->ID}' type='button' class='btn btn-danger'>Eliminar</a></td>
          <td><a href='EditarFormJugador/{$jugador->ID}' type='button' class='btn btn-warning'>Editar</a></td>
        {/if}
      </tr>
    </tbody>
  {/foreach}
</table>
