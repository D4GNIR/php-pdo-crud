<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Modify</title>
</head>
<body class="">
 
<?php
    if(empty($_POST)){
?>
<div class="container">
    <h1>Modifier</h1>
    <form method='post' class="mt-3">
        <div class="form-example">
            <label class='mt-3' for="nom">Nom de l'element: </label>
            <input type="text" name="nom" id="nom" value="<?= $myElement->getNom()?>">
        </div>
        <div class="form-example">
            <label class='mt-3' for="symbole">Symbole de l'element: </label>
            <input type="text" name="symbole" id="symbole" value="<?= $myElement->getSymbole()?>">
        </div>
        <div class="form-example">
            <label class='mt-3' for="famille">Famille de l'element: </label>
            <input type="text" name="famille" id="famille" value="<?= $myElement->getFamille()?>">
        </div>
        <div class="form-example">
            <label class='mt-3' for="point_de_fusion">Point de fusion de l'element: </label>
            <input type="text" name="point_de_fusion" id="point_de_fusion" value="<?= $myElement->getPointDeFusion()?>">
        </div>
        <div class="form-example">
            <label class='mt-3' for="numero_atomique">Numero atomique l'element: </label>
            <input type="text" name="numero_atomique" id="numero_atomique" value="<?= $myElement->getNumeroAtomique()?>">
        </div>
        <div class="form-example">
            <label class='mt-3' for="image">Image de l'element: </label>
            <input type="text" name="image" id="image" value="<?= $myElement->getImage()?>">
        </div>
        <div class="row">
        <div class="form-example col-1">
            <input class="btn btn-success mt-3" type="submit" value="Envoyer">
        </div>
        <div class="col-1">
            <a class="btn btn-warning mt-3" href="?page=element">Retour</a>
        </div>
    </div>
    </form>
</div>
<?php
   }
   ?>
</body>
</html>

