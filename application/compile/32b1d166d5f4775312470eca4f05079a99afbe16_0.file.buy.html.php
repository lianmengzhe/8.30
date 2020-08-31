<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 08:28:01
  from 'D:\PHPSTUDY\PHPTutorial\WWW\lcyp\mvc2\application\template\admin\buy.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b63115ec164_29013960',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32b1d166d5f4775312470eca4f05079a99afbe16' => 
    array (
      0 => 'D:\\PHPSTUDY\\PHPTutorial\\WWW\\lcyp\\mvc2\\application\\template\\admin\\buy.html',
      1 => 1598773029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b63115ec164_29013960 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>购买页面</title>
</head>
<link rel="stylesheet" href="../common/common.css">
<link rel="stylesheet" href="../css/buy.css">
<body>
<!--  头部nav栏目开始  -->
<header>
    <div class="headerContent">
        <div class="logo">
            <a href="../index.html"><img src="../images/logo.jpg"></a>
        </div>
        <div class="navs">
            <ul>
                <li><a href="allFunctions.html">全功能系列</a></li>
                <li><a href="moreFunctions.html">多功能系列</a></li>
                <li><a href="stragFunctions.html">直通式系列</a></li>
                <li><a href="water.html">水封比系列</a></li>
                <li><a href="heng.html">横排式系列</a></li>
            </ul>
        </div>

        <div class="inputShadow">
            <div class="searchInput">
                <input placeholder="请输入查询关键字">
            </div>
        </div>
        <div class="search">
            <span class="close">×</span>
            <img class="seaImg" src="../images/btn_buy_05.jpg" alt="">
        </div>
        <div class="self">
            <img class="slefImg" src="../images/btn_buy_07.jpg" alt="">
            <div class="selfCenter">
                个人中心
            </div>
            <div class="selfAct">
                <div class="selfArrow"></div>
                <div class="selfActItem">
                    <div class="items">
                        <img src="../images/btn_buy_17.jpg" alt="">
                        <p style="display: inline-block;">购物袋</p>
                    </div>
                    <div class="items">
                        <img src="../images/btn_buy_17.jpg" alt="">
                        <p style="display: inline-block;">购物袋</p>
                    </div>
                    <div class="items">
                        <img src="../images/btn_buy_17.jpg" alt="">
                        <p style="display: inline-block;">购物袋</p>
                    </div>
                    <div class="items">
                        <img src="../images/btn_buy_17.jpg" alt="">
                        <p style="display: inline-block;">购物袋</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--  头部nav栏目结束  -->
        <div class="buyTip">
            <p>选购及了解</p>
        </div>
        <div class="buyContent">
            <div>
                <img src="../images/20170314110300_86434.jpg" alt="">
            </div>
            <div>
                <div class="proTitle">
                    <p>水封比畅易洗衣机地漏</p>
                    <div>
                        <img src="../images/pzbx1.png" alt="">
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
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<!--  底部部分结束  -->
</body>
<?php echo '<script'; ?>
 src="../common/common.js"><?php echo '</script'; ?>
>
</html><?php }
}
