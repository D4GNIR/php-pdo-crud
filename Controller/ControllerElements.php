<?php
declare(strict_types=1);
require('Models/ManagerElements.php');

if(!empty($_GET['page']) && $_GET['page'] == 'element' || !empty($_GET['action']) && $_GET['action'] == 'insert'){
    if (!empty($_GET['id']) && $myElement = ManagerElements::getOneById() ){
        include('View/ViewOneElement.php');
    }  elseif(empty($_GET['id']) && empty($_GET['name'])){
        $elementsList = ManagerElements::getAll();
        require('View/ViewAllElements.php');
    } else {
        include('View/View404.php');
    }
} elseif(!empty($_GET['nom'])){
    if($myElement = ManagerElements::getOneByName()){
        include('View/ViewOneElement.php');
    }else{
        include('View/View404.php'); 
    }

} else {
    include('View/View404.php');
}
