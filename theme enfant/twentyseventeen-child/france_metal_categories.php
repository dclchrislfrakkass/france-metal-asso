<?php /* Template Name: categories */ ?>
<?php get_header();
<<<<<<< HEAD
require 'pdo.php';
$req = $bd ->prepare("SELECT * FROM styleprincipal");
$req -> execute();
=======

$req = $bd ->prepare("SELECT * FROM styleprincipal");
$req -> execute();

>>>>>>> 18f88fb94314677093b01ebd91236be3fb3022e3
$title = 'Categorie';
ob_start();
?>
<body>
<!-- Card -->
    <div class="contenair">
        <div class="row justify-content-md-center">
        <?php
        $chaine = '';
        while ($row = $req->fetch()){
            $idstyle = $row['idStylePrincipal_StylePrincipal'];
            $nomStyle = $row['nomStylePrincipal_StylePrincipal'];
            $req2 = $bd->prepare("SELECT nomStyleSecondaire_StyleSecondaire FROM stylesecondaire
            NATURAL JOIN styleprincipal
<<<<<<< HEAD
            WHERE idStylePrincipal_StylePrincipal = :idstyle");
=======
            WHERE nomStylePrincipal_StylePrincipal = :idstyle");
>>>>>>> 18f88fb94314677093b01ebd91236be3fb3022e3
            $req2->execute(array(
                'idstyle' => $idstyle
            ));
            while ($row2 = $req2->fetch()){
                $chaine = $row2['nomStyleSecondaire_StyleSecondaire']." ".$chaine;
            }
            ?>    
            <div class="card col-sm-12 col-md-6 col-xl-4"> 
                <!-- Card image -->
                <div class="view overlay">
                    <a href="index.php/groupes/?id=<?php echo $idstyle;?>"><img class="card-img-top" src="<?php echo $row['illustration'];?>" alt="Card image cap"></a>
                    <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
            <!-- Card content -->
                <div class="card-body cadre_info_categorie text-center">
                    <!-- Title -->
                    <h5 class="card-title"><?php echo $nomStyle;?></h5>
                    <!-- Text -->
                    <p class="card-text"><?php echo substr($chaine,0, 90). '...' ;?></p>
                    <!-- Button -->
                    <a href="index.php/groupes/?id=<?php echo $idstyle;?>" class="bouton_categorie btn btn-danger w-100">Entrer dans cette catégorie</a>
                </div>  
            </div>
        <?php
        }
        $req ->closeCursor();
        $req2 ->closeCursor();
        ?>
        </div>
    </div>

<?php
$content = ob_get_clean();
require 'template.php';
?>