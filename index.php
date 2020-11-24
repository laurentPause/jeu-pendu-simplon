<?php
session_start();

$dir_c = 'controllers/';
$dir_v = 'views/';

// controller pendu
require_once $dir_c.'pendu_c.php';
$controller = new Pendu();
// api verif lettre
if(isset($_GET['lettre'])){
    $data = $controller->verifLettre();
    echo $data;
}else{
    // view pendu
    $view = $controller->view();
    require_once $dir_v.$view;
}
