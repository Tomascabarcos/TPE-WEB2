    
{include file="header.tpl"}

<table class="table">
  <thead>
    <tr>
        <th>EQUIPOS</th>
        <th>DETALLE-EQUIPO</th>
    </tr>
  </thead>
  {foreach from=$equipos item=$equipo}
    <tbody>
      <tr>
        <td>{$equipo->nombre_equipo}</td>
        <td><a class= 'btn btn-info btn-sm'  href= 'DetalleEquipos/{$equipo->id_equipo}'>DetalleEquipo</a></td>
        {if !isset($smarty.session.USUARIOS_ID)}

        {else}
          <td><a href='BorrarEquipo/{$equipo->id_equipo}' type='button' class='btn btn-danger'>Eliminar</a></td>
          <td><a class='btn btn-warning' href='EditarFormEquipos/{$equipo->id_equipo}'>Editar</a></td>
        {/if}
      </tr>
    </tbody>
  {/foreach}
</table>

{if !isset($smarty.session.USUARIOS_ID)}
{else}
  <form action="AñadirEquipos" method="POST">
    <input name="nombreEquipos" required class="form-control" type="text" placeholder="Agregar-EQUIPO"
      aria-label=".form-control-lg example">
    <button type="submit" class="btn btn-primary mt-2">Agregar</button>
  </form>
{/if}
