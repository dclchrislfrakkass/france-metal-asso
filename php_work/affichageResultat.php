<?php
// Appel connexion a la base
require '../php/pdo.php';
$title = 'Resultats';
ob_start();
$requetestyle = $bd -> prepare("SELECT count(idStyleprincipal_StylePrincipal) AS NBID FROM styleprincipal");
$requetestyle -> execute();
$row = $requetestyle->fetch();
$NBID = $row['NBID'];
?>
<header>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="./affichage_categorie.php" >Retour</a>
            </li>
        </ul>
    </nav>
</header>
<body class="position-absolute mt-sm-3 mt-5 pt-2">   
    <div class="mt-5 mt-sm-none contenair position-relative"></div>  <!-- div intercalaire -->
        <h1 class="text-center">Résultats</h1>
            <h2 class="text-center">Les 3 groupes ayant le plus de votes</h2>
    <div class="row">
    <?php 
    //comptage des votants total
    $req7 = $bd->query("SELECT count(*) FROM a_voté_pour");
    $voteTotal = $req7->fetch();
    $req = $bd->query("SELECT * FROM groupe
    NATURAL JOIN album
    NATURAL JOIN stylesecondaire
    NATURAL JOIN styleprincipal
    NATURAL JOIN a_voté_pour
    NATURAL JOIN wp_users
    GROUP BY nomGroupe_Groupe
    ORDER BY note_Album DESC LIMIT 3");
    while ($row = $req->fetch()){
        $req2 = $bd->prepare("SELECT * FROM groupe
        NATURAL JOIN album
        NATURAL JOIN a_voté_pour
        NATURAL JOIN wp_users
        WHERE idAlbum_Album = :idalbum
        ORDER BY note_Album DESC");
        $req2->execute(array(
            'idalbum' => $row['idAlbum_Album']
        ));?>
        <div class='col-sm-12 col-lg-6 col-xl-4 d-flex flex-column align-items-center'>
            <img class='mb-4' src="<?php echo $row["pochette"]; ?>" style="width:70%">
            <div class="d-flex flex-column">
                <div class="d-flex">
                    <p class="col-5 p-0"><span class="font-weight-bold">Nom du Groupe</span></p>
                    <p class="col-1 p-0">:</p>
                    <p class="col-6 p-0"><span class="text-primary"><?php echo $row['nomGroupe_Groupe']; ?></span></p>
                </div>
                <div class="d-flex">
                    <p class="col-5 p-0"><span class="font-weight-bold">Nom de l'album</span></p>
                    <p class="col-1 p-0">:</p>
                    <p class="col-6 p-0"><span class="text-primary"><?php echo $row['nomAlbum_Album']; ?></span></p>
                </div>
                <div class="d-flex">
                    <p class="col-5 p-0"><span class="font-weight-bold">Nombre de vote</span></p>
                    <p class="col-1 p-0">:</p>
                    <p class="col-6 p-0"><span class="text-primary"><?php echo $row['note_Album']; ?></span></p>
                </div>
                <div class="d-flex">
                    <p class="col-5 p-0"><span class="font-weight-bold">Style</span></p>
                    <p class="col-1 p-0">:</p>
                    <p class="col-6 p-0"><span class="text-primary"><?php echo $row['nomStyleSecondaire_StyleSecondaire']; ?></span></p>
                </div>
                <div class="d-flex">
                    <p class="col-5 p-0"><span class="font-weight-bold">Catégorie</span></p>
                    <p class="col-1 p-0">:</p>
                    <p class="col-6 p-0"><span class="text-primary"><?php echo $row['nomStylePrincipal_StylePrincipal']; ?></span></p>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    </div>
    <hr style="border: 10px solid white";>
    <div class='row w-100 flex-column flex-lg-row align-items-center justify-content-start'>
    <?php   
    for ($ccount = 1 ; $ccount <= intval($NBID) ; $ccount++ ){
       
        $requetephoto = $bd->prepare("SELECT * FROM styleprincipal
        WHERE idStyleprincipal_StylePrincipal=:ccount");
        $requetephoto-> execute(array(
            'ccount' => $ccount
        ));
        $row = $requetephoto->fetch();
        ?>
        <div class="col-sm-12 col-lg-6 col-xl-4 d-flex flex-column align-items-center align-self-baseline">
            <img src='<?php echo $row["illustration"]; ?>' class="mt-5" style='width:70%'>
        <?php
        $req = $bd->prepare("SELECT * FROM groupe
        NATURAL JOIN album
        NATURAL JOIN stylesecondaire
        NATURAL JOIN styleprincipal
        NATURAL JOIN a_voté_pour
        WHERE idStyleprincipal_StylePrincipal=:ccount
        GROUP BY nomGroupe_Groupe
        ORDER BY note_Album DESC");
        $req -> execute(array(
            'ccount' => $ccount
        ));
        $row = $req->fetch();

        if(empty($row['note_Album'])){?>
                <p>Aucun vote dans cette catégorie</p>
                </div>
                <?php
            } else {
                $req = $bd->prepare("SELECT * FROM groupe
                NATURAL JOIN album
                NATURAL JOIN stylesecondaire
                NATURAL JOIN styleprincipal
                NATURAL JOIN a_voté_pour
                WHERE idStyleprincipal_StylePrincipal=:ccount
                GROUP BY nomGroupe_Groupe
                ORDER BY note_Album DESC limit 5");
                $req -> execute(array(
                    'ccount' => $ccount
                ));
                $tcount = 1;
                while (!empty($row = $req->fetch())){
                    $pochette = $row['pochette'];
                    ?>
                    <div class="col-12">
                        <div class="row d-flex flex-column">
                            <p class="mt-4 mx-auto"><span class="font-weight-bold text-danger"> TOP <?php echo $tcount; ?></span></p>
                            <?php
                            if(empty($pochette)){?>
                                <img src="../img/Image-Not-Found.png" class="mx-auto mb-2" style="width:95px">
                            <?php
                            } else {?>
                                <img src="<?php echo $pochette; ?>" class="mx-auto mb-2" style="width:95px">
                            <?php
                            }?>
                            <div class="d-flex text-left">
                                <p class="col-5 p-0 m-0 font-weight-bold p-0">Nom du groupe</p>
                                <p class="col-1 p-0 m-0">:</p>
                                <p class="col-6 p-0 m-0 text-primary"><?php echo $row['nomGroupe_Groupe']; ?></p>
                            </div>
                            <div class="d-flex">
                                <p class="col-5 p-0 m-0 font-weight-bold">Nom de l'album </p>
                                <p class="col-1 p-0 m-0">:</p>
                                <p class="col-6 p-0 m-0 text-primary"><?php echo $row['nomAlbum_Album']; ?></p>
                            </div>
                            <div class="d-flex">
                                <p class="col-5 p-0 m-0 font-weight-bold">Nombre de votes</p>
                                <p class="col-1 p-0 m-0">:</p>
                                <p class="col-6 p-0 m-0 text-primary"><?php echo $row['note_Album']; ?></p>
                            </div>
                            <div class="d-flex">
                                <p class="col-5 p-0 m-0 font-weight-bold">Style</p>
                                <p class="col-1 p-0 m-0">:</p>
                                <p class="col-6 p-0 m-0 text-primary"><?php echo $row['nomStyleSecondaire_StyleSecondaire']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                    $tcount ++;
                }
            }
            $requetephoto->closeCursor();
            $req->closeCursor();
            echo "</div>";
    }
    echo "</div>";
$content = ob_get_clean();
require './template.php';
?>
