<?php
echo realpath(__DIR__ . '/../includes/ClassAutoLoad.php');


require_once __DIR__ . '/includes/ClassAutoLoad.php';
require_once __DIR__ . '/config.php';


$layout = new Layouts();
$forms  = new Forms();

$layout->heading($conf);
$layout->welcome();
$forms->signup();
$layout->footer($conf);
?>