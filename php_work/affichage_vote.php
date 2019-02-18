<?php
// Appel conexion a la base
require '../php/pdo.php';
$title = 'Résultat Catégories';
ob_start();
?>

<?php 
$req7 = $bd->query("SELECT count(*) FROM a_voté_pour");
$voteTotal = $req7->fetch();
?>

<h1 class="text-center">Les 3 groupes ayant le plus de votes</h1>
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
    while ($row2 = $req2->fetch()){
        $chaine = $row2['Pseudo_membre'].", ".$chaine;
        $chaine2 = $row2['idMembre_membre']." ".$chaine2;
    }
    echo "<img src='".$row["illustration"]."' style='width:40%;'>";
    echo "<p><strong> Nom du Groupe : </strong>".$row['nomGroupe_Groupe']."</p>";
    echo "<p><strong> id album : </strong>".$row['idAlbum_Album']."</p>";
    echo "<p><strong> Nombre de vote : </strong>".$row['note_Album']." / ".$voteTotal['count(*)']."</p>";
    // echo "<p><strong> id  des votants : </strong>".$chaine2."</p>";
    echo "<p><strong> Style : </strong>".$row['nomStyleSecondaire_StyleSecondaire']."</p>";
    echo "<p><strong> Catégorie : </strong>".$row['nomStylePrincipal_StylePrincipal']."</p>";
    echo "<p><strong> Pseudo des votants : </strong>".$chaine."</p><br>";
}
?>
</div>
<hr style="border: 10px solid white";>
<?php
$req ->closeCursor();
$req7 ->closeCursor();

include './traitement_votes.php';
