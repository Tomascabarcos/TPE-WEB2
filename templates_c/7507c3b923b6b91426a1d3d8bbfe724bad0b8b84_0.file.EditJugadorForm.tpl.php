<?php
/* Smarty version 4.2.1, created on 2022-10-17 20:00:00
  from 'C:\xampp\htdocs\TPE\templates\EditJugadorForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d9820e69498_38752639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7507c3b923b6b91426a1d3d8bbfe724bad0b8b84' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\EditJugadorForm.tpl',
      1 => 1666029598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_634d9820e69498_38752639 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<ul class="list-group list-group-flush">
  <li class="list-group-item">Jugador: <?php echo $_smarty_tpl->tpl_vars['editarJugador']->value->nombre;?>
</li>
  <li class="list-group-item">Posicion: <?php echo $_smarty_tpl->tpl_vars['editarJugador']->value->posicion;?>
</li>
  <li class="list-group-item">Nacionalidad: <?php echo $_smarty_tpl->tpl_vars['editarJugador']->value->nacionalidad;?>
</li>
</ul>

<form action="EditarJugador/<?php echo $_smarty_tpl->tpl_vars['editarJugador']->value->ID;?>
" method="POST">

  <input name="InputJugador" class="form-control form-control-lg" required type="text" placeholder="Jugador"
    aria-label=".form-control-lg example">
  <input name="InputPosicion" class="form-control form-control-lg" required type="text" placeholder="Posicion"
    aria-label="default input example">
  <input name="InputNacionalidad" class="form-control form-control-lg" required type="text" placeholder="Nacionalidad"
    aria-label=".form-control-sm example">
  <button type="submit" class="btn btn-primary mt-2">EDITAR</button>
  
</form>



<?php }
}
