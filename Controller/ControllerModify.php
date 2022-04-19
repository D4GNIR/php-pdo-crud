<?php
declare(strict_types=1);
require('Models/ManagerElements.php');
$myElement = ManagerElements::getOneById();
include('View/ViewModify.php');

if (!empty($_POST)){

    try{
        $elementHydrate = new Elements();
        $elementHydrate->hydrate($myElement->getImage());
        $myElement = ManagerElements::modify($elementHydrate);
        echo "<div class='container'>";
        echo '<p class="text-success mt-3"><strong>Element enregistré</strong></p>';
        echo '<a class="btn btn-warning mt-3" href="?page=element">Retour</a>';
        echo "</div>";
        //En cas d'erreur
    } catch(Exception $e){
        echo "<div class='container'>";
        echo '<p class="text-danger mt-3"><strong>Erreur : '.$e->getMessage().'</strong></p>';
        echo '<a class="btn btn-warning mt-3" href="?page=element&action=modify&id='.$myElement->getId().'">Retour</a>';
        echo "</div>";  


    }


    
}