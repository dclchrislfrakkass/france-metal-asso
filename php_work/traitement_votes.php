<<<<<<< HEAD
////////////////////////////////////////////////////////////////////////////////  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
<h2> CATEGORIE STYLE METAL EXTREME </h2>
<?php

//Requete catégorie STYLE METAL EXTREME:
$req3 = $bd->query("SELECT * FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
NATURAL JOIN a_voté_pour
WHERE idStyleprincipal_StylePrincipal='1' GROUP BY nomGroupe_Groupe ORDER BY note_Album DESC");
$row = $req3->fetch();
echo "<img src='".$row["illustration"]."' style='width:15%;'>";
if(empty($row['note_Album'])){
    echo 'Aucun vote dans cette catégorie';
} else {
    while ($row = $req3->fetch()){

    echo "<p><strong> Nom du Groupe : </strong>".$row['nomGroupe_Groupe']."</p>";
    echo "<p><strong> Nombre de vote : </strong>".$row['note_Album']." / ".$voteTotal['count(*)']."</p>"; // remplacer plus tard le vote total par le vote total de sa catégorie
    echo "<p><strong> Style : </strong>".$row['nomStyleSecondaire_StyleSecondaire']."</p>";
    echo "<p><strong> Catégorie : </strong>".$row['nomStylePrincipal_StylePrincipal']."</p>";
    echo "<p><strong> Pseudo des votants : </strong>".$chaine."</p><br>";
}
}
$req3->closeCursor();
?>
<hr>
<h2> CATEGORIE STYLE METAL DARK AMBIENT ATMO </h2>
<?php
//Requete catégorie STYLE METAL DARK AMBIENT ATMO:

$req4 = $bd->query("SELECT * FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
NATURAL JOIN a_voté_pour
WHERE idStyleprincipal_StylePrincipal='2' GROUP BY nomGroupe_Groupe ORDER BY note_Album DESC");
    $row2 = $req4->fetch();
    echo "<img src='".$row2["illustration"]."' style='width:15%;'>";
    if(empty($row2['note_Album'])){
        echo 'Aucun vote dans cette catégorie';
    } else {
        while ($row2 = $req4->fetch()){

    echo "<p><strong> Nom du Groupe : </strong>".$row2['nomGroupe_Groupe']."</p>";
    echo "<p><strong> Nombre de vote : </strong>".$row2['note_Album']." / ".$voteTotal['count(*)']."</p>"; // remplacer plus tard le vote total par le vote total de sa catégorie
    echo "<p><strong> Style : </strong>".$row2['nomStyleSecondaire_StyleSecondaire']."</p>";
    echo "<p><strong> Catégorie : </strong>".$row2['nomStylePrincipal_StylePrincipal']."</p>";
    echo "<p><strong> Pseudo des votants : </strong>".$chaine."</p><br>";

    }
}
$req4->closeCursor();
?>
<hr>
<h2> CATEGORIE STYLE HARDCORE PUNK </h2>
<?php 
//Requete catégorie STYLE HARDCORE PUNK:

$req5 = $bd->query("SELECT * FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
NATURAL JOIN a_voté_pour
WHERE idStyleprincipal_StylePrincipal='3' GROUP BY nomGroupe_Groupe ORDER BY note_Album DESC");
    $row3 = $req5->fetch();
    echo "<img src='".$row3["illustration"]."' style='width:15%;'>";
    if(empty($row3['note_Album'])){
        echo 'Aucun vote dans cette catégorie';
    } else {
        while ($row3 = $req5->fetch()){

    echo "<p><strong> Nom du Groupe : </strong>".$row3['nomGroupe_Groupe']."</p>";
    echo "<p><strong> Nombre de vote : </strong>".$row3['note_Album']." / ".$voteTotal['count(*)']."</p>"; // remplacer plus tard le vote total par le vote total de sa catégorie
    echo "<p><strong> Style : </strong>".$row3['nomStyleSecondaire_StyleSecondaire']."</p>";
    echo "<p><strong> Catégorie : </strong>".$row3['nomStylePrincipal_StylePrincipal']."</p>";
    echo "<p><strong> Pseudo des votants : </strong>".$chaine."</p><br>";

    }
}
$req5->closeCursor();
?>


<hr>
<h2> CATEGORIE STYLE METAL HARD ROCK </h2>

<?php

//Requete catégorie STYLE METAL HARD ROCK:

$req6 = $bd->query("SELECT * FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
NATURAL JOIN a_voté_pour
WHERE idStyleprincipal_StylePrincipal='4' GROUP BY nomGroupe_Groupe ORDER BY note_Album DESC");
    $row4 = $req6->fetch();
    echo "<img src='".$row4["illustration"]."' style='width:15%;'>";
    if(empty($row4['note_Album'])){
    echo 'Aucun vote dans cette catégorie';
} else {
    while ($row4 = $req6->fetch()){
    echo "<p><strong> Nom du Groupe : </strong>".$row4['nomGroupe_Groupe']."</p>";
    echo "<p><strong> Nombre de vote : </strong>".$row4['note_Album']." / ".$voteTotal['count(*)']."</p>"; // remplacer plus tard le vote total par le vote total de sa catégorie
    echo "<p><strong> Style : </strong>".$row4['nomStyleSecondaire_StyleSecondaire']."</p>";
    echo "<p><strong> Catégorie : </strong>".$row4['nomStylePrincipal_StylePrincipal']."</p>";
    echo "<p><strong> Pseudo des votants : </strong>".$chaine."</p><br>";
    }
}
$req6->closeCursor();

?>


<hr>
<h2> CATEGORIE STYLE METAL HEAVY TRASH </h2>

<?php

//Requete catégorie STYLE METAL HEAVY TRASH:

$req7 = $bd->query("SELECT * FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
NATURAL JOIN a_voté_pour
WHERE idStyleprincipal_StylePrincipal='5' GROUP BY nomGroupe_Groupe ORDER BY note_Album DESC");
$row5 = $req7->fetch();
echo "<img src='".$row5["illustration"]."' style='width:15%;'>";
if(empty($row5['note_Album'])){
    echo 'Aucun vote dans cette catégorie';
} else {
    while ($row5 = $req7->fetch()){
    echo "<p><strong> Nom du Groupe : </strong>".$row5['nomGroupe_Groupe']."</p>";
    echo "<p><strong> Nombre de vote : </strong>".$row5['note_Album']." / ".$voteTotal['count(*)']."</p>"; // remplacer plus tard le vote total par le vote total de sa catégorie
    echo "<p><strong> Style : </strong>".$row5['nomStyleSecondaire_StyleSecondaire']."</p>";
    echo "<p><strong> Catégorie : </strong>".$row5['nomStylePrincipal_StylePrincipal']."</p>";
    echo "<p><strong> Pseudo des votants : </strong>".$chaine."</p><br>";

    }
}
$req7->closeCursor();

?>


<hr>
<h2> CATEGORIE STYLE METAL FUSION </h2>

<?php
//Requete catégorie STYLE METAL FUSION:

$req8 = $bd->query("SELECT * FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
NATURAL JOIN a_voté_pour
WHERE idStyleprincipal_StylePrincipal='6' GROUP BY nomGroupe_Groupe ORDER BY note_Album DESC");
$row6 = $req8->fetch();
echo "<img src='".$row6["illustration"]."' style='width:15%;'>";
if(empty($row6['note_Album'])){
    echo 'Aucun vote dans cette catégorie';
} else {
    while ($row6 = $req8->fetch()){
    
    echo "<p><strong> Nom du Groupe : </strong>".$row6['nomGroupe_Groupe']."</p>";
    echo "<p><strong> Nombre de vote : </strong>".$row6['note_Album']." / ".$voteTotal['count(*)']."</p>"; // remplacer plus tard le vote total par le vote total de sa catégorie
    echo "<p><strong> Style : </strong>".$row6['nomStyleSecondaire_StyleSecondaire']."</p>";
    echo "<p><strong> Catégorie : </strong>".$row6['nomStylePrincipal_StylePrincipal']."</p>";
    echo "<p><strong> Pseudo des votants : </strong>".$chaine."</p><br>";
    echo "<hr>";
}
}
$req8->closeCursor();
=======

 <?php 
// Requete catégorie STYLE HARDCORE PUNK:
$requetestyle = $bd -> prepare("SELECT count(idStyleprincipal_StylePrincipal) AS NBID FROM styleprincipal");
$requetestyle -> execute();
$row = $requetestyle->fetch();
$NBID = $row['NBID'];

    for ($ccount = 1 ; $ccount <= intval($NBID) ; $ccount++ ){
       
        // var_dump($req10);
        $requetephoto = $bd->prepare("SELECT * FROM styleprincipal
        WHERE idStyleprincipal_StylePrincipal=:ccount
        ");
        $requetephoto-> execute(array(
            'ccount' => $ccount
        ));
        $row = $requetephoto->fetch();
        echo "<img src='".$row["illustration"]."' style='width:15%;'>";

        $req = $bd->prepare("SELECT * FROM groupe
        NATURAL JOIN album
        NATURAL JOIN stylesecondaire
        NATURAL JOIN styleprincipal
        NATURAL JOIN a_voté_pour
        WHERE idStyleprincipal_StylePrincipal=:ccount
        GROUP BY nomGroupe_Groupe
        ORDER BY note_Album DESC");
        $req -> execute(array(
            'ccount' => $ccount
        ));
        $row = $req->fetch();

        if(empty($row['note_Album'])){
                echo '<p>Aucun vote dans cette catégorie</p>';
            } else {
                $req = $bd->prepare("SELECT * FROM groupe
                NATURAL JOIN album
                NATURAL JOIN stylesecondaire
                NATURAL JOIN styleprincipal
                NATURAL JOIN a_voté_pour
                WHERE idStyleprincipal_StylePrincipal=:ccount
                GROUP BY nomGroupe_Groupe
                ORDER BY note_Album DESC");
                $req -> execute(array(
                    'ccount' => $ccount
                ));
                while (!empty($row = $req->fetch())){
                    echo "<p><strong> Nom du Groupe : </strong>".$row['nomGroupe_Groupe']."</p>";
                    // echo "<p><strong> Nombre de vote : </strong>".$row3['note_Album']." / ".$voteTotal['count(*)']."</p>"; // remplacer plus tard le vote total par le vote total de sa catégorie
                    echo "<p><strong> Style : </strong>".$row['nomStyleSecondaire_StyleSecondaire']."</p><br>";
                    // echo "<p><strong> Pseudo des votants : </strong>".$chaine."</p><br>";
                }
            }
        $requetephoto->closeCursor();
        $req->closeCursor();
        }
        ?>
  
>>>>>>> systemeVote
