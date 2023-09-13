	
<?php

include('../../libs/Smarty.class.php');

$smarty = new Smarty();

$smarty->assign('firstname', 'Doug');
$smarty->assign('lastname', 'Evans');
$smarty->assign('meetingPlace', 'New York');
$smarty->assign('Contacts', array('fax'=>'555-222-3333', 'email'=>'xyz@email.com', 'phone'=>array('home'=>'333-4444-5555','cell'=>'555-222-1111')));
$smarty->assign('Contacts2', array('555-222-3333', 'xyz@email.com', array( '333-4444-5555', '555-222-1111')));
$smarty->assign('title','Hello World!');
$smarty->assign('articleTitle', "Grandmother of\neight makes\t    hole in one.");

$smarty->display('temp.tpl');
// $smarty->display('foo.tpl');


?>
