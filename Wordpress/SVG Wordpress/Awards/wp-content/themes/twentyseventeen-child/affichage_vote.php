<?php /* Template Name: affichvotes */ ?>
<?php

$user = wp_get_current_user();
$ipUser = $user->wpmem_reg_ip;
$userEmail= $user->user_email;
$userID= $user->ID;
$userlogin = $user->user_login;
$username = $user->display_name;
$roles = array_shift($user->roles);


if ($roles == 'administrator') {
?>

<?php
    // Appel connexion a la base
    require 'pdo.php';
    $title = 'Résultat Catégories';
    ob_start();
    $req7 = $bd->query("SELECT count(*) FROM a_voté_pour");
    $voteTotal = $req7->fetch();
    ?>
    <header>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/categorie/" >Retour</a>
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
                    <!-- Display the pie chart -->
                    <div id="piechart11"></div>
                </div>
                <div class='col-12 '>
                    <h3 class='text-center'>Top 10 des groupes</h3>
                    <!-- Display the pie chart -->
                    <div id="piechart10"></div>
                </div>
                <div class='col-12'>
                    <h3 class='text-center'>Top 10 par styles</h3>
                    <!-- Display the pie chart -->
                    <div id="piechart12"></div>
                </div>
            </div>

    <hr style="border: 10px solid white";>

    <div class='row'>
        <h2 class='mx-auto'>Top 5 dans chaque catégorie</h3>
        <div class="mt-5 mt-sm-none contenair position-relative"></div>  <!-- div intercalaire -->
            <div class="row">
                <!-- Display the pie chart -->
                <div class="col-12 col-xl-6 text-center mt-3">
                    <h3 class="mt-1">Metal Extreme</h3>
                    <div id="piechart"></div>
                </div>
                <div class="col-12 col-xl-6 text-center mt-xl-3">
                    <h3 class="mt-1">Metal Dark Ambiant Atmo</h3>
                    <div id="piechart2"></div>
                </div>
                <div class="col-12 col-xl-6 text-center">
                    <h3 class="mt-1">Hardcore Punk</h3>
                    <div id="piechart3"></div>
                </div>
                <div class="col-12 col-xl-6 text-center">
                    <h3 class="mt-1">Metal Hardcore</h3>
                    <div id="piechart4"></div>
                </div>
                <div class="col-12 col-xl-6 text-center">
                    <h3 class="mt-1">Metal Heavy Thrash</h3>
                    <div id="piechart5"></div>
                </div>
                <div class="col-12 col-xl-6 text-center">
                    <h3 class="mt-1">Metal Fusion</h3>
                    <div id="piechart6"></div>
                </div>
            </div>
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
    <?php
    $req ->closeCursor();
    $req7 ->closeCursor();
    include 'traitement_votes.php';
    $content = ob_get_clean();
    require 'template-admin.php';
    ?>

<?php    
} else{
echo "Vous devez vous loger en Administrateur !<br>";

echo "<meta http-equiv='refresh' content='1; URL=https://awards.france-metal.fr/'>";



}
?>