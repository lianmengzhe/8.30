<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-28 14:35:18
  from 'D:\PHPSTUDY\PHPTutorial\WWW\8.8\entirePhp\mvc2\application\template\index\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f49162660fb71_21904865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a220a0c0511d3481d0a1ea6144c7d44be2b8640' => 
    array (
      0 => 'D:\\PHPSTUDY\\PHPTutorial\\WWW\\8.8\\entirePhp\\mvc2\\application\\template\\index\\header.html',
      1 => 1598432750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f49162660fb71_21904865 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/index.css">
<header>
    <div class="logo">
        <img src="<?php echo IMG_ADD;?>
logo.png" alt="佳速">
        <h3>更好更快的互联网开发服务商</h3>
    </div>
    <ul class="menu">
        <li>
            <a href="/mvc2/index.php">首页</a>
        </li>

        <?php
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
</header>
<div class="wheel" style="background:orange;width: 100%;height: 300px">

</div><?php }
}
