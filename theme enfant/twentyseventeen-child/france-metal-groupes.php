<?php /* Template Name: groupes */ ?>
<?php get_header(); ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>-child/style-metal.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<?php
// Appel connexion a la base

try
{
        $bd = new PDO('mysql:host=cl1-sql23.phpnet.org;dbname=p1216_5;charset=utf8', 'p1216_5', '6xl31ESwq358');
        //$bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        $bd->exec('SET NAMES utf8');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
<?php
// try {
//     //$json =file_get_contents('pdo.JSON');
//     //$dec=json_decode($json, true);
    
//     //$bd=new PDO("mysql:host=".$dec['host'].";dbname=".$dec['dbName'], $dec['user'] , $dec['pass']);
//     $bd=new PDO('mysql:host=localhost;dbname=p1216_5;charset=utf8', 'gen-005', 'x0ER2a(4]n5V');
//     //stock url 51.254.203.143
//     $bd->exec('SET NAMES utf8');
        
//     // echo 'Connexion OK';
//     }
//     catch (Exception $e)
//     {
//             die('Erreur : ' . $e->getMessage());
//     }

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

<body style="margin-top:80px">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <a class="navbar-brand" href="#"><?php echo $choix; ?></a>
        <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" href="index.php/categories/">Retour</a>
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
    $clip2 = $row['clip_Titre2'];
    $lienEcoute = $row['lienEcouteTitre_Titre'];
    $lienEcoute2 = $row['lienEcouteTitre_Titre2'];
    $lienEcoute3 = $row['lienEcouteTitre_Titre3'];
    $pochette = $row['pochette'];
?>
    <div class="media flex-column align-items-center align-sm-left flex-sm-row">
        <div>
            <?php
            if(empty($pochette)){?>
            <img src="<?php bloginfo('stylesheet_directory'); ?>../img/Image-Not-Found.png" class="ml-sm-3 mr-sm-3" style="width:95px">
             <!--   <img src="../img/Image-Not-Found.png" class="ml-sm-3 mr-sm-3" style="width:95px"> --->
            <?php
            } else {?>
                <img src="<?php echo $pochette;?>" class="ml-sm-3 mr-sm-3" style="width:95px">
            <?php
            }?>
        </div>
        <div class="media-body text-center text-sm-left">
            <h5 class="mt-0 mb-1 font-weight-bold"><?php echo $nomGroupe; ?></h5>
            <h6 class="mt-0 mb-2 font-weight-bold"><?php echo $styleSec; ?></h6>
            <button type="button" class="btn btn-danger btn-md mb-2" data-target="#MonCollapse<?php echo $compteur ?>" data-toggle="collapse" aria-expanded="false" aria-controls=".MonCollapse">Voir +</button>
            <input type="checkbox" class="float-right mr-2">
            <div id="MonCollapse<?php echo $compteur ?>" class="collapse">
                <a target="_blank" href="<?php echo $lienSite;?>"><button type="button" class="btn btn-danger btn-md">Site du Groupe</button></a>
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
                <p>Lien clip 1 : <a target="_blank" href="<?php echo $clip;?> "><i class="fab fa-youtube" style="color: red;"></i></a>
            <?php
            }
            
            if(!empty($clip2)){?>
              /  Lien clip 2 : <a target="_blank" href="<?php echo $clip2;?> "><i class="fab fa-youtube" style="color: red;"></i></a></p>
            <?php
            }
            
            if(!empty($lienEcoute)){?>
                <p>Lien d'ecoute 1 : <a target="_blank" href="<?php echo $lienEcoute;?> "><i class="far fa-play-circle"></i></a>
            <?php
            }    
           
            if(!empty($lienEcoute2)){?>
              /  Lien d'ecoute 2 : <a target="_blank" href="<?php echo $lienEcoute2;?> "><i class="far fa-play-circle"></i></a>
            <?php
            }
          
            if(!empty($lienEcoute3)){?>
              /  Lien d'ecoute 3 : <a target="_blank" href="<?php echo $lienEcoute3;?> "><i class="far fa-play-circle"></i></a>
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
