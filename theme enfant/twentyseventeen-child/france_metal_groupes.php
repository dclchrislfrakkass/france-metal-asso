<?php /* Template Name: groupes */ ?>
<?php
$user = wp_get_current_user();
$ipUser = $user->wpmem_reg_ip;
$userEmail= $user->user_email;
$userID= $user->ID;
$userlogin = $user->user_login;
$username = $user->display_name;


// Appel connexion a la base
require 'pdo.php';
$title = 'Groupes';
ob_start();
$choix = $_GET['nom'];
$req = $bd->prepare("SELECT * FROM groupe
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
            <a class="nav-link" href="./categories/" >Retour</a>
            </li>
        </ul>
    </nav>
</header>
<body class="position-absolute mt-sm-3 mt-5 pt-2">

<?php
 echo '<br><br><br>';
 echo 'Display Name ='.$username.'<br>';
 echo 'login ='.$userlogin.'<br>';
 echo 'login ='.$userEmail.'<br>';
 echo 'IP ='.$ipUser.'<br>';
 echo 'ID ='.$userID.'<br>';
?>

    <div class="mt-5 mt-sm-none contenair position-relative"></div>  <!-- div intercalaire -->
    <form action="/votes/" method="POST">
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
                $idAlbum = $row['idAlbum_Album'];
            ?>
            <!-- div card de chaque groupe -->
            <div class="media flex-column align-items-center align-md-left flex-md-row col-md-6">
                <!-- pochette de chaque groupe -->
                <div>
                    <?php
                    if(empty($pochette)){?>
                        <img src="img/Image-Not-Found.png" class="ml-sm-3 mr-sm-3 mb-2 mb-sm-none" style="width:95px">
                    <?php
                    } else {?>
                        <img src="<?php echo $pochette;?>" class="ml-sm-3 mr-sm-3 mb-2 mb-sm-none" style="width:95px">
                    <?php
                    }?>
                </div>
                <!-- infos de chaque groupe -->
                <div class="media-body d-flex flex-column d-md-block align-items-center align-items-md-left">
                    <h5 class="mt-0 mb-1 font-weight-bold"><?php echo $nomGroupe; ?></h5>
                    <h6 class="mt-0 mb-2 font-weight-bold"><?php echo $styleSec; ?></h6>
                    <button type="button" class="btn btn-danger btn-md mb-2" data-target="#MonCollapse<?php echo $compteur ?>" data-toggle="collapse" aria-expanded="false" aria-controls=".MonCollapse">Voir +</button>
                    <?php  
                    // checkbox si connecte  
                    if(!empty($ipUser && $userEmail)){?>
                        <div class="float-none float-sm-right text-center mb-2 mb-sm-none">
                            <p class="mb-1">Votez pour ce groupe</p>
                            <input type="checkbox" name="idAlbum[]" value="<?php echo $idAlbum; ?>">
                        </div>
                        <?php
                        } 
                        ?>
                    <!-- div cache -->
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
            <?php
            // bouton si connecte
            if(!empty($ipUser && $userEmail)){?>
                <button type="submit" class="btn_valid position-fixed btn btn-danger">Valider</button>
            <?php
            } 
            $compteur ++; 
            } 
            $req -> closeCursor();
            ?>
        </div>
    </form>
<?php
$content = ob_get_clean();
require 'template.php';
?>