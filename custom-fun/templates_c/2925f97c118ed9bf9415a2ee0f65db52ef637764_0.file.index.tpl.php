<?php
/* Smarty version 4.3.2, created on 2023-09-13 14:17:33
  from 'C:\xampp\htdocs\smarty-4.3.2\myDemo\custom-fun\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6501a85d4e9c99_51316434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2925f97c118ed9bf9415a2ee0f65db52ef637764' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-4.3.2\\myDemo\\custom-fun\\templates\\index.tpl',
      1 => 1694607452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6501a85d4e9c99_51316434 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty-4.3.2\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),1=>array('file'=>'C:\\xampp\\htdocs\\smarty-4.3.2\\libs\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),2=>array('file'=>'C:\\xampp\\htdocs\\smarty-4.3.2\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),3=>array('file'=>'C:\\xampp\\htdocs\\smarty-4.3.2\\libs\\plugins\\function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),4=>array('file'=>'C:\\xampp\\htdocs\\smarty-4.3.2\\libs\\plugins\\function.html_radios.php','function'=>'smarty_function_html_radios',),5=>array('file'=>'C:\\xampp\\htdocs\\smarty-4.3.2\\libs\\plugins\\function.html_select_date.php','function'=>'smarty_function_html_select_date',),6=>array('file'=>'C:\\xampp\\htdocs\\smarty-4.3.2\\libs\\plugins\\function.html_select_time.php','function'=>'smarty_function_html_select_time',),7=>array('file'=>'C:\\xampp\\htdocs\\smarty-4.3.2\\libs\\plugins\\function.html_table.php','function'=>'smarty_function_html_table',),8=>array('file'=>'C:\\xampp\\htdocs\\smarty-4.3.2\\libs\\plugins\\function.mailto.php','function'=>'smarty_function_mailto',),9=>array('file'=>'C:\\xampp\\htdocs\\smarty-4.3.2\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),10=>array('file'=>'C:\\xampp\\htdocs\\smarty-4.3.2\\libs\\plugins\\block.textformat.php','function'=>'smarty_block_textformat',),));
?>
<html>
    <head>
        <title>CUSTOM FUNCTIONS</title>
    </head>
    <body>
    <hr>
        <p><?php echo smarty_function_counter(array(),$_smarty_tpl);?>
</p>
        <p><?php echo smarty_function_cycle(array('values'=>"odd,even,hell"),$_smarty_tpl);?>
</p>
        <p><?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
</p>
        <p><?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
</p>
        <p><?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
</p>
        <hr>
        <?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, 'setup.conf', null, 0);
?>

        <?php $_smarty_tpl->_assignInScope('foo', "hello World!");?><br>
        <?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['foo']->value, $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?><br>
        <?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'title'), $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?><br>
        <?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ErrorCity'), $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?><br>
        <?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ErrorState'), $_smarty_tpl->smarty, $_smarty_tpl);$_smarty_tpl->assign('state_error',$_template->fetch()); ?><br>
        <?php echo $_smarty_tpl->tpl_vars['state_error']->value;?>

        <hr>
        <?php echo smarty_function_html_options(array('name'=>'id','options'=>$_smarty_tpl->tpl_vars['cust_checkboxes']->value,'selected'=>$_smarty_tpl->tpl_vars['customer_id']->value,'separator'=>'<br />'),$_smarty_tpl);?>

        <hr>
        
        <?php echo smarty_function_html_checkboxes(array('name'=>'id','options'=>$_smarty_tpl->tpl_vars['cust_checkboxes']->value,'selected'=>$_smarty_tpl->tpl_vars['customer_id']->value,'separator'=>'<br />'),$_smarty_tpl);?>

        <hr>
        <?php echo smarty_function_html_options(array('name'=>'foo','options'=>$_smarty_tpl->tpl_vars['lookups']->value,'selected'=>$_smarty_tpl->tpl_vars['fav']->value),$_smarty_tpl);?>

        <hr>
        <?php echo smarty_function_html_radios(array('name'=>'id','options'=>$_smarty_tpl->tpl_vars['cust_checkboxes']->value,'selected'=>$_smarty_tpl->tpl_vars['customer_id']->value,'separator'=>'<br />'),$_smarty_tpl);?>

        <hr>
        <?php echo smarty_function_html_select_date(array('start_year'=>'-2','end_year'=>'+1','display_days'=>false),$_smarty_tpl);?>

        <hr>
        <?php echo smarty_function_html_select_time(array('use_24_hours'=>true),$_smarty_tpl);?>

        <hr>
            <?php echo smarty_function_html_table(array('loop'=>$_smarty_tpl->tpl_vars['data']->value),$_smarty_tpl);?>

        <hr>   
        <?php echo smarty_function_mailto(array('address'=>"test@text.com"),$_smarty_tpl);?>

        <hr>   
        <?php echo smarty_function_math(array('equation'=>"x + y",'x'=>4.4444,'y'=>5.0000,'format'=>"%.9f"),$_smarty_tpl);?>

        <hr>   
        <pre><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('textformat', array('wrap'=>35));
$_block_repeat=true;
echo smarty_block_textformat(array('wrap'=>35), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            This is foo.
            This is foo.
            This is foo.
            This is foo.
            This is foo.
            This is foo.

            This is bar.

            bar foo bar foo     foo.
            bar foo bar foo     foo.
            bar foo bar foo     foo.
            bar foo bar foo     foo.
            bar foo bar foo     foo.
            bar foo bar foo     foo.
            bar foo bar foo     foo.

            <?php $_block_repeat=false;
echo smarty_block_textformat(array('wrap'=>35), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </pre>
            </body>
</html><?php }
}
