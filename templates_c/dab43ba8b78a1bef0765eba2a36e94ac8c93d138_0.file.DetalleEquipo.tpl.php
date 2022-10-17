<?php
/* Smarty version 4.2.1, created on 2022-10-17 09:32:46
  from 'C:\xampp\htdocs\TPE\templates\DetalleEquipo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d051eafff53_10027828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dab43ba8b78a1bef0765eba2a36e94ac8c93d138' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\DetalleEquipo.tpl',
      1 => 1665991965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_634d051eafff53_10027828 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Jugador</th>
      <th scope="col">Posicion</th>
      <th scope="col">Nacionalidad</th>
    </tr>
  </thead>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['equipo']->value, 'equip');
$_smarty_tpl->tpl_vars['equip']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['equip']->value) {
$_smarty_tpl->tpl_vars['equip']->do_else = false;
?>
    <tbody>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['equip']->value->nombre;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['equip']->value->posicion;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['equip']->value->nacionalidad;?>
</td>
      </tr>
      </tr>
    </tbody>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<?php }
}
