<?php
/* Smarty version 3.1.30, created on 2017-07-07 09:50:23
  from "D:\php_demo\MVCPHP\libs\View\NewFile.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595ee8df3e4416_77745951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c1c24f8fc1284658daef2d800486dc37fa93b02' => 
    array (
      0 => 'D:\\php_demo\\MVCPHP\\libs\\View\\NewFile.html',
      1 => 1499392128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595ee8df3e4416_77745951 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	<table>
		<tr>
			<td>id</td>
			<td>name</td>
			<td>age</td>
		</tr>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['view']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['article']->value['name'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['article']->value['age'];?>
</td>
		</tr>
		<?php
}
} else {
?>

		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</table>
</body>
</html>
<?php }
}
