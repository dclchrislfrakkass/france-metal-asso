<?php 
$requetestyle = $bd -> prepare("SELECT count(idStyleprincipal_StylePrincipal) AS NBID FROM styleprincipal");
$requetestyle -> execute();
$row = $requetestyle->fetch();
$NBID = $row['NBID'];
echo "<div class='row'>";

for ($ccount = 1 ; $ccount <= intval($NBID) ; $ccount++ ){
    
        // var_dump($req10);
        $requetephoto = $bd->prepare("SELECT * FROM styleprincipal
        WHERE idStyleprincipal_StylePrincipal=:ccount
        ");
        $requetephoto-> execute(array(
            'ccount' => $ccount
        ));
        $row = $requetephoto->fetch();
        
        echo "<div class='col-sm-12 col-md-6 col-lg-4'>";
        echo "<img src='".$row["illustration"]."' style='width:80%;'>";

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
                echo "</div>";
            } else {
                $req = $bd->prepare("SELECT * FROM groupe
                NATURAL JOIN album
                NATURAL JOIN stylesecondaire
                NATURAL JOIN styleprincipal
                NATURAL JOIN a_voté_pour
                WHERE idStyleprincipal_StylePrincipal=:ccount
                GROUP BY nomGroupe_Groupe
                ORDER BY note_Album DESC limit 5");
                $req -> execute(array(
                    'ccount' => $ccount
                ));
                $tcount = 1;
                while (!empty($row = $req->fetch())){
                    echo "<p><strong> TOP ".$tcount."</strong>";
                    echo "<p><strong> Nom du Groupe : </strong>".$row['nomGroupe_Groupe']."</p>";
                    echo "<p><strong> Nom de l'album : </strong>".$row['nomAlbum_Album']."</p>";
                    echo "<p><strong> Nombre de votes : </strong>".$row['note_Album']."</p>"; // remplacer plus tard le vote total par le vote total de sa catégorie
                    echo "<p><strong> Style : </strong>".$row['nomStyleSecondaire_StyleSecondaire']."</p><br>";
                    
                    $tcount ++;
                    // echo "<p><strong> Pseudo des votants : </strong>".$chaine."</p><br>";
                }
                // echo "</div>";
            }
            $requetephoto->closeCursor();
            $req->closeCursor();
            echo "</div>";
        }
        echo "</div>";

        ?>
        