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
<<<<<<< HEAD
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
=======
    echo "<p> Nom du Groupe : ".$row['nomGroupe_Groupe']."</p>";
    echo "<p> Style : ".$row['nomStyleSecondaire_StyleSecondaire']."</p>";
    echo "<p> Catégorie : ".$row['nomStylePrincipal_StylePrincipal']."</p>";
    echo "<p> Nombre de vote : ".$row['note_Album']."</p>";
    echo "<p> Pseudo des votants : ".$row['Pseudo_membre']."</p>";
}
$req ->closeCursor();



// // Requete affichage score votes catégorie STYLE METAL EXTREME:

// $req = $bd->query("SELECT nomGroupe_Groupe, nomStyleSecondaire_StyleSecondaire, nomStylePrincipal_StylePrincipal, note_Album, Pseudo_membre FROM groupe
// NATURAL JOIN album
// NATURAL JOIN stylesecondaire
// NATURAL JOIN styleprincipal
// NATURAL JOIN a_voté_pour
// NATURAL JOIN membre
// WHERE idStyleprincipal_StylePrincipal='1'
// ORDER BY note_Album");

// while ($row = $req->fetch()){
//     echo "<p> Nom du Groupe : ".$row['nomGroupe_Groupe']."</p>";
//     echo "<p> Style : ".$row['nomStyleSecondaire_StyleSecondaire']."</p>";
//     echo "<p> Catégorie : ".$row['nomStylePrincipal_StylePrincipal']."</p>";
//     echo "<p> Nombre de vote : ".$row['note_Album']."</p>";
//     echo "<p> Pseudo des votants : ".$row['Pseudo_membre']."</p>";
// }
// $req ->closeCursor();



// // Requete affichage score votes catégorie STYLE METAL DARK AMBIENT ATMO:

// $req = $bd->query("SELECT nomGroupe_Groupe, nomStyleSecondaire_StyleSecondaire, nomStylePrincipal_StylePrincipal, note_Album, Pseudo_membre FROM groupe
// NATURAL JOIN album
// NATURAL JOIN stylesecondaire
// NATURAL JOIN styleprincipal
// NATURAL JOIN a_voté_pour
// NATURAL JOIN membre
// WHERE idStyleprincipal_StylePrincipal='2'
// ORDER BY note_Album");

// while ($row = $req->fetch()){
//     echo "<p> Nom du Groupe : ".$row['nomGroupe_Groupe']."</p>";
//     echo "<p> Style : ".$row['nomStyleSecondaire_StyleSecondaire']."</p>";
//     echo "<p> Catégorie : ".$row['nomStylePrincipal_StylePrincipal']."</p>";
//     echo "<p> Nombre de vote : ".$row['note_Album']."</p>";
//     echo "<p> Pseudo des votants : ".$row['Pseudo_membre']."</p>";
// }
// $req ->closeCursor();



// // Requete affichage score votes catégorie STYLE HARDCORE PUNK:

// $req = $bd->query("SELECT nomGroupe_Groupe, nomStyleSecondaire_StyleSecondaire, nomStylePrincipal_StylePrincipal, note_Album, Pseudo_membre FROM groupe
// NATURAL JOIN album
// NATURAL JOIN stylesecondaire
// NATURAL JOIN styleprincipal
// NATURAL JOIN a_voté_pour
// NATURAL JOIN membre
// WHERE idStyleprincipal_StylePrincipal='3'
// ORDER BY note_Album");

// while ($row = $req->fetch()){
//     echo "<p> Nom du Groupe : ".$row['nomGroupe_Groupe']."</p>";
//     echo "<p> Style : ".$row['nomStyleSecondaire_StyleSecondaire']."</p>";
//     echo "<p> Catégorie : ".$row['nomStylePrincipal_StylePrincipal']."</p>";
//     echo "<p> Nombre de vote : ".$row['note_Album']."</p>";
//     echo "<p> Pseudo des votants : ".$row['Pseudo_membre']."</p>";
// }
// $req ->closeCursor();



// // Requete affichage score votes catégorie STYLE METAL HARD ROCK:

// $req = $bd->query("SELECT nomGroupe_Groupe, nomStyleSecondaire_StyleSecondaire, nomStylePrincipal_StylePrincipal, note_Album, Pseudo_membre FROM groupe
// NATURAL JOIN album
// NATURAL JOIN stylesecondaire
// NATURAL JOIN styleprincipal
// NATURAL JOIN a_voté_pour
// NATURAL JOIN membre
// WHERE idStyleprincipal_StylePrincipal='4'
// ORDER BY note_Album");

// while ($row = $req->fetch()){
//     echo "<p> Nom du Groupe : ".$row['nomGroupe_Groupe']."</p>";
//     echo "<p> Style : ".$row['nomStyleSecondaire_StyleSecondaire']."</p>";
//     echo "<p> Catégorie : ".$row['nomStylePrincipal_StylePrincipal']."</p>";
//     echo "<p> Nombre de vote : ".$row['note_Album']."</p>";
//     echo "<p> Pseudo des votants : ".$row['Pseudo_membre']."</p>";
// }
// $req ->closeCursor();



// // Requete affichage score votes catégorie STYLE METAL HEAVY TRASH:

// $req = $bd->query("SELECT nomGroupe_Groupe, nomStyleSecondaire_StyleSecondaire, nomStylePrincipal_StylePrincipal, note_Album, Pseudo_membre FROM groupe
// NATURAL JOIN album
// NATURAL JOIN stylesecondaire
// NATURAL JOIN styleprincipal
// NATURAL JOIN a_voté_pour
// NATURAL JOIN membre
// WHERE idStyleprincipal_StylePrincipal='5'
// ORDER BY note_Album");

// while ($row = $req->fetch()){
//     echo "<p> Nom du Groupe : ".$row['nomGroupe_Groupe']."</p>";
//     echo "<p> Style : ".$row['nomStyleSecondaire_StyleSecondaire']."</p>";
//     echo "<p> Catégorie : ".$row['nomStylePrincipal_StylePrincipal']."</p>";
//     echo "<p> Nombre de vote : ".$row['note_Album']."</p>";
//     echo "<p> Pseudo des votants : ".$row['Pseudo_membre']."</p>";
// }
// $req ->closeCursor();



// // Requete affichage score votes catégorie STYLE METAL FUSION:

// $req = $bd->query("SELECT nomGroupe_Groupe, nomStyleSecondaire_StyleSecondaire, nomStylePrincipal_StylePrincipal, note_Album, Pseudo_membre FROM groupe
// NATURAL JOIN album
// NATURAL JOIN stylesecondaire
// NATURAL JOIN styleprincipal
// NATURAL JOIN a_voté_pour
// NATURAL JOIN membre
// WHERE idStyleprincipal_StylePrincipal='6'
// ORDER BY note_Album");

// while ($row = $req->fetch()){
//     echo "<p> Nom du Groupe : ".$row['nomGroupe_Groupe']."</p>";
//     echo "<p> Style : ".$row['nomStyleSecondaire_StyleSecondaire']."</p>";
//     echo "<p> Catégorie : ".$row['nomStylePrincipal_StylePrincipal']."</p>";
//     echo "<p> Nombre de vote : ".$row['note_Album']."</p>";
//     echo "<p> Pseudo des votants : ".$row['Pseudo_membre']."</p>";
// }
// $req ->closeCursor();
>>>>>>> 7ec4ba297c89a9b4b0e01c82570dfb3e4eaea2ca
