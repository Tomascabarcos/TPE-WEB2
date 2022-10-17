<?php
/* Smarty version 4.2.1, created on 2022-10-17 18:06:02
  from 'C:\xampp\htdocs\TPE\templates\ListaJugadores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d7d6ab236b7_29326769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c929ebf4aeccb789b806472520ca287d9ca5c4f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\ListaJugadores.tpl',
      1 => 1666022754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_634d7d6ab236b7_29326769 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table class="table">
  <thead>
    <tr>
        <th>Jugador</th>
        <th>DetalleJugador</th>
    </tr>
  </thead>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jugadores']->value, 'jugador');
$_smarty_tpl->tpl_vars['jugador']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['jugador']->value) {
$_smarty_tpl->tpl_vars['jugador']->do_else = false;
?>
    <tbody>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['jugador']->value->nombre;?>
</td>
        <td><a href='DetalleJugador/<?php echo $_smarty_tpl->tpl_vars['jugador']->value->ID;?>
' type='button' class="btn btn-info">Detalle Jugador</a></td>
        <?php if (!(isset($_SESSION['USUARIOS_ID']))) {?>
        <?php } else { ?>
        
          <td><a href='BorrarJugador/<?php echo $_smarty_tpl->tpl_vars['jugador']->value->ID;?>
' type='button' class='btn btn-danger'>Eliminar</a></td>
          <td><a href='EditarFormJugador/<?php echo $_smarty_tpl->tpl_vars['jugador']->value->ID;?>
' type='button' class='btn btn-warning'>Editar</a></td>
        <?php }?>
      </tr>
    </tbody>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<?php }
}
