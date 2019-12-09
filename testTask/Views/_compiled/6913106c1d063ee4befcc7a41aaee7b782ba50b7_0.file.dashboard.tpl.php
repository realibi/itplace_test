<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-09 20:45:57
  from 'C:\OSPanel\domains\testTask\Views\admin\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dee88554c0103_78486723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6913106c1d063ee4befcc7a41aaee7b782ba50b7' => 
    array (
      0 => 'C:\\OSPanel\\domains\\testTask\\Views\\admin\\dashboard.tpl',
      1 => 1575913553,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:global/head.tpl' => 1,
  ),
),false)) {
function content_5dee88554c0103_78486723 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:global/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="jumbotron mb-50">
  <div class="container text-center">
    <h1>ITPLACE</h1>      
    <h3>Админка</h3>
  </div>
</div>



<div class="container">
    <h3 class="tac">Создание новости:</h3>
    <div class="forms">
        <form action="/news/add" method="POST">
            <div class="mdl-textfield mdl-js-textfield">
                <p>Заголовок:</p>
                <input class="mdl-textfield__input" type="text" id="title" name="title">
                <br><br>
                <p>Контент:</p>
                <textarea class="mdl-textfield__input" type="text" rows= "3" id="content" name="content"></textarea>
                <br><br>
                <input type="submit" value="Создать">
            </div>
        </form>
    </div>

    <br><br>
    <h3 class="tac">Новости созданные мной:</h3>
    <div class="news">
            </div>
</div><br><br>

<?php echo '<script'; ?>
>
    $(document).ready(function(){
        getElementsAdmin();
        getUserRole();
    });
<?php echo '</script'; ?>
><?php }
}
