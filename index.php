<?php
declare(strict_types=1);

if (isset($_GET['page']) ) {
    if ($_GET['page'] == 'element' && !isset($_GET['action'])) {
        include('Controller/ControllerElements.php');
    }else if (isset($_GET['action'])) {
        if($_GET['action'] == 'insert'){
            require('controller/ControllerInsert.php');
        }elseif($_GET['action'] == 'delete'){
            include('Controller/ControllerDelete.php');
        }elseif($_GET['action'] == 'modify'){
            include('Controller/ControllerModify.php');
        }else{
            include('View/View404.php');
        }        
    }else{
        include('View/View404.php');
    }
}
elseif(isset($_GET['nom'])){
    if (!empty($_GET['nom'])) {
        include('Controller/ControllerElements.php');
    }
}else{
    include('Controller/ControllerAccueil.php');
}
   ?> 
