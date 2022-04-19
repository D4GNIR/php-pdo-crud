<?php
require_once('connexion-bdd.php');
require_once('Models/Elements.php');


class ManagerElements{
    public static function getOneById(){
        $preparedQuery = $GLOBALS['db']->prepare("SELECT * FROM `elements` where id=?");
        $preparedQuery->execute(array($_GET['id']));
        // Pour debug
        // $monument = $preparedQuery->fetchObject('Elements');
        // echo '<pre>';
        //     print_r($monument);
        // echo '</pre>';
        return $preparedQuery->fetchObject('Elements');
        
    }
    public static function getOneByName(){
        $preparedQuery = $GLOBALS['db']->prepare("SELECT * FROM `elements` where nom=?");
        $preparedQuery->execute(array($_GET['nom']));
        return $preparedQuery->fetchObject('Elements');
        
    }
    public static function getAll(){
        $query = $GLOBALS['db']->query('SELECT * FROM `elements`');
        return ($query->fetchAll(PDO::FETCH_CLASS,'Elements'));
    }

    public static function insert(Elements $elementHydrate){
        $preparedQuery = $GLOBALS['db']->prepare("INSERT INTO `elements`(`nom`, `symbole`, `famille`, `point_de_fusion`, `numero_atomique`, `image`) VALUES (?,?,?,?,?,?)");
        $preparedQuery->execute(array($elementHydrate->getNom(),
                                    $elementHydrate->getSymbole(),
                                    $elementHydrate->getFamille(),
                                    $elementHydrate->getPointDeFusion(),
                                    $elementHydrate->getNumeroAtomique(),
                                    $elementHydrate->getImage()));
        return $preparedQuery->fetchObject('Elements');
    }
    public static function delete(){
        $preparedQuery = $GLOBALS['db']->prepare("DELETE FROM `elements` WHERE id = ?");
        
        return $preparedQuery->execute([$_GET['id']]);
    }

    public static function modify(Elements $elementHydrate){
        $preparedQuery = $GLOBALS['db']->prepare("UPDATE `elements` SET `nom` = ?,`symbole` = ?, `famille` = ?, `point_de_fusion` = ?, `numero_atomique` = ?, `image` = ? WHERE `id` = ?");
        $preparedQuery->execute(array($elementHydrate->getNom(),
                                    $elementHydrate->getSymbole(),
                                    $elementHydrate->getFamille(),
                                    $elementHydrate->getPointDeFusion(),
                                    $elementHydrate->getNumeroAtomique(),
                                    $elementHydrate->getImage(),
                                    $_GET['id']));
        return $preparedQuery->fetchObject('Elements');
    }
}

