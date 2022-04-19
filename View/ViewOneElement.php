<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title> <?php $myElement->getNom()?> </title>
</head>

<body class="container">
<a href="index.php" class="btn btn-dark mt-3">Retour à l'accueil</a>
<a href="?page=element" class="btn btn-warning mt-3">Retour à la liste des elements</a>
    <div class="card mt-4" style="width: 18rem;">
        <img src="<?= $myElement->getImage() ?>" alt="<?= $myElement->getNom() ?>" class="img-fluid">
        <div class="card-body">
            <h3 class="card-title"><?= $myElement->getNom() ?></h3>
            <p class="card-text">Symbole : <?= $myElement->getSymbole() ?> </p>
            <p class="card-text">Famille : <?= $myElement->getFamille() ?> </p>
            <p class="card-text">N°atomique : <?= $myElement->getNumeroAtomique() ?> </p>
            <p class="card-text">Point de fusion : <?= $myElement->getPointDeFusion() ?> °C</p>
        </div>
    </div>
</body>

</html>