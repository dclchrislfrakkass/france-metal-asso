<?php
$_SESSION['ip'] = 'ddgg';
// Appel conexion a la base
require '../php/pdo.php';
$title = 'Groupes';
ob_start();
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
<header>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <a class="navbar-brand" href="#"><?php echo $choix; ?></a>
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="./affichage_categorie.php" >Retour</a>
            </li>
        </ul>
    </nav>
</header>
<body class="position-absolute mt-sm-3 mt-5 pt-2">   
    <div class="mt-5 mt-sm-none contenair position-relative"></div>  <!-- div intercalaire -->
    <form action="traitement_vote.php" method="POST">
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

            <div class="media flex-column align-items-center align-md-left flex-md-row col-md-6">
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
                <div class="media-body d-flex flex-column d-md-block align-items-center align-items-md-left">
                    <h5 class="mt-0 mb-1 font-weight-bold"><?php echo $nomGroupe; ?></h5>
                    <h6 class="mt-0 mb-2 font-weight-bold"><?php echo $styleSec; ?></h6>
                    <button type="button" class="btn btn-danger btn-md mb-2" data-target="#MonCollapse<?php echo $compteur ?>" data-toggle="collapse" aria-expanded="false" aria-controls=".MonCollapse">Voir +</button>
                    <?php    
                    if(!empty($_SESSION['ip'])){?>
                        <div class="float-none float-sm-right text-center mr-sm-2 mb-2 mb-sm-none">
                            <p class="mb-1">Votez pour ce groupe</p>
                            <input type="checkbox" name="style[]" value="<?php echo $nomGroupe; ?>">
                            <?php
                            } 
                            ?>
                        </div>
                    <div id="MonCollapse<?php echo $compteur ?>" class="collapse text-center text-md-left">
                        <a target="_blank" href="<?php echo $lienSite;?>"><button type="button" class="mb-2 btn btn-danger btn-md">Site du Groupe</button></a>
                        <?php
                    if(!empty($nomAlbum)){?>
                        <p>Nom de l'album : <?php echo $nomAlbum;?></p>
                    <?php
                    }

                    if(!empty($dateSortie)){?>
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
    <button type="submit" class="btn_valid position-fixed btn btn-danger">Valider</button>

    </form>
        <?php 
        $compteur ++; 
        } 
        $req -> closeCursor();
        
$content = ob_get_clean();
require './template.php';
?>