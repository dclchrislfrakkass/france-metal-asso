<?php
session_start();
// Appel connexion a la base
require '../php/pdo.php';
$title = 'Ajout Bdd';
ob_start();


?>
<body class="position-absolute mt-sm-3 mt-5 pt-2">
    <h1 class="text-center"> Insertion dans la base de données de nouvelles entrées</h1>
    <div class="mt-5 mt-sm-none contenair position-relative">
        

    <div class="form-group col-12 align-content-around">
        <label class="row" for="inputStyleP">Choix du Style Principal</label>
        <select name='styleP' id='styleP' class="custom-select col-sm-12 col-lg-8 mb-5">
            <option value='-1'>Aucun</option>
            <?php
               
            $req = $bd->query("SELECT * FROM styleprincipal");
            while ($row = $req->fetch()){
                   
                echo "<option value='".$row['idStylePrincipal_StylePrincipal']."'>".$row['nomStylePrincipal_StylePrincipal']."</option>";
                }
                
                ?>
        </select>

<div class="form-row col-12 md-12 col-lg-8">
<div class="custom-file form-group col-md-12 mb-5">
    <input type="file" class="custom-file-input" id="csvFile">
    <label class="custom-file-label" for="customFile">Choisissez votre fichier</label>
    </div>
  




</div>
                <div class="row d-flex justify-content-center col-8">
    <button type="submit" class="btn btn-danger">Ajouter</button>
    </div>   
</form>
            </div>
<?php

$content = ob_get_clean();
require './template.php';
?>
