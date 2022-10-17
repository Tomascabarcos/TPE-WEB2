<?php
/* Smarty version 4.2.1, created on 2022-10-17 16:44:42
  from 'C:\xampp\htdocs\TPE\templates\LoginForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d6a5ae3da19_11026913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e4924b2bddc178dc520b08c4dbabeeb30c53fd2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\LoginForm.tpl',
      1 => 1666017874,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_634d6a5ae3da19_11026913 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <form action="validateuser method="POST" >
        <div class="form-group">
            <label for="email">EMAIL:</label>
            <input name="email"  type="email" required class="form-control" id="email" >
        </div>
        <div class="form-group">
            <label for="contraseña">Contraseña:</label>
            <input  name="contraseña" type="password" required class="form-control" id="password">
        </div>
        
        <button type="submit" class="btn btn-primary mt-3">Entrar</button>
    </form>
<?php }
}
