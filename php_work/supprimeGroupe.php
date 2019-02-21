<?php
session_start();
// Appel connexion a la base
require '../php/pdo.php';
$title = 'Suppression dans la bdd';
ob_start();
?>


<h1 class="text-center">Supprimer un groupe</h1>

<div class="form-group col-12 align-content-around">
<label class="row" for="inputStyleP">Choix du groupe</label>
<select name='styleP' id='styleP' class="custom-select col-sm-12 col-lg-8 mb-5">
    <option value='-1'>Aucun</option>
    <?php
               
    $req = $bd->query("SELECT DISTINCT * FROM groupe 
    NATURAL JOIN album
    NATURAL JOIN titre
    NATURAL JOIN stylesecondaire
    NATURAL JOIN styleprincipal
    ORDER BY nomGroupe_Groupe ASC");
    while ($row = $req->fetch()){
                   
        echo "<option value='".$row['idGroupe_Groupe']."'>".$row['nomGroupe_Groupe']."</option>";
        }
                
        ?>
</select>

































<?php

$content = ob_get_clean();
require './template.php';
?>
