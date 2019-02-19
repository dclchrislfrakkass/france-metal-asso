<?php
session_start();
// Appel connexion a la base
require '../php/pdo.php';
$title = 'Ajout Bdd';
ob_start();


?>
<body class="position-absolute mt-sm-3 mt-5 pt-2">   
    <h1 class="text-center">Ajout de nouvelles entrées dans la base de données</h1>
<div class="mt-5 mt-sm-none contenair position-relative">


<form class="row d-flex justify-content-center">
<div class="form-row col-12 md-12 col-lg-8">

<div class="form-row col-12 md-12 col-lg-8">
<div class="custom-file form-group col-md-12">
    <input type="file" class="custom-file-input" id="csvFile">
    <label class="custom-file-label" for="customFile">Choisissez votre fichier CSV</label>
    </div>
  




</div>
<br><br>
                <div class="row">
    <button type="submit" class="btn btn-danger">Ajouter</button>
    </div>   
</form>

<?php

$content = ob_get_clean();
require './template.php';
?>
