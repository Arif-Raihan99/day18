<?php
require_once 'vendor/autoload.php';
use App\classes\FulName;




if (isset($_GET['pages'])){
    if ($_GET['pages'] == 'full-name'){
        include 'pages/full-name.php';
    }
}
elseif (isset($_POST['btn'])){
    $fullName = new FulName($_POST);
    $result = $fullName->getFullName();
    include 'pages/full-name.php';
}
