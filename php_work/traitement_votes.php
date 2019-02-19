<?php 
$requetestyle = $bd -> prepare("SELECT count(idStyleprincipal_StylePrincipal) AS NBID FROM styleprincipal");
$requetestyle -> execute();
$row = $requetestyle->fetch();
$NBID = $row['NBID'];
echo "<div class='row w-100 flex-column flex-lg-row align-items-center'>";

    for ($ccount = 1 ; $ccount <= intval($NBID) ; $ccount++ ){
       
        $requetephoto = $bd->prepare("SELECT * FROM styleprincipal
        WHERE idStyleprincipal_StylePrincipal=:ccount");
        $requetephoto-> execute(array(
            'ccount' => $ccount
        ));
        $row = $requetephoto->fetch();
        ?>
        <div class="col-sm-12 col-lg-6 col-xl-4 d-flex flex-column align-items-center">
            <img src='<?php echo $row["illustration"]; ?>' class="mt-5" style='width:70%'>
        <?php
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

        if(empty($row['note_Album'])){?>
                <p>Aucun vote dans cette catégorie</p>
                </div>
                <?php
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
                while (!empty($row = $req->fetch())){?>
                    <div class="col-12">
                        <div class="row d-flex flex-column">
                            <p class="mt-4 mx-auto"><span class="font-weight-bold text-danger"> TOP <?php echo $tcount; ?></span>
                            <div class="d-flex text-left">
                                <p class="col-5 p-0 m-0 font-weight-bold p-0">Nom du groupe</p>
                                <p class="col-1 p-0 m-0">:</p>
                                <p class="col-6 p-0 m-0 text-primary"><?php echo $row['nomGroupe_Groupe']; ?></p>
                            </div>
                            <div class="d-flex">
                                <p class="col-5 p-0 m-0 font-weight-bold">Nom de l'album </p>
                                <p class="col-1 p-0 m-0">:</p>
                                <p class="col-6 p-0 m-0 text-primary"><?php echo $row['nomAlbum_Album']; ?></p>
                            </div>
                            <div class="d-flex">
                                <p class="col-5 p-0 m-0 font-weight-bold">Nombre de votes</p>
                                <p class="col-1 p-0 m-0">:</p>
                                <p class="col-6 p-0 m-0 text-primary"><?php echo $row['note_Album']; ?></p>
                            </div>
                            <div class="d-flex">
                                <p class="col-5 p-0 m-0 font-weight-bold">Style</p>
                                <p class="col-1 p-0 m-0">:</p>
                                <p class="col-6 p-0 m-0 text-primary"><?php echo $row['nomStyleSecondaire_StyleSecondaire']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                    $tcount ++;
                }
            }
            $requetephoto->closeCursor();
            $req->closeCursor();
            echo "</div>";
    }
        echo "</div>";
?>   