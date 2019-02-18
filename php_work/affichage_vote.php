<?php
// Appel conexion a la base
require '../php/pdo.php';
$title = 'Résultat Catégories';
ob_start();
?>

<?php 
$req7 = $bd->query("SELECT count(*) FROM a_voté_pour");
$voteTotal = $req7->fetch();
?><h1></h1><h1 class="text-center">Statistiques</h1>
<?php
echo "<div class='row align-items-end '>";
echo "<div class='col-sm-12 col-md-6 col-lg-4 '>";
echo "<h3 class='text-center'> Par catégories</h3>";
include 'graph2.php';
echo "</div>";
echo "<div class='col-sm-12 col-md-6 col-lg-4'>";
echo "<h3 class='text-center'> Top 10 des groupes</h3>";
include 'graph1.php';
echo "</div>";
echo "<div class='col-sm-12 col-md-6 col-lg-4'>";
echo "<h3 class='text-center'> Top 10 par styles</h3>";
include 'graph3.php';
echo "</div>";
echo "</div>";












?>
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
    ));
    // while ($row2 = $req2->fetch()){
    //     $chaine = $row['display_name'].", ".$chaine;
    //     $chaine2 = $row2['display_name']." ".$chaine2;
    
    // }
    echo "<div class='col-sm-12 col-md-6 col-lg-4'>";
    echo "<img class='mb-4'src='".$row["pochette"]."' style='width:90%;'>";
    echo "<p><strong> Nom du Groupe : </strong>".$row['nomGroupe_Groupe']."</p>";
    // echo "<p><strong> id album : </strong>".$row['idAlbum_Album']."</p>";
    echo "<p><strong> Nom de l'album : </strong>".$row['nomAlbum_Album']."</p>";
    echo "<p><strong> Nombre de vote : </strong>".$row['note_Album']."</p>";
    // echo "<p><strong> id  des votants : </strong>".$chaine2."</p>";
    echo "<p><strong> Style : </strong>".$row['nomStyleSecondaire_StyleSecondaire']."</p>";
    echo "<p><strong> Catégorie : </strong>".$row['nomStylePrincipal_StylePrincipal']."</p>";
    echo "</div>";
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



