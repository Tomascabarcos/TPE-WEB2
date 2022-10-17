<?php
/* Smarty version 4.2.1, created on 2022-10-17 13:40:31
  from 'C:\xampp\htdocs\TPE\templates\EditarEquipoForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d3f2f0fe395_63340722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd505fa6a3c02cef724375140dc7227d31f855fef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\EditarEquipoForm.tpl',
      1 => 1666006830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_634d3f2f0fe395_63340722 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<table class="table">
  
  <tbody>
    <tr>
     <td>EQUIPOS-><?php echo $_smarty_tpl->tpl_vars['editarEquipo']->value->nombre_equipo;?>
</td>
    </tr>
  </tbody>
</table>
<form action="EditarEquipos/<?php echo $_smarty_tpl->tpl_vars['editarEquipo']->value->id_equipo;?>
" method="POST">
    <input name="nombreEquipos" class="form-control form-control-lg" type="text" placeholder="Nombre de Equipos:"
        aria-label=".form-control-lg example">
    <button type="submit" class="btn btn-primary mt-2">Editar</button>
</form>


<?php }
}
