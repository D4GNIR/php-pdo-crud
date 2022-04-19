<?php
declare(strict_types=1);
require('Models/ManagerElements.php');
include('View/ViewInsert.php');

if (!empty($_POST)){
    /********************************************************************
***************************  Fonctions  *****************************
*********************************************************************/
//   Fonction pour renvoyer une date
function dateNow(){
    $now = date("m-d-y-His");
    return $now;
}

// Répertoire pour les images
$uploads_dir = 'Assets/Images';
// Si il n'y a pas de dossier uploads il est créer
if (!is_dir($uploads_dir)) {
    mkdir($uploads_dir, 0777, true);
}
var_dump($_POST);
var_dump($_FILES);
if (isset($_FILES['image'])){
    // Si $_FILES['image'] est initialisé
    if (!empty($_FILES['image']['name'])){
        $tmp_name = $_FILES["image"]["tmp_name"];
        $name = basename($_FILES["image"]["name"]);
        if(move_uploaded_file($tmp_name, "$uploads_dir/$name")){
            echo 'ok';
        }else{
            echo 'nok';
        }
        ;
         
    }else{
        echo '<p>Il n\'y a rien a envoyé</p>';
    }       
}
        try{
            $elementHydrate = new Elements();
            $elementHydrate->hydrate("$uploads_dir/$name");
            $myElement = ManagerElements::insert($elementHydrate);
            echo "<div class='container'>";
            echo '<p class="text-success mt-3"><strong>Element enregistré</strong></p>';
            echo "</div>";
            //En cas d'erreur
        } catch(Exception $e){
            //Renvoi un message de PDOException
            echo "<div class='container'>";
            echo '<p class="text-danger mt-3"><strong>Erreur : '.$e->getMessage().'</strong></p>';
            echo "</div>";    
        }

    
        
}