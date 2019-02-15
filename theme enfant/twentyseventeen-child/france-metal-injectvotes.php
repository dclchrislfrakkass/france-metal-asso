<?php /* Template Name: injectvotes */ ?>
<?php 
$user = wp_get_current_user();
$ipUser = $user->wpmem_reg_ip;
$userEmail= $user->user_email;
$userID= $user->ID;
$userlogin = $user->user_login;
$username = $user->display_name;
?>
<?php
// Appel connexion a la base
require 'pdo.php';
$title = 'Validation de vos votes';
ob_start();
$idMembre = $userID;

?>
<header>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="./categories/" >Retour</a>
            </li>
        </ul>
    </nav>
</header>
<body class="position-absolute text-center mt-sm-3 mt-5 pt-2">
<div class="mt-5 mt-sm-none contenair position-relative"></div>  <!-- div intercalaire -->
<div class="row">
<?php

//  Premier vote
$premiervote = $_POST["idAlbum1"];
$req=$bd->prepare("SELECT * FROM a_voté_pour
NATURAL JOIN album
NATURAL JOIN groupe
WHERE idAlbum_Album=:premiervote
AND idMembre_membre=:idMembre");
$req->execute(array(
    'premiervote' => intval($premiervote),
    'idMembre' => $idMembre
));
$row=$req->fetch();
if (!$row){
    $req2=$bd->prepare("UPDATE album SET note_Album = note_Album + 1
    WHERE idAlbum_Album = :premiervote");
    $req2->execute(array(
    'premiervote' => intval($premiervote)
    ));
    $req2->closeCursor();
    $req3=$bd->prepare("INSERT INTO a_voté_pour
    VALUES (:premiervote,:idMembre)");
    $req3->execute(array(
        'premiervote' => intval($premiervote),
        'idMembre' => $idMembre
    ));
    $req3->closeCursor();

    $req4=$bd->prepare("SELECT * FROM album
    NATURAL JOIN groupe
    WHERE idAlbum_Album=:premiervote");
    $req4->execute(array(
        'premiervote' => intval($premiervote)
    ));
    $row4=$req4->fetch();
    echo '<div class="col-md-4">
            <h4 class="mb-2">Votre vote a été pris en compte '.$row4['nomGroupe_Groupe'].'</h4>
            <img class="mb-2" style="width:95px" src="'.$row4['pochette'].'">
        </div>';
    $req4->closeCursor();
} else{
    echo '<div class="col-md-4">
            <h4 class="mb-2 text-danger">Vous avez déja voté pour </h4><h4>'.$row['nomGroupe_Groupe'].'</h4>
            <img class="mb-2" style="width:95px" src="'.$row['pochette'].'">
        </div>';
};
$req->closeCursor();



// //  Deuxieme vote

if(!empty($_POST["idAlbum2"])){
    $deuxiemevote = $_POST["idAlbum2"];
    $req=$bd->prepare("SELECT * FROM a_voté_pour
    NATURAL JOIN album
    NATURAL JOIN groupe
    WHERE idAlbum_Album=:deuxiemevote
    AND idMembre_membre=:idMembre");
    $req->execute(array(
        'deuxiemevote' => intval($deuxiemevote),
        'idMembre' => $idMembre
    ));
    $row=$req->fetch();
    if (!$row){
        $req2=$bd->prepare("UPDATE album SET note_Album = note_Album + 1
        WHERE idAlbum_Album = :deuxiemevote");
        $req2->execute(array(
        'deuxiemevote' => intval($deuxiemevote)
        ));
        $req2->closeCursor();

        $req3=$bd->prepare("INSERT INTO a_voté_pour
        VALUES (:deuxiemevote,:idMembre)");
        $req3->execute(array(
            'deuxiemevote' => intval($deuxiemevote),
            'idMembre' => $idMembre
        ));
        $req3->closeCursor();

        $req4=$bd->prepare("SELECT * FROM album
        NATURAL JOIN groupe
        WHERE idAlbum_Album=:deuxiemevote");
        $req4->execute(array(
            'deuxiemevote' => intval($deuxiemevote)
        ));
        $row4=$req4->fetch();
        echo '<div class="col-md-4">
                <h4 class="mb-2">Votre vote a été pris en compte '.$row4['nomGroupe_Groupe'].'</h4>
                <img class="mb-2" style="width:95px" src="'.$row4['pochette'].'">
            </div>';
        $req4->closeCursor();
    } else{
        echo '<div class="col-md-4">
                <h4 class="mb-2 text-danger">Vous avez déja voté pour </h4><h4>'.$row['nomGroupe_Groupe'].'</h4> 
                <img class="mb-2" style="width:95px" src="'.$row['pochette'].'">
            </div>';
    };
    $req->closeCursor();
};

// // //  Troisieme vote

if(!empty($_POST["idAlbum3"])){
    $troisiemevote = $_POST["idAlbum3"];
    $req=$bd->prepare("SELECT * FROM a_voté_pour
    NATURAL JOIN album
    NATURAL JOIN groupe
    WHERE idAlbum_Album=:troisiemevote
    AND idMembre_membre=:idMembre");
    $req->execute(array(
        'troisiemevote' => intval($troisiemevote),
        'idMembre' => $idMembre
    ));
    $row=$req->fetch();
    if (!$row){
        $req2=$bd->prepare("UPDATE album SET note_Album = note_Album + 1
        WHERE idAlbum_Album = :troisiemevote");
        $req2->execute(array(
        'troisiemevote' => intval($troisiemevote)
        ));
        $req2->closeCursor();
        $req3=$bd->prepare("INSERT INTO a_voté_pour
        VALUES (:troisiemevote,:idMembre)");
        $req3->execute(array(
            'troisiemevote' => intval($troisiemevote),
            'idMembre' => $idMembre
        ));
        $req3->closeCursor();

        $req4=$bd->prepare("SELECT * FROM album
        NATURAL JOIN groupe
        WHERE idAlbum_Album=:troisiemevote");
        $req4->execute(array(
            'troisiemevote' => intval($troisiemevote)
        ));
        $row4=$req4->fetch();
        echo '<div class="col-md-4">
                <h4 class="mb-2">Votre vote a été pris en compte '.$row4['nomGroupe_Groupe'].'</h4>
                <img class="mb-2" style="width:95px" src="'.$row4['pochette'].'">
            </div>';
        $req4->closeCursor();
    } else{
        echo '<div class="col-md-4">
                <h4 class="mb-2 text-danger">Vous avez déja voté pour </h4><h4>'.$row['nomGroupe_Groupe'].'</h4>
                <img class="mb-2" style="width:95px" src="'.$row['pochette'].'">
            </div>';
    };
    $req->closeCursor();
};
?>
</div>
<?php
$content = ob_get_clean();
require 'template.php';
?>