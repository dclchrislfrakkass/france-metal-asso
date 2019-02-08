<?php
// Appel conexion a la base
require '../php/pdo.php';
// Requete catégorie STYLE METAL EXTREME:

$req=$bd->query("SELECT nomStylePrincipal_StylePrincipal, illustration FROM styleprincipal");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Catégories</title>
</head>
<body>
<!-- Card -->
    <div class="contenair">
        <div class="row justify-content-md-center">
        <?php
        $chaine = '';
        while ($row = $req->fetch()){
            $nomStyle = $row['nomStylePrincipal_StylePrincipal'];
            $req2 = $bd->prepare("SELECT nomStyleSecondaire_StyleSecondaire FROM stylesecondaire
            NATURAL JOIN styleprincipal
            WHERE nomStylePrincipal_StylePrincipal = :test");
            $req2->execute(array(
                'test' => $nomStyle
            ));
            while ($row2 = $req2->fetch()){
                $chaine = $row2['nomStyleSecondaire_StyleSecondaire']." ".$chaine;
            }
            ?>    
            <div class="card col-sm-12 col-md-5 col-xl-3 m-1"> 
                <!-- Card image -->
                <div class="view overlay">
                    <a href="./affichage_des_groupes.php?nom=<?php echo $nomStyle;?>"><img class="card-img-top" src="<?php echo $row['illustration'];?>" alt="Card image cap"></a>
                    
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
            <!-- Card content -->
                <div class="card-body cadre_info_categorie text-center">
                    <!-- Title -->
                    <h5 class="card-title"><?php echo $nomStyle;?></h5>
                    <!-- Text -->
                    <p class="card-text"><?php echo substr($chaine,0, 75). '...' ;?></p>
                    <!-- Button -->
                    <a href="./affichage_des_groupes.php?nom=<?php echo $nomStyle;?>" class="bouton_categorie btn btn-danger w-100">Entrer dans cette catégorie</a>
                </div>  
            </div>
        <?php
        }
        $req ->closeCursor();
        $req2 ->closeCursor();
        ?>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>