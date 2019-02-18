<?php
// Appel conexion a la base
require '../php/pdo.php';
$title = 'Résultat Catégories';
ob_start();
$req7 = $bd->query("SELECT count(*) FROM a_voté_pour");
$voteTotal = $req7->fetch();
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
    <h1 class="text-center">Statistiques</h1>
        <div class='row align-items-end'>
            <div class='col-12'>
                <h3 class='text-center'>Par catégories</h3>
                <?php include 'graph2.php';?>
            </div>
            <div class='col-12 '>
                <h3 class='text-center'>Top 10 des groupes</h3>
                <?php include 'graph1.php';?>
            </div>
            <div class='col-12'>
                <h3 class='text-center'>Top 10 par styles</h3>
                <?php include 'graph3.php';?>
            </div>
        </div>

<hr style="border: 10px solid white";>

<div class='row'>
    <h2 class='mx-auto'>Top 5 dans chaque catégorie</h3>
    <?php include 'miniGraph.php';?>
</div>

<hr style="border: 10px solid white";>

<h2 class="text-center">Les 3 groupes ayant le plus de votes</h2>
    <h2 class="text-center">Votes Total : <?=$voteTotal['count(*)']?></h2>
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
        $chaine='';
        $chaine2= '';
        $req2 = $bd->prepare("SELECT * FROM groupe
        NATURAL JOIN album
        NATURAL JOIN a_voté_pour
        NATURAL JOIN wp_users
        WHERE idAlbum_Album = :idalbum
        ORDER BY note_Album DESC");
        $req2->execute(array(
            'idalbum' => $row['idAlbum_Album']
        ));?>
        <div class='col-sm-12 col-md-6 col-lg-4'>
        <img class='mb-4' src="<?php echo $row["pochette"]; ?>" style="width:90%">
        <p><strong> Nom du Groupe : </strong>"<?php echo $row['nomGroupe_Groupe']; ?></p>
        <p><strong> Nom de l'album : </strong><?php echo $row['nomAlbum_Album']; ?></p>
        <p><strong> Nombre de vote : </strong><?php echo $row['note_Album']; ?></p>
        <p><strong> Style : </strong><?php echo $row['nomStyleSecondaire_StyleSecondaire']; ?></p>
        <p><strong> Catégorie : </strong><?php echo $row['nomStylePrincipal_StylePrincipal']; ?></p>
        </div>
    <?php
    }
    ?>
</div>
<hr style="border: 10px solid white";>
<?php
$req ->closeCursor();
$req7 ->closeCursor();
include './traitement_votes.php';
$content = ob_get_clean();
require './template.php';
?>