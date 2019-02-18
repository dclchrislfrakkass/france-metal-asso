<?php /* Template Name: votes */ ?>
<?php
// Appel connexion a la base
require 'pdo.php';
$title = 'Votes';
ob_start();
?>
<header>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="./categories/">Retour aux Catégories</a>
            </li>
        </ul>
    </nav>
</header>
<body class="position-absolute text-center mt-sm-3 mt-5 pt-2">
    <div class="mt-5 mt-sm-none contenair position-relative"></div>  <!-- div intercalaire -->
        <?php
        ?>
        <form method="POST" action="/injectvotes/">
            <?php
            if(empty($_POST["idAlbum"])) {
                echo '<h3>Vous n\'avez pas sélectionné de groupes</h3>';
            } elseif (!empty($_POST["idAlbum"])){
                echo '<h3 class="mb-3">Vous avez voté pour:</h3>';
                ?>
                <div class="row">
                <?php
                $compteur=1;
                foreach($_POST["idAlbum"] as $check){ 
                    $req=$bd->prepare("SELECT nomGroupe_Groupe, pochette, idAlbum_Album FROM groupe
                    NATURAL JOIN album
                    WHERE idAlbum_Album=:idAlbum ");
                    $req->execute(array(
                        'idAlbum' => $check
                    ));
                    $row = $req->fetch();
                    echo '<div class="col12 col-md-4">
                    <h4>'.$row['nomGroupe_Groupe'].'</h4>
                    <img src="'.$row['pochette'].'"class="mb-2" style="width:95px">
                    <input type="hidden" name="idAlbum'.$compteur.'" value="'.$row['idAlbum_Album'].'">
                    </div>';
                    $compteur++;
                }
                ?>
                </div>
                <?php
            } 
            ?>
        
        <button type="submit" class="btn btn-danger btn-md mt-3 mx-auto">Validez vos choix</button>
        </form>
        <?php
$content = ob_get_clean();
require 'template.php';