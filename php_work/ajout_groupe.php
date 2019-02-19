<?php
session_start();
// Appel connexion a la base
require '../php/pdo.php';
$title = 'Ajout Bdd';
ob_start();

// Recuperation des styles principaux:
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<header>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="./affichage_categorie.php" >Retour</a>
            </li>
        </ul>
    </nav>
    <script type='text/javascript'>
       
       function getXMLHttpRequest() {
            var xhr = null;
	
            if (window.XMLHttpRequest || window.ActiveXObject) {
                if (window.ActiveXObject) {
                    try {
                        xhr = new ActiveXObject("Msxml2.XMLHTTP");
                    } catch(e) {
                        xhr = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                } else {
                    xhr = new XMLHttpRequest(); 
                }
            } else {
                alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
                return null;
            }
	
            return xhr;
        }



        function go(){
            var xhr = getXMLHttpRequest();
                xhr.onreadystatechange = function(){
                if(xhr.readyState == 4 && xhr.status == 200){
                    leselect = xhr.responseText;
                    document.getElementById('styleS').innerHTML = leselect;
                }
            }
 
           
            xhr.open("POST","ajaxCatSec.php",true);
            xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
            sel = document.getElementById('styleP');
            idPrincipal = sel.options[sel.selectedIndex].value;
            xhr.send("idStylePrincipal_StylePrincipal="+idPrincipal);
        }
    </script>
</header>
<body class="position-absolute mt-sm-3 mt-5 pt-2">   
    <div class="mt-5 mt-sm-none contenair position-relative">


    <form class="row d-flex justify-content-center">
    <div class="form-row col-12 md-12 col-lg-8">
        <div class="form-group col-md-6">
            <label for="inputStyleP">Style Principal</label>
            <select name='styleP' id='styleP' class="custom-select" onchange='go()'>
                <option value='-1'>Aucun</option>
                <?php
               
                $req = $bd->query("SELECT * FROM styleprincipal");
                while ($row = $req->fetch()){
                   
                    echo "<option value='".$row['idStylePrincipal_StylePrincipal']."'>".$row['nomStylePrincipal_StylePrincipal']."</option>";
                    }
                
                    ?>
            </select>
           
        </div>
        <div class="form-group col-md-6">
            <label for="inputStyleS">Style Secondaire</label>
            <div id='styleS'>
            <select name='styleS' class="custom-select">
                <option value='-1'>Choisir d'abord un style principal</option>
            </select>
        </div>
    </div>
                </div>
        <div class="form-row col-12 md-12 col-lg-8">
        <div class="form-group col-md-6">
            <label for="inputNG">Nom du Groupe</label>
            <input type="text" class="form-control" id="nomGroup" placeholder="Nom du Groupe">
        </div>
        <div class="form-group col-md-6">
            <label for="inputNA">Nom de l'album</label>
            <input type="text" class="form-control" id="nomAlbum" placeholder="Nom de l'album">
        </div>
    </div>
    <div class="form-row col-12 md-12 col-lg-8">
        <div class="form-group col-md-6">
            <label for="inputLabel">Label de l'album</label>
            <input type="text" class="form-control" id="labelAlbum" placeholder="Label de l'album">
        </div>
        <div class="form-group col-md-6">
            <label for="photo">Photo du groupe / album</label>
            <input type="text" class="form-control" id="photoAlbum" placeholder="Lien vers la photo">
        </div>
    </div>
    <div class="form-row col-12 md-12 col-lg-8">
            <div class="form-group col-md-6">
                <label for="mail">Mail de contact</label>
                <input type="email" class="form-control" id="mailContact" placeholder="Mail de contact">
            </div>
            <div class="form-group col-md-6">
                <label for="num">Numéro de téléphone</label>
                <input type="number" class="form-control" id="numContact" placeholder="Numéro de contact">
            </div>
        </div>
        <div class="form-row col-12 md-12 col-lg-8">
                <div class="form-group col-md-6">
                    <label for="inputLink">Lien du groupe</label>
                    <input type="text" class="form-control" id="linkGroup" placeholder="Lien du groupe">
                </div>
                <div class="form-group col-md-6">
                    <label for="listen1">Lien d'écoute 1</label>
                    <input type="text" class="form-control" id="listen1" placeholder="Lien d'écoute 1">
                </div>
            </div>
            <div class="form-row col-12 md-12 col-lg-8">
                    <div class="form-group col-md-6">
                        <label for="clip1">Lien du Clip 1</label>
                        <input type="text" class="form-control" id="clip1" placeholder="Lien du Clip 1">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="listen2">Lien d'écoute 2</label>
                        <input type="text" class="form-control" id="listen2" placeholder="Lien d'écoute 2">
                    </div>
                </div>
                <div class="form-row col-12 md-12 col-lg-8">
                        <div class="form-group col-md-6">
                            <label for="clip2">Lien du Clip 2</label>
                            <input type="text" class="form-control" id="clip2" placeholder="Lien du Clip 2">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="listen3">Lien d'écoute 3</label>
                            <input type="text" class="form-control" id="listen3" placeholder="Lien d'écoute 3">
                        </div>
                    </div>
                   

                </div>
                <div class="row d-flex justify-content-center">
    <button type="submit" class="btn btn-danger">Ajouter</button>
    </div>   
</form>

<?php

$content = ob_get_clean();
require './template.php';
?>
