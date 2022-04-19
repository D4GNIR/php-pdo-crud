<?PHP
declare(strict_types=1);



try{
    //Essaye de ce connecter à la BDD
    $db = new PDO('mysql:host=localhost;charset=utf8;dbname=pdo_cours','root','');
    //En cas d'erreur
} catch(PDOException $e){
    //Renvoi un message de PDOException
    die('Erreur : '.$e->getMessage());
}


