<?php
// Appel conexion a la base
require '../php/pdo.php';
// Requete catégorie STYLE METAL EXTREME:
$choix = $_GET['nom'];
$req = $bd->prepare("SELECT nomGroupe_Groupe, lien_Groupe, nomAlbum_Album, dateSortie_Album, label_Album,nomStyleSecondaire_StyleSecondaire, nomStylePrincipal_StylePrincipal, clip_Titre, clip_Titre2, lienEcouteTitre_Titre, lienEcouteTitre_Titre2, lienEcouteTitre_Titre3, pochette FROM groupe
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
<header>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <a class="navbar-brand" href="#"><?php echo $choix; ?></a>
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="./affichage_categorie.php">Retour</a>
            </li>
        </ul>
    </nav>
</header>
<body class="position-absolute mt-4 mt-md-3">   
    <div class="mt-5 mt-sm-none contenair position-relative"></div>  <!-- div intercalaire -->
    <div class="row">
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
            $clip2 = $row['clip_Titre2'];
            $lienEcoute = $row['lienEcouteTitre_Titre'];
            $lienEcoute2 = $row['lienEcouteTitre_Titre2'];
            $lienEcoute3 = $row['lienEcouteTitre_Titre3'];
            $pochette = $row['pochette'];
        ?>

            <div class="media flex-column align-items-center align-sm-left flex-sm-row col-md-6">
                <div>
                    <?php
                    if(empty($pochette)){?>
                        <img src="../img/Image-Not-Found.png" class="ml-sm-3 mr-sm-3 mb-2 mb-sm-none" style="width:95px">
                    <?php
                    } else {?>
                        <img src="<?php echo $pochette;?>" class="ml-sm-3 mr-sm-3 mb-2 mb-sm-none" style="width:95px">
                    <?php
                    }?>
                </div>
                <div class="media-body text-center text-sm-left">
                    <h5 class="mt-0 mb-1 font-weight-bold"><?php echo $nomGroupe; ?></h5>
                    <h6 class="mt-0 mb-2 font-weight-bold"><?php echo $styleSec; ?></h6>
                    <button type="button" class="btn btn-danger btn-md mb-2" data-target="#MonCollapse<?php echo $compteur ?>" data-toggle="collapse" aria-expanded="false" aria-controls=".MonCollapse">Voir +</button>
                    <div class="float-none float-sm-right text-center mr-sm-2 mb-2 mb-sm-none">
                        <p>Votez pour cet Album</p>
                        <input type="checkbox">
                    </div>
                    <div id="MonCollapse<?php echo $compteur ?>" class="collapse">
                        <a target="_blank" href="<?php echo $lienSite;?>"><button type="button" class="mb-2 btn btn-danger btn-md">Site du Groupe</button></a>
                        <?php
                    if(!empty($label)){?>
                        <p>Nom de l'album : <?php echo $nomAlbum;?></p>
                    <?php
                    }

                    if(!empty($label)){?>
                        <p>Date de sortie : <?php echo $dateSortie;?></p>
                    <?php
                    }    
                    
                    if(!empty($label)){?>
                        <p> Label : <?php echo $label;?> </p>
                    <?php
                    }
                    
                    if(!empty($clip)){?>
                        <p>Clip(s) : <a target="_blank" href="<?php echo $clip;?> "><i class="fab fa-youtube" style="color: red; font-size: 2rem"></i></a>
                    <?php
                    }
    
                    if(!empty($clip2)){?>
                    <a target="_blank" href="<?php echo $clip2;?> "><i class="fab fa-youtube" style="color: red; font-size: 2rem"></i></a></p>
                    <?php
                    }
                    
                    if(!empty($lienEcoute)){?>
                        <p>Lien(s): <a target="_blank" href="<?php echo $lienEcoute;?> "><i class="far fa-play-circle" style="font-size: 2rem"></i></a>
                    <?php
                    }    
                
                    if(!empty($lienEcoute2)){?>
                    <a target="_blank" href="<?php echo $lienEcoute2;?> "><i class="far fa-play-circle" style="font-size: 2rem"></i></a>
                    <?php
                    }
                
                    if(!empty($lienEcoute3)){?>
                    <a target="_blank" href="<?php echo $lienEcoute3;?> "><i class="far fa-play-circle" style="font-size: 2rem"></i></a></p>
                    <?php
                    }
                    ?> 
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
