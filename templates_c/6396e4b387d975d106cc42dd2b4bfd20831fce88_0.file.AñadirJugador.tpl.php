<?php
/* Smarty version 4.2.1, created on 2022-10-17 18:06:02
  from 'C:\xampp\htdocs\TPE\templates\AñadirJugador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d7d6ac74aa0_42001240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6396e4b387d975d106cc42dd2b4bfd20831fce88' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\AñadirJugador.tpl',
      1 => 1666022708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634d7d6ac74aa0_42001240 (Smarty_Internal_Template $_smarty_tpl) {
if (!(isset($_SESSION['USUARIOS_ID']))) {?>
  <?php } else { ?>
    <form action="añadirJugador"  method="POST">
      <input name="Jugador" required class="form-control" type="text" placeholder="Nombre del Jugador"
        aria-label=".form-control-lg example">
      <input name="InputPosicion" required class="form-control" type="text" placeholder="posicion"
        aria-label="default input example">
      <input name="InputNacionalidad" required class="form-control" type="text" placeholder="Nacionalidad"
        aria-label=".form-control-sm example">

      <select name="id_equipo" required class="form-select" aria-label="Default select example">
        <option selected disabled>Seleccione un equipo</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jugadores']->value, 'jugador');
$_smarty_tpl->tpl_vars['jugador']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['jugador']->value) {
$_smarty_tpl->tpl_vars['jugador']->do_else = false;
?>
          <option value=<?php echo $_smarty_tpl->tpl_vars['jugador']->value->id_equipo;?>
><?php echo $_smarty_tpl->tpl_vars['jugador']->value->nombre_equipo;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </select>

      <button type="submit" class="btn btn-primary mt-2">AGREGAR</button>
    </form>
  <?php }?>
  <?php }
}
