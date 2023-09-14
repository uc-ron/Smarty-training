<?php

include("../../libs/Smarty.class.php");

$smarty = new Smarty();
$smarty->testInstall();
// This is effectively the same as assign()
$smarty->append('foo', 'Fred');
// After this line, foo will now be seen as an array in the template
$smarty->append('foo', 'Albert');

$array = array(1 => 'one', 2 => 'two');
$smarty->append('X', $array);
$array2 = array(3 => 'three', 4 => 'four');
// The following line will add a second element to the X array
$smarty->append('X', $array2);

// Create the array first and then pass it by reference
$newElement = array(5 => "five");
$smarty->appendByRef('X', $newElement);

// passing an associative array
$smarty->append(array('city' => 'Lincoln', 'state' => 'Nebraska'));

// $smarty->clearAssign('X');


$smarty->clearCache('index.tpl');
$smarty->clearCompiledTemplate('index.tpl');
$smarty->clearConfig();

// create data object with its private variable scope
$data = $smarty->createData();

// assign variable to data scope
$data->assign('foo','bar');

// create template object which will use variables from data object
$tpl = $smarty->createTemplate('index.tpl',$data);

// get tags
$tags = $smarty->getTags($tpl);
print_r($tags);
// $tpl->display();


// get directory where compiled templates are stored
$cacheDir = $smarty->getCacheDir();
$compileDir = $smarty->getCompileDir();

// set some plugins directories
$smarty->setPluginsDir(array(
    './plugins',
    './plugins_2',
));

// get all directories where plugins are stored
$config_dir = $smarty->getPluginsDir();


// get all directories where templates are stored
$template_dir = $smarty->getTemplateDir();


// load prefilter named 'trim'
// $smarty->loadFilter('pre', 'trim');


echo "<br>";
var_dump($config_dir);
echo "<br>";
var_dump($template_dir);



echo "<br>";
var_dump($cacheDir);
echo "<br>";
var_dump($compileDir);
// Display the values of all variables
echo "<br>Value of 'foo' variable: ";
var_dump($smarty->getTemplateVars('foo'));

echo "<br>Value of 'X' variable: ";
var_dump($smarty->getTemplateVars('X'));

echo "<br>Value of 'city' and 'state' variables: ";
var_dump($smarty->getTemplateVars('city'));
echo "<br>";
var_dump($smarty->getTemplateVars('state'));
echo "<br>";
echo "<br>";
var_dump($smarty->getTemplateVars());

// $smarty->display("index.tpl");
?>
