<?php
/* Smarty version 4.3.2, created on 2023-09-14 06:51:59
  from 'C:\xampp\htdocs\smarty-4.3.2\myDemo\smarty-class-var\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6502916f8e80b8_15069203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17532cb9ddbbee310323f625c32858037012a617' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-4.3.2\\myDemo\\smarty-class-var\\templates\\index.tpl',
      1 => 1694667117,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6502916f8e80b8_15069203 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty-4.3.2\\libs\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),));
?>
<html>
    <head>
        <title>SMARTY-CLASS-VAR</title>
    </head>
    <body>
        <table>
        <?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.config", null, 0);
?>

            <?php
$_smarty_tpl->tpl_vars['__smarty_section_r'] = new Smarty_Variable(array());
if (true) {
for ($__section_r_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index'] = 0; $__section_r_0_iteration <= 3; $__section_r_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index']++){
?>
            <tr bgcolor="<?php echo smarty_function_cycle(array('values'=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'rowColors')),$_smarty_tpl);?>
">
                <td> ....etc.... </td>
            </tr>
            <?php
}
}
?>
        </table>
    </body>
</html><?php }
}
