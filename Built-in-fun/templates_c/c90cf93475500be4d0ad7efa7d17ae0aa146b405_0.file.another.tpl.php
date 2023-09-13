<?php
/* Smarty version 4.3.2, created on 2023-09-13 12:13:44
  from 'C:\xampp\htdocs\smarty-4.3.2\myDemo\Built-in-fun\templates\another.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65018b582e8f98_31759626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c90cf93475500be4d0ad7efa7d17ae0aa146b405' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-4.3.2\\myDemo\\Built-in-fun\\templates\\another.tpl',
      1 => 1694599993,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65018b582e8f98_31759626 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172382400165018b582e8857_06858876', "title");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "index.tpl");
}
/* {block "title"} */
class Block_172382400165018b582e8857_06858876 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_172382400165018b582e8857_06858876',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Hello World<?php
}
}
/* {/block "title"} */
}
