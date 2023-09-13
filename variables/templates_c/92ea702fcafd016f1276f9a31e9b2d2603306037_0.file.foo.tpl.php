<?php
/* Smarty version 4.3.2, created on 2023-09-13 08:59:09
  from 'C:\xampp\htdocs\smarty-4.3.2\myDemo\variables\templates\foo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65015dbd097115_19528586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92ea702fcafd016f1276f9a31e9b2d2603306037' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-4.3.2\\myDemo\\variables\\templates\\foo.tpl',
      1 => 1694588348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65015dbd097115_19528586 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, 'foo.conf', null, 0);
?>

<html>
<title><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'pageTitle');?>
</title>
<body bgcolor="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'bodyBgColor');?>
">
<table border="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tableBorderSize');?>
" bgcolor="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tableBgColor');?>
">
<tr bgcolor="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'rowBgColor');?>
">
    <td>First</td>
    <td>Last</td>
    <td>Address</td>
</tr>
</table>
<?php echo time();?>

</body>
</html>

<?php }
}
