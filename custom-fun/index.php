<?php
    include("../../libs/Smarty.class.php");
    $smarty = new Smarty();
    

    // $smarty->assign('cust_ids', array(1000,1001,1002,1003));
    // $smarty->assign('cust_names', array(
    //                                 'Joe Schmoe',
    //                                 'Jack Smith',
    //                                 'Jane Johnson',
    //                                 'Charlie Brown')
    //                             );
    // $smarty->assign('customer_id', 1001);
    

    $smarty->assign('cust_checkboxes', array(
        1000 => 'Joe Schmoe',
        1001 => 'Jack Smith',
        1002 => 'Jane Johnson',
        1003 => 'Charlie Brown')
    );
    $smarty->assign('customer_id', 1001);

    
    $arr['Sport'] = array(6 => 'Golf', 9 => 'Cricket',7 => 'Swim');
    $arr['Rest']  = array(3 => 'Sauna',1 => 'Massage');
    $smarty->assign('lookups', $arr);
    $smarty->assign('fav', 7);

    
    $smarty->assign( 'data', array(1,2,3,4,5,6,7,8,9) );
    $smarty->assign( 'tr', array('bgcolor="#eeeeee"','bgcolor="#dddddd"') );

    $smarty->display("index.tpl");
?>