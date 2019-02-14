<?php 
$requetestyle = $bd -> prepare("SELECT count(idStyleprincipal_StylePrincipal) AS NBID FROM styleprincipal");
$requetestyle -> execute();
$row = $requetestyle->fetch();
$NBID = $row['NBID'];

    for ($ccount = 1 ; $ccount <= intval($NBID) ; $ccount++ ){
       
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
        $content = ob_get_clean();
        require './template.php';
        ?>
        ?>