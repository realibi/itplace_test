<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-08 23:37:33
  from 'C:\OSPanel\domains\testTask\Views\admin\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ded5f0dc599c8_79982835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14e3989c36ad1f0416de48e6e777d061347197c5' => 
    array (
      0 => 'C:\\OSPanel\\domains\\testTask\\Views\\admin\\login.tpl',
      1 => 1575837447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:global/head.tpl' => 1,
    'file:global/footer.tpl' => 1,
  ),
),false)) {
function content_5ded5f0dc599c8_79982835 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:global/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container py-3">

    <div class="row">

        <div class="col-12 col-lg-4 offset-lg-4">

            <h3 class="mb-3 text-center">
                <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

            </h3>

            <form action="/signin" method="post">

                <div class="form-group">
                    <input type="text" class="form-control text-center" name="login" placeholder="Логин">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control text-center" name="password" placeholder="Пароль">
                </div>

                <div class="form-group m-0">
                    <input class="btn btn-primary btn-block" type="submit" value="Войти">
                </div>
            </form>

        </div>

    </div>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
