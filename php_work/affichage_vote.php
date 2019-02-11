<?php
// Appel conexion a la base
require '../php/pdo.php';
// Requete affichage score vote total:

$req = $bd->query("SELECT * FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
NATURAL JOIN a_voté_pour
GROUP BY nomGroupe_Groupe
ORDER BY note_Album DESC");

while ($row = $req->fetch()){
    $chaine='';
    $chaine2= '';
    $req2 = $bd->prepare("SELECT * FROM groupe
    NATURAL JOIN album
    NATURAL JOIN a_voté_pour
    NATURAL JOIN membre
    WHERE idAlbum_Album = :idalbum
    ORDER BY note_Album DESC
    LIMIT 3");
    $req2->execute(array(
        'idalbum' => $row['idAlbum_Album']
    ));
    while ($row2 = $req2->fetch()){
        // var_dump($req2);
        $chaine = $row2['Pseudo_membre']." ".$chaine;
        $chaine2 = $row2['idMembre_membre']." ".$chaine2;

    }

    echo "<p> Nom du Groupe : ".$row['nomGroupe_Groupe']."</p>";
    echo "<p> id album: ".$row['idAlbum_Album']."</p>";
    echo "<p> id membre : ".$chaine2."</p>";
    echo "<p> Style : ".$row['nomStyleSecondaire_StyleSecondaire']."</p>";
    echo "<p> Catégorie : ".$row['nomStylePrincipal_StylePrincipal']."</p>";
    echo "<p> Nombre de vote : ".$row['note_Album']."</p>";
    echo "<p> Pseudo des votants : ".$chaine."</p><br>";

}
$req ->closeCursor();
