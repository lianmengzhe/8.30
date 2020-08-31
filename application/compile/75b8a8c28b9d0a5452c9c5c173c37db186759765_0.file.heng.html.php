<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 13:51:38
  from 'D:\PHPSTUDY\PHPTutorial\WWW\lcyp\mvc2\application\template\index\heng.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4baeea87f062_55105204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75b8a8c28b9d0a5452c9c5c173c37db186759765' => 
    array (
      0 => 'D:\\PHPSTUDY\\PHPTutorial\\WWW\\lcyp\\mvc2\\application\\template\\index\\heng.html',
      1 => 1598795494,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4baeea87f062_55105204 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>横排式</title>
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
            <div class="productTitle">多功能旋风方形地漏</div>
            <div class="productDes">
                <p>你的卫生间期待已久</p>
                <p>一位真正保护她的骑士</p>
            </div>
            <div class="productAct">
                <a href="/mvc2/index.php/index/gootherpages/detail">进一步了解</a> <a href="/mvc2/index.php/index/gootherpages/parameter">查看参数</a> <a
                    href="/mvc2/index.php/index/gootherpages/buy">购买</a>
            </div>
        </div>
        <img src="<?php echo IMG_ADD;?>
20170615164000_76242.png">
    </div>
    <!--  底部部分开始  -->
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <!--  底部部分结束  -->

</body>
<?php echo '<script'; ?>
>
    var informItem = document.querySelectorAll(".bgx");
    for(let i = 0 ; i < informItem.length ; i++){
        console.log(informItem[i].getAttribute("ura"));
        informItem[i].style.background = "url("+informItem[i].getAttribute('ura')+")";
        console.log(informItem[i].style.background);
    }
<?php echo '</script'; ?>
>
<!--<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
common.js"><?php echo '</script'; ?>
>-->

</html><?php }
}
