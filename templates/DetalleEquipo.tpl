{include file="header.tpl"}
<table class="table">
  <thead>
    <tr>
      <th scope="col">Jugador</th>
      <th scope="col">Posicion</th>
      <th scope="col">Nacionalidad</th>
    </tr>
  </thead>
  {foreach from=$equipo item=$equip}
    <tbody>
      <tr>
        <td>{$equip->nombre}</td>
        <td>{$equip->posicion}</td>
        <td>{$equip->nacionalidad}</td>
      </tr>
      </tr>
    </tbody>
  {/foreach}
</table>
