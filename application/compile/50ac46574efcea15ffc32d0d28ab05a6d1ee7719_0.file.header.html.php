<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 05:52:45
  from 'D:\PHPSTUDY\PHPTutorial\WWW\lcyp\mvc2\application\template\index\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b3eaddb5fa0_88327707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50ac46574efcea15ffc32d0d28ab05a6d1ee7719' => 
    array (
      0 => 'D:\\PHPSTUDY\\PHPTutorial\\WWW\\lcyp\\mvc2\\application\\template\\index\\header.html',
      1 => 1598766758,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b3eaddb5fa0_88327707 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/common.css">
<header>
    <div class="headerContent">
        <div class="logo">
            <img src="<?php echo IMG_ADD;?>
logo.jpg">
        </div>
        <div class="navs">
            <ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menuData']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                <li>
                    <a href="/mvc2/index.php/index/category?cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</a>
                    <?php if ((isset($_smarty_tpl->tpl_vars['v']->value["child"]))) {?>
                    <ul class="son">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value["child"], 'v1');
$_smarty_tpl->tpl_vars['v1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v1']->value) {
$_smarty_tpl->tpl_vars['v1']->do_else = false;
?>
                        <li>
                            <a href="/mvc2/index.php/index/lists?cid=$<?php echo $_smarty_tpl->tpl_vars['v1']->value['cid'];?>
">
                                <?php echo $_smarty_tpl->tpl_vars['v1']->value["cname"];?>

                            </a>
                        </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                    <?php }?>
                </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>

        <div class="inputShadow">
            <div class="searchInput">
                <input placeholder="请输入查询关键字">
            </div>
        </div>
        <div class="search">
            <span class="close">×</span>
            <img class="seaImg" src="<?php echo IMG_ADD;?>
btn_buy_05.jpg" alt="">
        </div>
        <div class="self">
            <img class="slefImg" src="<?php echo IMG_ADD;?>
btn_buy_07.jpg" alt="">
            <div class="selfCenter">
                个人中心
            </div>
            <div class="selfAct">
                <div class="selfArrow"></div>
                <div class="selfActItem">
                    <div class="items">
                        <img src="<?php echo IMG_ADD;?>
btn_buy_17.jpg" alt="">
                        <p style="display: inline-block;">购物袋</p>
                    </div>
                    <div class="items">
                        <img src="<?php echo IMG_ADD;?>
btn_buy_17.jpg" alt="">
                        <p style="display: inline-block;">购物袋</p>
                    </div>
                    <div class="items">
                        <img src="<?php echo IMG_ADD;?>
btn_buy_17.jpg" alt="">
                        <p style="display: inline-block;">购物袋</p>
                    </div>
                    <div class="items">
                        <img src="<?php echo IMG_ADD;?>
btn_buy_17.jpg" alt="">
                        <p style="display: inline-block;">购物袋</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
index.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
common.js"><?php echo '</script'; ?>
>
<?php }
}
