<?php
    
    include('../libs/Smarty.class.php');

// create object
$smarty = new Smarty;

// assign some content. This would typically come from
// a database or other source, but we'll use static
// values for the purpose of this example.
$smarty->assign('name', 'george smith');
$smarty->assign('address', '45th & Harris');
$smarty->assign('names', array('bob','jim','joe','jerry','fred'));


// display it
if(isset($_GET['new'])){
    $smarty->display('myTemplate2.tpl');
}else{
    $smarty->display('myTemplate.tpl');
}
?>