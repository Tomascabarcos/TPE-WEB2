{include file="header.tpl"}


<table class="table">
  
  <tbody>
    <tr>
     <td>EQUIPOS->{$editarEquipo->nombre_equipo}</td>
    </tr>
  </tbody>
</table>
<form action="EditarEquipos/{$editarEquipo->id_equipo}" method="POST">
    <input name="nombreEquipos" class="form-control form-control-lg" type="text" placeholder="Nombre de Equipos:"
        aria-label=".form-control-lg example">
    <button type="submit" class="btn btn-primary mt-2">Editar</button>
</form>


