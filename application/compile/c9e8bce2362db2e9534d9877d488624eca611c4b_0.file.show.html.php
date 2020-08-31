<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-28 15:31:44
  from 'D:\PHPSTUDY\PHPTutorial\WWW\8.8\mvc2\application\template\index\show.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4923604ed974_77277867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9e8bce2362db2e9534d9877d488624eca611c4b' => 
    array (
      0 => 'D:\\PHPSTUDY\\PHPTutorial\\WWW\\8.8\\mvc2\\application\\template\\index\\show.html',
      1 => 1598433648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4923604ed974_77277867 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style>
    .list-box{
        width: 1000px;
        margin: 10px auto;
    }
</style>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<div class="list-box">
     <h1>
         <?php echo $_smarty_tpl->tpl_vars['condata']->value["ctitle"];?>

     </h1>
    <p>
        <?php echo $_smarty_tpl->tpl_vars['condata']->value["cons"];?>

    </p>
</div>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</body>
</html><?php }
}
