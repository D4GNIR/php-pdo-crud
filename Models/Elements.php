<?php
declare(strict_types=1);

class Elements {
    private int $id;
    private string $nom;
    private string $symbole;
    private string $famille;
    private string $point_de_fusion;
    private string $numero_atomique;
    private string $image;


    public function getId(): int { return $this->id; }
    public function setId(int $id): self { $this->id = $id; return $this; }

    public function getNom(): string { return $this->nom; }
    public function setNom(string $nom): bool {
        if(self::validateNom($nom)){
            $this->nom = $nom;
            return true; 
        }
        return false; 
    }

    // Méthode statique pour valider le nom
    public static function validateNom(string $nom):bool{
        $nomLenght = strlen($nom);
        if ($nomLenght > 1 && $nomLenght < 100) {
            return TRUE;
        }
        throw new Exception('Le champ nom est incorrect');
        return FALSE;
     }

    public function getSymbole(): string { return $this->symbole; }
    public function setSymbole(string $symbole): bool {
        if(self::validateSymbole($symbole)){
            $this->symbole = $symbole;
            return true; 
        }
        return false; 
    }

    // Méthode statique pour valider le symbole
    public static function validateSymbole(string $symbole):bool{
        $symboleLenght = strlen($symbole);
        if ($symboleLenght > 1 && $symboleLenght < 10) {
            return TRUE;
        }
        throw new Exception('Le champ symbole est incorrect');
        return FALSE;
    }

    public function getFamille(): string { return $this->famille; }
    public function setFamille(string $famille): bool {
          if(self::validateFamille($famille)){
            $this->famille = $famille;
            return true; 
        }
        return false; 
    }

    // Méthode statique pour valider la famille
    public static function validateFamille(string $famille):bool{
        $familleLenght = strlen($famille);
        if ($familleLenght > 1 && $familleLenght < 100) {
            return TRUE;
        }
        throw new Exception('Le champ famille est incorrect');
        return FALSE;
    }

    public function getPointDeFusion(): string { return $this->point_de_fusion; }
    public function setPointDeFusion(string $point_de_fusion): bool {
        if(self::validatePointDeFusion($point_de_fusion)){
            $this->point_de_fusion = $point_de_fusion;
            return true; 
        }
        return false; 
    }

    public static function validatePointDeFusion($point_de_fusion):bool{
        if ($point_de_fusion > -271 && $point_de_fusion < 2500 && is_numeric($point_de_fusion)) {
            return TRUE;
        }
        throw new Exception('Le champ point de fusion doit etre compris entre -271°C et 2500°C');
        return FALSE;
    }

    public function getNumeroAtomique(): string { return $this->numero_atomique; }
    public function setNumeroAtomique(string $numero_atomique): bool {
        if(self::validateNumeroAtomique($numero_atomique)){
            $this->numero_atomique = $numero_atomique;
            return true; 
        }
        return false; 
    }

    public static function validateNumeroAtomique($numero_atomique):bool{
        if ($numero_atomique > 0 && $numero_atomique < 200  && is_numeric($numero_atomique)) {
            return TRUE;
        }
        throw new Exception('Le champ numero atomique doit etre compris entre 0 et 200');
        return FALSE;
    }

    public function getImage(): string { return $this->image; }
    public function setImage($image): bool { 
        if(self::validateImage($image)){
            $this->image = $image;
            return true; 
        }
        return false; 
    }

    // Méthode statique pour valider la famille
    public static function validateImage(string $image):bool{
        $imageLenght = strlen($image);
        if ($imageLenght > 1 && $imageLenght < 255) {
            return TRUE;
        }
        throw new Exception('Le champ image est incorrect');
        return FALSE;
    }

    public static function validate(){
        if(self::validateNom(($_POST['nom'])) && 
        self::validateSymbole(($_POST['symbole'])) && 
        self::validateFamille(($_POST['famille'])) && 
        self::validatePointDeFusion(($_POST['point_de_fusion'])) && 
        self::validateNumeroAtomique(($_POST['numero_atomique'])) && 
        self::validateImage(($_POST['image']))){
            return TRUE;
        }
        return FALSE;
    }


    public function hydrate($image) {

        if (isset($_POST['nom'])) {
        $this->setNom($_POST['nom']);
      }
    
        if (isset($_POST['symbole'])) {
        $this->setSymbole($_POST['symbole']);
      }
    
      if (isset($_POST['famille'])) {
        $this->setFamille($_POST['famille']);
      }

      if (isset($_POST['point_de_fusion'])) {
        $this->setPointDeFusion($_POST['point_de_fusion']);
      }

      if (isset($_POST['numero_atomique'])) {
        $this->setNumeroAtomique($_POST['numero_atomique']);
      }

      if (isset($image)) {
        $this->setImage($image);
      }
    }
    
    // ...
// A couse de fetchObject('Monuments') on a plus besoin de Constructeur sauf si on souhaite modifier un elements
// Constructeur
    // public function __construct(){
    //     $this-> nom = "Nouveau nom";

    // }

}





