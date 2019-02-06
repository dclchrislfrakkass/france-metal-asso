<?php
include '../php/pdo.php';

// Requete catégorie STYLE METAL EXTREME:

<<<<<<< HEAD:php_work/affichage_groupe_categorie.php
$req = $bdd->query("SELECT nomGroupe_Groupe, nomStyleSecondaire_StyleSecondaire FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
WHERE idStyleprincipal_StylePrincipal='1' ");

while ($row1 = $req->fetch()){
    echo $row1['nomGroupe_Groupe'];
     
};

$req->closeCursor();



=======
$req=$bd->query("SELECT nomStylePrincipal_StylePrincipal, illustration FROM styleprincipal");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Card Tittle</title>
</head>
<body>

<!-- Card -->
    <div class="contenair">
        <div class="row">
        <?php
        while ($row = $req->fetch()){
        ?>    
                <div class="card col-sm-12 col-md-6 col-lg-4">
                    <!-- Card image -->
                    <div class="view overlay">
                        <img class="card-img-top" src="<?php echo $row['illustration'];?>" alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                <!-- Card content -->
                    <div class="card-body">
                        <!-- Title -->
                        <h4 class="card-title"><?php echo $row['nomStylePrincipal_StylePrincipal'];?></h4>
                        <!-- Text -->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <!-- Button -->
                        <a href="#" class="btn btn-primary">Button</a>
                    </div>
                </div>
        <?php
        }
        $req ->closeCursor();
        ?>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>


<!-- 
>>>>>>> dev:php_work/affichage_categorie.php
// Requete catégorie STYLE METAL DARK AMBIENT ATMO:

$req = $bdd->query("SELECT nomGroupe_Groupe, nomStyleSecondaire_StyleSecondaire FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
WHERE idStyleprincipal_StylePrincipal='2' ");

while ($row = $req->fetch()){
     
}

$req->closeCursor();



// Requete catégorie STYLE HARDCORE PUNK:

$req = $bdd->query("SELECT nomGroupe_Groupe, nomStyleSecondaire_StyleSecondaire FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
WHERE idStyleprincipal_StylePrincipal='3' ");

while ($row = $req->fetch()){
     
}

$req ->closeCursor();



// Requete catégorie STYLE METAL HARD ROCK:

$req = $bdd->query("SELECT nomGroupe_Groupe, nomStyleSecondaire_StyleSecondaire FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
WHERE idStyleprincipal_StylePrincipal='4' ");

while ($row = $req->fetch()){
     
}

$req ->closeCursor();



// Requete catégorie STYLE METAL HEAVY TRASH:

$req = $bdd->query("SELECT nomGroupe_Groupe, nomStyleSecondaire_StyleSecondaire FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
WHERE idStyleprincipal_StylePrincipal='5' ");

while ($row = $req->fetch()){
     
}

$req ->closeCursor();



// Requete catégorie STYLE METAL FUSION:

$req = $bdd->query("SELECT nomGroupe_Groupe, nomStyleSecondaire_StyleSecondaire FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
WHERE idStyleprincipal_StylePrincipal='5' ");

while ($row = $req->fetch()){
     
}

$req ->closeCursor(); -->