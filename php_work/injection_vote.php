<?php
// Appel connexion a la base
require '../php/pdo.php';
// $user = wp_get_current_user();
// $ipUser = $user->wpmem_reg_ip;
// $userEmail= $user->user_email;
$title = 'Validation de vos votes';
ob_start();
$idMembre = 8;
$vote = array($_POST["idAlbum1"]);
if (!empty($_POST["idAlbum2"]) && empty($_POST["idAlbum3"])){
    $vote = array($_POST["idAlbum1"], $_POST["idAlbum2"]);
} elseif (!empty($_POST["idAlbum2"]) && !empty($_POST["idAlbum3"])){
    $vote = array($_POST["idAlbum1"], $_POST["idAlbum2"], $_POST["idAlbum3"]);
}
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
<body class="position-absolute text-center mt-sm-3 mt-5 pt-2">
    <div class="mt-5 mt-sm-none contenair position-relative"></div>  <!-- div intercalaire -->
        <div class="row">
        <?php
        foreach ($vote as $key => $value) {
            if(!empty($vote[$key])){
                $req=$bd->prepare("SELECT * FROM a_voté_pour
                NATURAL JOIN album
                NATURAL JOIN groupe
                NATURAL JOIN wp_users
                WHERE idAlbum_Album=:vote
                AND ID=:idMembre");
                $req->execute(array(
                    'vote' => $vote[$key],
                    'idMembre' => $idMembre
                ));
                $row=$req->fetch();
                if (!$row){
                    $req2=$bd->prepare("UPDATE album SET note_Album = note_Album + 1
                    WHERE idAlbum_Album = :premiervote");
                    $req2->execute(array(
                    'premiervote' => $vote[$key]
                    ));
                    $req2->closeCursor();
                    $req3=$bd->prepare("INSERT INTO a_voté_pour
                    VALUES (:premiervote,:idMembre)");
                    $req3->execute(array(
                        'premiervote' => $vote[$key],
                        'idMembre' => $idMembre
                    ));
                    $req3->closeCursor();

                    $req4=$bd->prepare("SELECT * FROM album
                    NATURAL JOIN groupe
                    WHERE idAlbum_Album=:premiervote");
                    $req4->execute(array(
                        'premiervote' => $vote[$key]
                    ));
                    $row4=$req4->fetch();
                    echo '<div class="col-md-4">
                            <h4 class="mb-2">Votre vote a été pris en compte </h4><h4>'.$row4['nomGroupe_Groupe'].'</h4>
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
        };
    ?>
    </div>
<?php
$content = ob_get_clean();
require './template.php';
?>