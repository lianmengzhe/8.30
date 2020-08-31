<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 09:51:13
  from 'D:\PHPSTUDY\PHPTutorial\WWW\lcyp\mvc2\application\template\index\allFunctions.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b769161df18_34256730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd1d89958d58a157a9c269d1a75e5df640b95ae6' => 
    array (
      0 => 'D:\\PHPSTUDY\\PHPTutorial\\WWW\\lcyp\\mvc2\\application\\template\\index\\allFunctions.html',
      1 => 1598781069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b769161df18_34256730 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>全功能系列</title>
</head>
<link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/common.css">
<link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/products.css">
<body>
<!--  头部nav栏目开始  -->
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<!--  头部nav栏目结束  -->

<div>
</div>

    <div class="informSmall">
        <div class="informations">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coninfo']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <div class="informItem">
                <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
" >
                <p><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</p>
            </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>

    <div class="detailInformation">
        <div class="detailContent">
            <div class="productTitle">全功能星河圆形地漏</div>
            <div class="productDes">
                <p>外表简约，内心强大</p>
                <p>卫生间关键时刻站出来的英雄</p>
            </div>
            <div class="productAct">
                <a href="/mvc2/index.php/index/gootherpages/detail">进一步了解</a> <a href="/mvc2/index.php/index/gootherpages/parameter">查看参数</a> <a
                    href="/mvc2/index.php/index/gootherpages/buy">购买</a>
            </div>
        </div>
        <img src="<?php echo IMG_ADD;?>
20160524153103_97068.jpg">
    </div>

    <div class="detailInformation">
        <img src="<?php echo IMG_ADD;?>
20160524153103_97068.jpg">
        <div class="detailContent">
            <div class="productTitle">全功能星河圆形地漏</div>
            <div class="productDes">
                <p>外表简约，内心强大</p>
                <p>卫生间关键时刻站出来的英雄</p>
            </div>
            <div class="productAct">
                <a href="/mvc2/index.php/index/gootherpages/detail">进一步了解</a> <a href="/mvc2/index.php/index/gootherpages/parameter">查看参数</a> <a
                    href="/mvc2/index.php/index/gootherpages/buy">购买</a>
            </div>
        </div>
    </div>

    <!--  底部部分开始  -->
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <!--  底部部分结束  -->


</body>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
common.js"><?php echo '</script'; ?>
>
</html><?php }
}
