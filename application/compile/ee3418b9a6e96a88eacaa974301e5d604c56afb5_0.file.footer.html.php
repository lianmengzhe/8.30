<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 07:29:35
  from 'D:\PHPSTUDY\PHPTutorial\WWW\lcyp\mvc2\application\template\index\footer.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b555f83b998_17689488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee3418b9a6e96a88eacaa974301e5d604c56afb5' => 
    array (
      0 => 'D:\\PHPSTUDY\\PHPTutorial\\WWW\\lcyp\\mvc2\\application\\template\\index\\footer.html',
      1 => 1598772573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b555f83b998_17689488 (Smarty_Internal_Template $_smarty_tpl) {
?><footer>
    <div class="footerContent">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tipData']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                <ul>
                    <li><?php echo $_smarty_tpl->tpl_vars['v']->value["tname"];?>
</li>

                    <?php if ((isset($_smarty_tpl->tpl_vars['v']->value["child"]))) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value["child"], 'v1');
$_smarty_tpl->tpl_vars['v1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v1']->value) {
$_smarty_tpl->tpl_vars['v1']->do_else = false;
?>
                    <li>
                            <?php echo $_smarty_tpl->tpl_vars['v1']->value["tname"];?>

                    </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
                <?php }?>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
        <!--<ul>-->
            <!--<li>了解及选购</li>-->
            <!--<li>全功能系列</li>-->
            <!--<li>多功能系列</li>-->
            <!--<li>直通式系列</li>-->
            <!--<li>水封比系列</li>-->
            <!--<li>横排式系列</li>-->
        <!--</ul>-->
        <!--<ul>-->
            <!--<li>配送指南</li>-->
            <!--<li>配送范围</li>-->
            <!--<li>配送指南</li>-->
            <!--<li>配送费收取标准</li>-->
        <!--</ul>-->
        <!--<ul>-->
            <!--<li>售后服务</li>-->
            <!--<li>意见反馈</li>-->
            <!--<li>价格保护</li>-->
            <!--<li>售后政策</li>-->
        <!--</ul>-->
        <!--<ul>-->
            <!--<li>购物保障</li>-->
            <!--<li>正品保证</li>-->
            <!--<li>公司资质</li>-->
            <!--<li>注册协议</li>-->
        <!--</ul>-->
        <!--<ul>-->
            <!--<li>关于金德尔</li>-->
            <!--<li>品牌合伙人</li>-->
            <!--<li>关于我们</li>-->
            <!--<li>联系我们</li>-->
            <!--<li>人才招聘</li>-->
            <!--<li>视频展示</li>-->
        <!--</ul>-->
    </div>
    <div class="copyright">Copyright © 2019 太原金德尔洁具设备有限司  保留所有权利    地址：山西综改示范区太原学府园区发展路88号1幢华顿公司众创空间 备案号：晋ICP备15005152号</div>
    <div class="police">
        <p>晋公网安备14010702070324号</p>
        <img src="<?php echo IMG_ADD;?>
20200109154714_94992.png">
    </div>
</footer><?php }
}
