<?php /* Template Name: categories */ ?>
<?php get_header();
// Appel connexion a la base
require '../php/pdo.php';
$req = $bd ->prepare("SELECT * FROM styleprincipal");
$req -> execute();

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
            WHERE idStylePrincipal_StylePrincipal = :idstyle");
            $req2->execute(array(
                'idstyle' => $idstyle
            ));
            while ($row2 = $req2->fetch()){
                $chaine = $row2['nomStyleSecondaire_StyleSecondaire']." ".$chaine;
            }
            ?>    
            <div class="card col-sm-12 col-md-5 col-xl-3 m-1"> 
                <!-- Card image -->
                <div class="view overlay">
                    <a href="index.php/groupes/?nom=<?php echo $nomStyle;?>"><img class="card-img-top" src="<?php echo $row['illustration'];?>" alt="Card image cap"></a>
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
                    <a href="index.php/groupes/?nom=<?php echo $nomStyle;?>" class="bouton_categorie btn btn-danger w-100">Entrer dans cette catégorie</a>
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