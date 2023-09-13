<?php
/* Smarty version 4.3.2, created on 2023-09-13 09:30:46
  from 'C:\xampp\htdocs\smarty-4.3.2\myDemo\variables\templates\temp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65016526c48772_21879194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61a1cac2a224346fd00484f85501eb1c6d6be49b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-4.3.2\\myDemo\\variables\\templates\\temp.tpl',
      1 => 1694590243,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65016526c48772_21879194 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty-4.3.2\\libs\\plugins\\modifier.mb_wordwrap.php','function'=>'smarty_modifier_mb_wordwrap',),1=>array('file'=>'C:\\xampp\\htdocs\\smarty-4.3.2\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),2=>array('file'=>'C:\\xampp\\htdocs\\smarty-4.3.2\\libs\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),3=>array('file'=>'C:\\xampp\\htdocs\\smarty-4.3.2\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),4=>array('file'=>'C:\\xampp\\htdocs\\smarty-4.3.2\\libs\\plugins\\modifier.spacify.php','function'=>'smarty_modifier_spacify',),5=>array('file'=>'C:\\xampp\\htdocs\\smarty-4.3.2\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<html>
	<head>
		<title>
			Variables in Smarty
		</title>
	</head>
	<body>
	<div>
		Hello <?php echo $_smarty_tpl->tpl_vars['firstname']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>
, glad to see you can make it.
		<br />
				This weeks meeting is in <?php echo $_smarty_tpl->tpl_vars['meetingPlace']->value;?>
.
				This weeks meeting is in <?php echo $_smarty_tpl->tpl_vars['meetingPlace']->value;?>
.
	</div>
	<hr>
	<div>
		<?php echo $_smarty_tpl->tpl_vars['Contacts']->value['fax'];?>
<br />
		<?php echo $_smarty_tpl->tpl_vars['Contacts']->value['email'];?>
<br />
				<?php echo $_smarty_tpl->tpl_vars['Contacts']->value['phone']['home'];?>
<br />
		<?php echo $_smarty_tpl->tpl_vars['Contacts']->value['phone']['cell'];?>
<br />

	</div>
	<hr>
	<div>
		<?php echo $_smarty_tpl->tpl_vars['Contacts2']->value[0];?>
<br />
		<?php echo $_smarty_tpl->tpl_vars['Contacts2']->value[1];?>
<br />
				<?php echo $_smarty_tpl->tpl_vars['Contacts2']->value[2][0];?>
<br />
		<?php echo $_smarty_tpl->tpl_vars['Contacts2']->value[2][1];?>
<br />

	</div>
	<hr>
	<div>
		<p><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</p>
		<p><?php echo smarty_modifier_mb_wordwrap($_smarty_tpl->tpl_vars['title']->value,10,"\n",false);?>
</p>
		<p><?php echo mb_strtoupper((string) $_smarty_tpl->tpl_vars['title']->value ?? '', 'UTF-8');?>
</p>
		<p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['title']->value,11,"...");?>
</p>
		<p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['title']->value,11,"...",true);?>
</p>
		<p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['title']->value,11,"...",true,true);?>
</p>
		<p><?php echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['title']->value, $tmp);?>
</p>
		<p><?php echo preg_match_all('/\p{L}[\p{L}\p{Mn}\p{Pd}\'\x{2019}]*/u', $_smarty_tpl->tpl_vars['title']->value, $tmp);?>
</p>
		<p><?php echo str_repeat((string) $_smarty_tpl->tpl_vars['title']->value, (int) 5);?>
</p>
		<p><?php echo ($_smarty_tpl->tpl_vars['title']->value).("using cat");?>
</p>
		<p><?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['title']->value,"/[e]/"," ");?>
</p>
		<p><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['title']->value,"Hel","Yel");?>
</p>
		<p><?php echo smarty_modifier_spacify($_smarty_tpl->tpl_vars['title']->value);?>
</p>
		<p>
		<?php echo $_smarty_tpl->tpl_vars['articleTitle']->value;?>

		</p>
		<p>
		<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['articleTitle']->value);?>

		</p>
		<p>
		<?php echo preg_replace('!\s+!u', '&nbsp;',$_smarty_tpl->tpl_vars['articleTitle']->value);?>

		</p>
	</div>
	<hr>
	<div>
		<p><?php echo smarty_modifier_date_format(time());?>
</p>
		<p><?php echo smarty_modifier_date_format(time(),"%I:%M %p");?>
</p>
		<p><?php echo smarty_modifier_date_format(time(),"%D");?>
</p>
		<p><?php echo 23.422334;?>
</p>
		<p><?php echo sprintf("%.2f",23.422334);?>
</p>
		<p><?php echo sprintf("%d",23.422334);?>
</p>
	</div>
	<hr>
	</body>
</html><?php }
}
