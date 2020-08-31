<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 07:02:41
  from 'D:\PHPSTUDY\PHPTutorial\WWW\lcyp\mvc2\application\template\admin\addtip.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b4f112e0807_42895324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad73f0e98743ba192933287c881e16cc2d50c84e' => 
    array (
      0 => 'D:\\PHPSTUDY\\PHPTutorial\\WWW\\lcyp\\mvc2\\application\\template\\admin\\addtip.html',
      1 => 1598770957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b4f112e0807_42895324 (Smarty_Internal_Template $_smarty_tpl) {
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
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
upload.js"><?php echo '</script'; ?>
>
<form action="/mvc2/index.php/admin/tip/add" style="margin-top: 30px;margin-bottom: 30px;" method="post" enctype="multipart/form-data">
    <input type="text" placeholder="添加一级栏目" name="tname"><br><br>
    <select name="isshow" id="">
        <option value="1">在导航可见</option>
        <option value="0">在导航不可见</option>
    </select><br><br>
    <input type="submit" value="添加" >

</form>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery-3.1.1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    var uploadObj=new upload();
    uploadObj.multiple=true;
    uploadObj.createView({
        parent:document.querySelector(".upload")
    })
    uploadObj.up("/mvc2/index.php/admin/category/uploadfile",function (e) {
        $("input[type=hidden]").val(e[0]);
    })
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
