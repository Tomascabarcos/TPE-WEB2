<?php
/* Smarty version 4.2.1, created on 2022-10-17 19:38:28
  from 'C:\xampp\htdocs\TPE\templates\Loginform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d9314d436f1_86525033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73212d80f55b4bd2446b70ef3ce8443471855d3a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\Loginform.tpl',
      1 => 1666028043,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_634d9314d436f1_86525033 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <form action="ValidarUser" method="POST" >
        <div class="form-group">
            <label for="email">Correo Electronico</label>
            <input name="email"  type="email" required class="form-control" id="email" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="contraseña">Contraseña</label>
            <input name="contraseña" type="password" required class="form-control" id="password" >
        </div>

        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?> 
            <div class="alert alert-danger mt-3">
                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            </div>
        <?php }?>
        <button type="submit" class="btn btn-primary mt-3">Entrar</button>
    </form><?php }
}
