<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Delete</title>
</head>
<body>


<div class="container">
<h1>Delete</h1>
<h4>Etes vous sur de vouloir supprimer cet element?</h4>
    <form method='post' class="mt-3">
        <INPUT type= "radio" name="delete" value="yes"> Oui
        <INPUT type= "radio" name="delete" value="no"> Non
        <div class="row">
            <div class="form-example col-1">
                <input class="btn btn-success mt-3" type="submit" value="Envoyer">
            </div>
            <div class="col-1">
                <a class="btn btn-warning mt-3" href="?page=element">Retour</a>
            </div>
        </div>
    </form>
</body>
</html>

