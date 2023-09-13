<?php
    include("../../libs/Smarty.class.php");

    $smarty = new Smarty();
    
    $arr= array("red","green","blue");
    $smarty->assign("colors",$arr);
    
    $people = array('fname' => 'John', 'lname' => 'Doe', 'email' => 'j.doe@example.com');
    $smarty->assign('myPeople', $people);
    // $smarty->display("another.tpl");
    $smarty->display("index.tpl");
    // $smarty->display("config.tpl");
?>