<?php
/* Smarty version 4.3.2, created on 2023-09-13 08:20:05
  from 'C:\xampp\htdocs\smarty-4.3.2\myDemo\crash\templates\myTemplate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65015495673c88_40695887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '827d8d89004ad9c0a238a1fb23df2c5f0ea7a8eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-4.3.2\\myDemo\\crash\\templates\\myTemplate.tpl',
      1 => 1694579215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65015495673c88_40695887 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
<title>Info</title>
</head>
<body>

<pre>
User Information:

Name: <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

Address: <?php echo $_smarty_tpl->tpl_vars['address']->value;?>

</pre>

<ul>
<table>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['names']->value, 'name');
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
?>
<li><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$__section_index_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['names']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_index_0_total = $__section_index_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_index'] = new Smarty_Variable(array());
if ($__section_index_0_total !== 0) {
for ($__section_index_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] = 0; $__section_index_0_iteration <= $__section_index_0_total; $__section_index_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']++){
?>
<li style="color:red"><?php echo $_smarty_tpl->tpl_vars['names']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] : null)];?>
</li>
<?php
}
}
?>

</ul>

</table>

</body>
</html><?php }
}
