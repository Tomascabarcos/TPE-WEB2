<?php
/* Smarty version 4.2.1, created on 2022-10-17 13:42:23
  from 'C:\xampp\htdocs\TPE\templates\DetalleJugador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d3f9fd69c51_94064094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2c745de664e38afabbe80c682ef818cc56a1267' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\DetalleJugador.tpl',
      1 => 1666006602,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_634d3f9fd69c51_94064094 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
      <td><?php echo $_smarty_tpl->tpl_vars['jugador']->value->nombre;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['jugador']->value->posicion;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['jugador']->value->nacionalidad;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['jugador']->value->equipos;?>
</td>
    </tr>
    </tr>
  </tbody>
</table><?php }
}
