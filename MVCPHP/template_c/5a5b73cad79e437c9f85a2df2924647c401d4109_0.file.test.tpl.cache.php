<?php
/* Smarty version 3.1.30, created on 2018-02-05 17:58:51
  from "D:\workspace\workspace\MVCPHP\tpl\test.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a782adbf39c04_88532455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a5b73cad79e437c9f85a2df2924647c401d4109' => 
    array (
      0 => 'D:\\workspace\\workspace\\MVCPHP\\tpl\\test.tpl',
      1 => 1499418994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5a782adbf39c04_88532455 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once 'D:\\workspace\\workspace\\MVCPHP\\libs\\ORG\\smarty\\plugins\\modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\workspace\\workspace\\MVCPHP\\libs\\ORG\\smarty\\plugins\\modifier.date_format.php';
$_smarty_tpl->compiled->nocache_hash = '4203000345a782adb9c8106_14275057';
echo $_smarty_tpl->tpl_vars['articletitle']->value;?>

<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['arr']->value['title']);?>
 <?php echo ($_smarty_tpl->tpl_vars['arr']->value['author']).(" 呵呵 ");?>

<?php echo $_smarty_tpl->tpl_vars['arr']->value['title'];?>
 123468987654 <?php echo $_smarty_tpl->tpl_vars['arr']->value['author'];?>

<?php echo $_smarty_tpl->tpl_vars['arr2']->value['ar']['title'];?>
 123468987654 <?php echo $_smarty_tpl->tpl_vars['arr2']->value['ar']['author'];?>

<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['time']->value,"%H:%M:%S");?>

<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['time']->value,"%B:%e:%Y");?>

<?php echo (($tmp = @$_smarty_tpl->tpl_vars['articletitle2']->value)===null||$tmp==='' ? "2343243" : $tmp);?>

<?php echo rawurlencode($_smarty_tpl->tpl_vars['url']->value);?>

<?php echo mb_strtolower($_smarty_tpl->tpl_vars['abc']->value, 'UTF-8');?>


<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['abc']->value, 'UTF-8');?>


<?php echo nl2br($_smarty_tpl->tpl_vars['abc2']->value);?>


<?php if ($_smarty_tpl->tpl_vars['name']->value == "lifu") {?>
	是lifu
<?php } elseif ($_smarty_tpl->tpl_vars['name']->value == "lifu2") {?>
	是 lifu2
<?php } else { ?>
	都不是
<?php }?>

<?php
$__section_article_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_article']) ? $_smarty_tpl->tpl_vars['__smarty_section_article'] : false;
$__section_article_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['list']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_article_0_total = $__section_article_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_article'] = new Smarty_Variable(array());
if ($__section_article_0_total != 0) {
for ($__section_article_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_article']->value['index'] = 0; $__section_article_0_iteration <= $__section_article_0_total; $__section_article_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_article']->value['index']++){
?>
	<?php echo $_smarty_tpl->tpl_vars['list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_article']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_article']->value['index'] : null)]['title'];?>

	<?php echo $_smarty_tpl->tpl_vars['list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_article']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_article']->value['index'] : null)]['author'];?>

	<?php echo $_smarty_tpl->tpl_vars['list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_article']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_article']->value['index'] : null)]['content'];?>

<br />
<?php
}
}
if ($__section_article_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_article'] = $__section_article_0_saved;
}
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
	<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>

	<?php echo $_smarty_tpl->tpl_vars['article']->value['author'];?>

	<?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>

<br />
<?php
}
} else {
?>

啥也没有
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('name'=>"传递参数"), 0, false);
?>


<?php echo $_smarty_tpl->tpl_vars['obj']->value->test('hehe');?>


<?php echo date("Y-m-d",$_smarty_tpl->tpl_vars['time']->value);?>


<?php echo str_replace('1','he',$_smarty_tpl->tpl_vars['name']->value);?>


<?php echo test2(array('p1'=>"abc",'p2'=>"1231"),$_smarty_tpl);?>









<?php }
}
