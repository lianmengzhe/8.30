<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 08:38:24
  from 'D:\PHPSTUDY\PHPTutorial\WWW\lcyp\mvc2\application\template\index\buy.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b6580b6d7e8_46565074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f20ff706e2a8b33b4547078c94a50c6842e4ddd' => 
    array (
      0 => 'D:\\PHPSTUDY\\PHPTutorial\\WWW\\lcyp\\mvc2\\application\\template\\index\\buy.html',
      1 => 1598776661,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b6580b6d7e8_46565074 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>购买页面</title>
</head>
<link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/common.css">
<link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/buy.css">
<body>
<!--  头部nav栏目开始  -->

<!--  头部nav栏目结束  -->
<div class="buyTip">
    <p>选购及了解</p>
</div>
<div class="buyContent">
    <div>
        <img src="<?php echo IMG_ADD;?>
20170314110300_86434.jpg" alt="">
    </div>
    <div>
        <div class="proTitle">
            <p>水封比畅易洗衣机地漏</p>
            <div>
                <img src="<?php echo IMG_ADD;?>
pzbx1.png" alt="">
                        <span>
                            查看图库
                        </span>
                        <span>
                            查看对比
                        </span>
            </div>
        </div>
        <div class="proTit">外观</div>
        <div class="prodetail">
            <div class="proColor">
                <div class="colorBlock"></div>
                <p>灰色</p>
            </div>
            <div class="proDesc">
                <div class="DescType">
                    <div>产品规格</div>
                    <div>功能参数</div>
                </div>
                <div class="descContent">
                    <ul>
                        <li>
                            <span>库存数量：</span>
                            <span>100 件</span>
                        </li>
                        <li>
                            <span>产品规格：</span>
                            <span>100 件</span>
                        </li>
                        <li>
                            <span>库存数量：</span>
                            <span>100 件</span>
                        </li>
                        <li>
                            <span>库存数量：</span>
                            <span>100 件</span>
                        </li>
                        <li>
                            <span>库存数量：</span>
                            <span>100 件</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="buyHelp"></div>
<div class="buyQuestion">
    <div class="question">问题</div>
    <div class="questionContent">
        <div class="quesTitle">
            我何时能收到我订购的商品？
        </div>
        <div class="questAnswer">
            <p>“送货”时间是将您的产品送达您的收货地址的预计时间。这考虑到了仓库处理时间（即“发货”时间）和承运商的送货时间。</p>
            <p>我们会在结账流程中提供有关发货和送达时间的更多信息。</p>
        </div>
    </div>
</div>

<!--  底部部分开始  -->

<!--  底部部分结束  -->
</body>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
common.js"><?php echo '</script'; ?>
>
</html><?php }
}
