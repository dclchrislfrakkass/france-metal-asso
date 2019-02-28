<?php
// Appel connexion a la base
$title = 'Ajout Bdd';
ob_start();
?>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<body class="position-absolute mt-sm-3 mt-5 pt-2">
    <h1 class="text-center"> Insertion dans la base de données de nouvelles entrées</h1>
        <form method="post" action="./inject.php" enctype="multipart/form-data" class="mt-5 mt-sm-none contenair position-relative d-flex flex-column col-12 align-items-center">
                <input type="file" class="form-control-file text-primary col-lg-5 col-12 col-md-8 mb-5" id="exampleFormControlFile1" name="userfile">
                <button type="submit" class="btn btn-danger">Ajouter</button>
        </form>
        <p class="text-center mt-5"><i class="fas fa-exclamation-triangle text-danger"></i> STYLE SECONDAIRE / NOM DE GROUPE / TITRE  ALBUM / CLIP TITRE  <i class="fas fa-exclamation-triangle text-danger"></i>  OBLIGATOIRE</p>
<?php
$content = ob_get_clean();
require './template.php';
?>
