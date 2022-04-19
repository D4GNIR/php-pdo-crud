<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tous les element</title>
</head>
<body class="container">
    
<h3 class="mt-3">Tous les elements</h3>
<div class="row">
    <a href="index.php" class="btn btn-dark mt-2 mx-2 col-2">Retour à l'accueil</a>
    <a href="?page=element&action=insert" class="mt-2 col-2 btn btn-warning"> Insert</a>
</div>

    <div class="row mt-3">
        <?php foreach ($elementsList as $id => $ElementObject) : ?>
            <div class="col-3 mt-2"><img src="<?=$ElementObject->getImage()?>" class="img-fluid">
            <p><strong><?=$ElementObject->getNom()?></strong></p>
            <a href="?page=element&id=<?=$ElementObject->getId()?>" class="btn btn-success">Lire</a>
            <a href="?page=element&action=modify&id=<?=$ElementObject->getId()?>" class="btn btn-primary">Modifier</a>
            <a href="?page=element&action=delete&id=<?=$ElementObject->getId()?>" class="btn btn-danger">Effacer</a>
        </div>
        <?php endforeach; ?>
        </div>




    
</body>
</html>