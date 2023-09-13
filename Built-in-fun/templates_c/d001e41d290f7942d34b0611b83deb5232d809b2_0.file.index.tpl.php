<?php
/* Smarty version 4.3.2, created on 2023-09-13 12:58:09
  from 'C:\xampp\htdocs\smarty-4.3.2\myDemo\Built-in-fun\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_650195c1984922_65840444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd001e41d290f7942d34b0611b83deb5232d809b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-4.3.2\\myDemo\\Built-in-fun\\templates\\index.tpl',
      1 => 1694602687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_650195c1984922_65840444 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'menu' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\smarty-4.3.2\\myDemo\\Built-in-fun\\templates_c\\d001e41d290f7942d34b0611b83deb5232d809b2_0.file.index.tpl.php',
    'uid' => 'd001e41d290f7942d34b0611b83deb5232d809b2',
    'call_name' => 'smarty_template_function_menu_1462352628650195c1943ed3_24366713',
  ),
));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
    <head>
        <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1968990508650195c196f1b5_19611129', "title");
?>
</title>
    </head>
    <body>
        <?php $_smarty_tpl->_assignInScope('name', "foo");?>
        <p>My name is <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['fullName']) ? $_smarty_tpl->tpl_vars['fullName']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['first'] = 'John';
$_smarty_tpl->_assignInScope('fullName', $_tmp_array);?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['fullName']) ? $_smarty_tpl->tpl_vars['fullName']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['last'] = 'Doe';
$_smarty_tpl->_assignInScope('fullName', $_tmp_array);?>
        <p>My full name is <?php echo $_smarty_tpl->tpl_vars['fullName']->value['first'];?>
 <?php echo $_smarty_tpl->tpl_vars['fullName']->value['last'];?>
</p>
        <?php $_smarty_tpl->_assignInScope('age', "21");?>
        <p>My age is <?php echo $_smarty_tpl->tpl_vars['age']->value;?>
 </p>

        <hr>
                

                <?php $_smarty_tpl->_assignInScope('menu', array('item1','item2','item3'=>array('item3-1','item3-2','item3-3'=>array('item3-3-1','item3-3-2')),'item4'));?>

                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('data'=>$_smarty_tpl->tpl_vars['menu']->value), true);?>

        <hr>
        <ul>
        <?php
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['x']->step = 1;$_smarty_tpl->tpl_vars['x']->total = (int) ceil(($_smarty_tpl->tpl_vars['x']->step > 0 ? 3+1 - (0) : 0-(3)+1)/abs($_smarty_tpl->tpl_vars['x']->step));
if ($_smarty_tpl->tpl_vars['x']->total > 0) {
for ($_smarty_tpl->tpl_vars['x']->value = 0, $_smarty_tpl->tpl_vars['x']->iteration = 1;$_smarty_tpl->tpl_vars['x']->iteration <= $_smarty_tpl->tpl_vars['x']->total;$_smarty_tpl->tpl_vars['x']->value += $_smarty_tpl->tpl_vars['x']->step, $_smarty_tpl->tpl_vars['x']->iteration++) {
$_smarty_tpl->tpl_vars['x']->first = $_smarty_tpl->tpl_vars['x']->iteration === 1;$_smarty_tpl->tpl_vars['x']->last = $_smarty_tpl->tpl_vars['x']->iteration === $_smarty_tpl->tpl_vars['x']->total;?>
            <li><?php echo $_smarty_tpl->tpl_vars['x']->value;?>
</li>
        <?php }
}
?>
        </ul>
        <hr>
        <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['colors']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['c']->value;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        <hr>
        <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['myPeople']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
$__foreach_p_2_saved = $_smarty_tpl->tpl_vars['p'];
?>
            <li><?php echo $_smarty_tpl->tpl_vars['p']->key;?>
: <?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</li>
        <?php
$_smarty_tpl->tpl_vars['p'] = $__foreach_p_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        <hr>
    </body>
</html><?php }
/* {block "title"} */
class Block_1968990508650195c196f1b5_19611129 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1968990508650195c196f1b5_19611129',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
BUILD IN FUNCTIONS<?php
}
}
/* {/block "title"} */
/* smarty_template_function_menu_1462352628650195c1943ed3_24366713 */
if (!function_exists('smarty_template_function_menu_1462352628650195c1943ed3_24366713')) {
function smarty_template_function_menu_1462352628650195c1943ed3_24366713(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('level'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

        <ul class="level<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'entry');
$_smarty_tpl->tpl_vars['entry']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->do_else = false;
$__foreach_entry_0_saved = $_smarty_tpl->tpl_vars['entry'];
?>
            <?php if (is_array($_smarty_tpl->tpl_vars['entry']->value)) {?>
            <li><?php echo $_smarty_tpl->tpl_vars['entry']->key;?>
</li>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('data'=>$_smarty_tpl->tpl_vars['entry']->value,'level'=>$_smarty_tpl->tpl_vars['level']->value+1), true);?>

            <?php } else { ?>
            <li><?php echo $_smarty_tpl->tpl_vars['entry']->value;?>
</li>
            <?php }?>
        <?php
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        <?php
}}
/*/ smarty_template_function_menu_1462352628650195c1943ed3_24366713 */
}
