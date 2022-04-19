<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Insert</title>
</head>
<body class="">
 

<div class="container">
    <form method='post' class="mt-3" enctype="multipart/form-data">
        <div class="form-example">
            <label class='mt-3' for="nom">Nom de l'element: </label>
            <input type="text" name="nom" id="nom" >
        </div>
        <div class="form-example">
            <label class='mt-3' for="symbole">Symbole de l'element: </label>
            <input type="text" name="symbole" id="symbole" >
        </div>
        <div class="form-example">
            <label class='mt-3' for="famille">Famille de l'element: </label>
            <input type="text" name="famille" id="famille" >
        </div>
        <div class="form-example">
            <label class='mt-3' for="point_de_fusion">Point de fusion de l'element: </label>
            <input type="text" name="point_de_fusion" id="point_de_fusion" >
        </div>
        <div class="form-example">
            <label class='mt-3' for="numero_atomique">Numero atomique l'element: </label>
            <input type="text" name="numero_atomique" id="numero_atomique" >
        </div>
        <div class="form-example mt-3">
            <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />  <!-- 2 Mo -->  
            <input type="file" name="image" required/>  
         </div>
        <!-- <div class="form-example">
            <label class='mt-3' for="image">Image de l'element: </label>
            <input type="text" name="image" id="image" >
        </div> -->
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

</body>
</html>

