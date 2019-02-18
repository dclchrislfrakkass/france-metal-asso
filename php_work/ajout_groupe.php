<?php
session_start();
// Appel connexion a la base
require '../php/pdo.php';

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
           
        function go(){
            var xhr = getXhr();
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
    <div class="mt-5 mt-sm-none contenair position-relative"></div> 

<form>
    <fieldset style="width: 500px">
        <legend>Choix pour les ajouts</legend>
        <label>Style Principal</label>
        <select name='styleP' id='styleP' onchange='go()'>
            <option value='-1'>Aucun</option>
            <?php
               
               $req = $bd->query("SELECT * FROM styleprincipal");
               while ($row = $req->fetch()){
                  
                    echo "<option value='".$row['idStylePrincipal_StylePrincipal']."'>".$row['nomStylePrincipal_StylePrincipal']."</option>";
                }
                
            ?>
        </select>
        <label>Style Secondaire</label>
        <div id='styleS' style='display:inline'>
        <select name='styleS'>
            <option value='-1'>Choisir d'abord un style principal</option>
        </select>
        </div>
    </fieldset>
</form>
<?php






// echo '<form action="#" method="post">';
// echo '<select id="styleP" name="style" size="1" class="liste">';
// while ($row = $req->fetch()){
//     echo '<option value="'.$row['nomStylePrincipal_StylePrincipal'].'">'.$row['nomStylePrincipal_StylePrincipal'].'</option>';
// }
// echo '</select>';
// echo '<input type="submit" value="Valider"></form>';
// $req -> closeCursor();

// // Recuperation des style secondaires selon le style principale choisi:
// $styleprincselect = 1;// style principale selectionner

// $req=$bd->prepare("SELECT nomStyleSecondaire_StyleSecondaire FROM stylesecondaire
// NATURAL JOIN stylePrincipal
// WHERE idStylePrincipal_StylePrincipal = :styleprincselect ");
// $req->execute(array(
//     'styleprincselect' => $styleprincselect
// ));
// echo '<form action="#" method="post">';
// echo '<select id="styleP" name="styleP" size="1" class="liste">';
// while ($row = $req->fetch()){
//     echo '<option value="'.$row['nomStyleSecondaire_StyleSecondaire'].'">'.$row['nomStyleSecondaire_StyleSecondaire'].'</option>';
// }
// echo '</select>';
// echo '<input type="submit" value="Valider"></form>';
// $req -> closeCursor();















// // Insertion des infos du groupe dans la table groupe:

// $nomGroupe = 'Nom du groupe';
// $lienSite = 'Lien du site ou page facebook du groupe';
// $mail = 'mail du groupe';
// $telephone = 'telephone du groupe';

// $req = $bd->prepare("INSERT INTO groupe (nomGroupe_Groupe, lien_Groupe, mail_Groupe, telephone_Groupe) VALUES (:nomGroup, :lien, :mailGroupe, :telGroupe)");
// $query->execute(array(
//     'nomGroup'=> $nomGroup,
//     'lien' => $lienSite,
//     'mailGroupe' => $mail,
//     'telGroupe' => $telephone
// ));
// $req -> closeCursor();

// //  Insertion des infos dans la table album:

// $nomAlbum ='nom de l album';
// $dateSortie = 'date de sortie';
// $label = 'label';

// $req = $bd->prepare("INSERT INTO album (nomAlbum_Album, dateSortie_Album, label_Album) VALUES (:nomAlbum, :sortie, :label, :liens)");
// $query->execute(array(
//     'label' => $label,
//     'nomAlbum'=>$nomAlbum,
//     'sortie'=> $sortie
// ));
// $req -> closeCursor();

// // // Insertion des infos dans la table titre:

// $lienClip = 'lien du ou des clip titre';
// $lienTitre ='lien ecoute du ou des titre';

// $query = $bd->prepare("INSERT INTO titre (clip_Titre, lienEcouteTitre_Titre) VALUES (:clipTitre, :lienTitre)");
// $query->execute(array(
//     'clipTitre'=> $lienClip,
//     'lienTitre' => $lienTitre
// ));
// $req -> closeCursor();


$content = ob_get_clean();
require './template.php';
?>
