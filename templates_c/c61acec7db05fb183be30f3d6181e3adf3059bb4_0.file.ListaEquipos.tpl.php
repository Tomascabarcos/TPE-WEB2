<?php
/* Smarty version 4.2.1, created on 2022-10-17 18:06:05
  from 'C:\xampp\htdocs\TPE\templates\ListaEquipos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d7d6d6e7d99_11248427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c61acec7db05fb183be30f3d6181e3adf3059bb4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\ListaEquipos.tpl',
      1 => 1666022744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_634d7d6d6e7d99_11248427 (Smarty_Internal_Template $_smarty_tpl) {
?>    
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table class="table">
  <thead>
    <tr>
        <th>EQUIPOS</th>
        <th>DETALLE-EQUIPO</th>
    </tr>
  </thead>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['equipos']->value, 'equipo');
$_smarty_tpl->tpl_vars['equipo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['equipo']->value) {
$_smarty_tpl->tpl_vars['equipo']->do_else = false;
?>
    <tbody>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['equipo']->value->nombre_equipo;?>
</td>
        <td><a class= 'btn btn-info btn-sm'  href= 'DetalleEquipos/<?php echo $_smarty_tpl->tpl_vars['equipo']->value->id_equipo;?>
'>DetalleEquipo</a></td>
        <?php if (!(isset($_SESSION['USUARIOS_ID']))) {?>

        <?php } else { ?>
          <td><a href='BorrarEquipo/<?php echo $_smarty_tpl->tpl_vars['equipo']->value->id_equipo;?>
' type='button' class='btn btn-danger'>Eliminar</a></td>
          <td><a class='btn btn-warning' href='EditarFormEquipos/<?php echo $_smarty_tpl->tpl_vars['equipo']->value->id_equipo;?>
'>Editar</a></td>
        <?php }?>
      </tr>
    </tbody>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

<?php if (!(isset($_SESSION['USUARIOS_ID']))) {
} else { ?>
  <form action="AñadirEquipos" method="POST">
    <input name="nombreEquipos" required class="form-control" type="text" placeholder="Agregar-EQUIPO"
      aria-label=".form-control-lg example">
    <button type="submit" class="btn btn-primary mt-2">Agregar</button>
  </form>
<?php }
}
}
