<?php

// Appel conexion a la base
require '../php/pdo.php';

// Requete catégorie STYLE METAL EXTREME:
$choix = 'STYLE HARDCORE PUNK';
$req = $bd->prepare("SELECT nomGroupe_Groupe, lien_Groupe, nomAlbum_Album, dateSortie_Album, label_Album,nomStyleSecondaire_StyleSecondaire, nomStylePrincipal_StylePrincipal, clip_Titre, lienEcouteTitre_Titre FROM groupe
NATURAL JOIN album
NATURAL JOIN titre
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
WHERE nomStyleprincipal_StylePrincipal=:choix ");
$req->execute(array(
    'choix' => $choix
));
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Groupes du <?php echo $choix; ?></title>
</head>
<body style="margin-top:80px">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <a class="navbar-brand" href="#"><?php echo $choix; ?></a>
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="./affichage_categorie.php">Retour</a>
            </li>
        </ul>
    </nav>
<?php 
$compteur = 1;
while ($row = $req->fetch()){
    $nomGroupe = $row['nomGroupe_Groupe'];
    $styleSec = $row['nomStyleSecondaire_StyleSecondaire'];
    $lienSite = $row['lien_Groupe'];
    $nomAlbum = $row['nomAlbum_Album'];
    $dateSortie = $row['dateSortie_Album'];
    $label = $row['label_Album'];
    $clip = $row['clip_Titre'];
    $lienEcoute = $row['lienEcouteTitre_Titre'];
?>
    <div class="media flex-column align-items-center align-sm-left flex-sm-row">
        <div>
            <img src="https://www.lagrosseradio.com/_images/fck/20184.jpg" class="mr-sm-3" style="width:95px">
        </div>
        <div class="media-body text-center text-sm-left">
            <h5 class="mt-0 mb-1 font-weight-bold"><?php echo $nomGroupe; ?></h5>
            <h6 class="mt-0 mb-2 font-weight-bold"><?php echo $styleSec; ?></h6>
            <button type="button" class="btn btn-primary btn-md mb-2" data-target="#MonCollapse<?php echo $compteur ?>" data-toggle="collapse" aria-expanded="false" aria-controls=".MonCollapse">Voir +</button>
            <input type="checkbox" class="float-right mr-2">
            <div id="MonCollapse<?php echo $compteur ?>" class="collapse">
                <a target="_blank" href="<?php echo $lienSite;?>"><button type="button" class="btn btn-primary btn-md">Site du Groupe</button></a>
                <p> Nom de l'album : <?php echo $nomAlbum;?> </p>
                <p> Date de sortie : <?php echo $dateSortie;?> </p>
                <p> Label : <?php echo $label;?> </p>
                <p> Lien Clip : <i class="fab fa-youtube" style="color: red;"></i> <?php echo $clip;?> </p>
                <p> Lien d'ecoute : <i class="far fa-play-circle"></i>  <?php echo $lienEcoute;?> </p>
            </div>
        </div>
    </div>

    <?php 
    $compteur ++; 
    } 
    $req -> closeCursor();
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="../js/script.js"></script>
</body>
</html>