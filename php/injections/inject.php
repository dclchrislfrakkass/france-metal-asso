<?php
// Connexion à la bdd
require '../pdo.php';
////////////////////////////////
//REMPLISSAGE DE LA TABLE ALBUM
////////////////////////////////

// Lecture du fichier CSV
$fichier = 'Style_metal_fusion.csv';          //à compléter avec celui que l'on veut injecter

$csv = new SplFileObject($fichier);
$csv->setFlags(SplFileObject::READ_CSV);
$csv->setCsvControl(';');

foreach($csv as $ligne){
    if ($ligne[0]!=NULL){
        $styleSec = $ligne[0];
        $nomGroupe = $ligne[1];
        $nomAlbum = $ligne[2];
        $sortie = $ligne[3];
        if(!empty($lienTitre)){
            $lienTitre = $ligne[4];
        } else {
            $lienTitre = '';
        }
        if(!empty($lienTitre2)){
            $lienTitre2 = $ligne[5];
        } else {
            $lienTitre2 = '';
        }
        if(!empty($lienTitre3)){
            $lienTitre3 = $ligne[6];
        } else {
            $lienTitre3 = '';
        }
        if(!empty($label)){
            $label = $ligne[7];
        } else {
            $label = '';
        }
        $clipTitre = $ligne[8];

        if(!empty($clipTitre2)){
            $clipTitre2 = $ligne[9];
        } else {
            $clipTitre2 = '';
        }
        if(!empty($lienGroupe)){
            $lienGroupe = $ligne[10];
        } else {
            $lienGroupe = '';
        }
        if(!empty($mailGroupe)){
            $mailGroupe = $ligne[11];
        } else {
            $mailGroupe = '';
        }
        if(!empty($origine)){
            $origine = $ligne[12];
        } else {
            $origine = '';
        }
        if(!empty($telGroupe)){
            $telGroupe= $ligne[13];
        } else {
            $telGroupe = '';
        }
        if(!empty($pochette)){
            $pochette = $ligne[14];
        } else {
            $pochette = '';
        }
        if(!empty($photoGroupe)){
            $photoGroupe = $ligne[15];
        } else {
            $photoGroupe = '';
        }
        var_dump($photoGroupe);
        $req=$bd->prepare("SELECT * FROM groupe WHERE nomGroupe_Groupe = :nomGroupe");
        $req->execute(array(
            'nomGroupe' => $nomGroupe
        ));
        if ($req){
            $requete_pdo = $bd->prepare("set FOREIGN_KEY_CHECKS=0");
            $requete_pdo->execute();
            // update table groupe
            $query = $bd->prepare("UPDATE groupe SET lien_Groupe=:lienGroupe, mail_Groupe=:mailGroupe, telephone_Groupe=:telGroupe, photoGroupe=:photoGroupe WHERE nomGroupe_Groupe=:nomGroupe");
            $query->execute(array(
                'nomGroupe'=> $nomGroupe,
                'lienGroupe' => $lienGroupe,
                'mailGroupe' => $mailGroupe,
                'telGroupe' => $telGroupe,
                'photoGroupe' => $photoGroupe
            ));
            $query->closeCursor();
            // update table titre
            $query = $bd->prepare("UPDATE titre SET clip_Titre=:clipTitre, clip_Titre2=:clipTitre2, lienEcouteTitre_Titre=:lienTitre, lienEcouteTitre_Titre2=:lienTitre2, lienEcouteTitre_Titre3=:lienTitre3 NATURAL JOIN album NATURAL JOIN groupe WHERE nomGroupe_Groupe=:nomGroupe");
            $query->execute(array(
                'clipTitre'=> $clipTitre,
                'clipTitre2'=> $clipTitre2,
                'lienTitre' => $lienTitre,
                'lienTitre2' => $lienTitre2,
                'lienTitre3' => $lienTitre3,
                'nomGroupe' => $nomGroupe
            ));
            $query->closeCursor();
            // update table album
            $query = $bd->prepare("UPDATE album SET nomAlbum_Album=:nomAlbum, dateSortie_Album=:sortie, label_Album=:nomAlbum, pochette=:pochette NATURAL JOIN groupe WHERE nomGroupe_Groupe=:nomGroupe");
            $query->execute(array(
                'label' => $label,
                'nomAlbum'=>$nomAlbum,
                'sortie'=> $sortie,
                'pochette' => $pochette,
                'nomGroupe' => $nomGroupe
            ));
            $query->closeCursor();
            // Update table album
            $query = $bd->prepare("SELECT idGroupe_Groupe from groupe where nomGroupe_Groupe = :nomGroupe");
            $query->execute(array(
                'nomGroupe'=> $nomGroupe
            ));
            while ($donnees = $query->fetch()){
            $idGroupe = $donnees['idGroupe_Groupe'];
            }
            $query->closeCursor();
            //  a refaire demain
            $query = $bd->prepare("SELECT idStyleSecondaire_StyleSecondaire from stylesecondaire where nomStyleSecondaire_StyleSecondaire = :styleSec");
            $query->execute(array(
                'styleSec'=> $styleSec
            ));
            while ($donnees = $query->fetch()){
            $idstyle = $donnees['idStyleSecondaire_StyleSecondaire'];
            }
            $query->closeCursor();
            $query2 = $bd->prepare("UPDATE album SET idStyleSecondaire_StyleSecondaire=:idStyle , idGroupe_Groupe=:idGroupe where nomAlbum_Album = :nomAlbum");
            $query2->execute(array(
                'idStyle' => $idstyle,
                'nomAlbum' => $nomAlbum,
                'idGroupe' => $idGroupe
            ));
            
            $query->closeCursor();
            $query2->closeCursor();
            // Update table titre
            $query = $bd->prepare("SELECT idAlbum_Album from album where nomAlbum_Album = :nomAlbum");
            $query->execute(array(
                'nomAlbum'=> $nomAlbum
            ));
            while ($donnees = $query->fetch()){
                $idAlbum = $donnees['idAlbum_Album'];
                $query2 = $bd->prepare("UPDATE titre SET idAlbum_Album =:idAlbum where clip_Titre = :clipTitre");
                $query2->execute(array(
                    'idAlbum' => $idAlbum,
                    'clipTitre' => $clipTitre
                ));
                $query->closeCursor();
                $query2->closeCursor();
                $requete_pdo->closeCursor();
            }
        } else{
            // pour enlever la contrainte de clé étrangère
            $requete_pdo = $bd->prepare("set FOREIGN_KEY_CHECKS=0");
            $requete_pdo->execute();
            // Remplissage table groupe
            $query = $bd->prepare("INSERT INTO groupe (nomGroupe_Groupe, lien_Groupe, mail_Groupe, telephone_Groupe, photoGroupe) VALUES (:nomGroup, :lienGroupe, :mailGroupe, :telGroupe, :photoGroupe)");
            $query->execute(array(
                'nomGroup'=> $nomGroup,
                'lienGroupe' => $lienGroupe,
                'mailGroupe' => $mailGroupe,
                'telGroupe' => $telGroupe,
                'photoGroupe' => $photoGroupe
            ));
            $query->closeCursor();
            // Remplissage table titre
            $query = $bd->prepare("INSERT INTO titre (clip_Titre, clip_Titre2, lienEcouteTitre_Titre, lienEcouteTitre_Titre2, lienEcouteTitre_Titre3) VALUES (:clipTitre, :clipTitre2, :lienTitre, :lienTitre2, :lienTitre3)");
            $query->execute(array(
                'clipTitre'=> $clipTitre,
                'clipTitre2'=> $clipTitre2,
                'lienTitre' => $lienTitre,
                'lienTitre2' => $lienTitre2,
                'lienTitre3' => $lienTitre3
            ));
            $query->closeCursor();
            // Remplissage table album
            $query = $bd->prepare("INSERT INTO album (nomAlbum_Album, dateSortie_Album, label_Album, pochette) VALUES (:nomAlbum, :sortie, :label, :pochette)");
            $query->execute(array(
                'label' => $label,
                'nomAlbum'=>$nomAlbum,
                'sortie'=> $sortie,
                'pochette' => $pochette
            ));
            $query->closeCursor();
            // Update table album
            $query = $bd->prepare("UPDATE album SET idStyleSecondaire_StyleSecondaire=:idStyle , idGroupe_Groupe=:idgroup where nomAlbum_Album = :nomAlbum");
            $query->execute(array(
                'idStyle' => $idStyle,
                'nomAlbum' => $nomAlbum,
                'idgroup' => $idgroup
            ));
            $query->closeCursor();
            // Update table titre
            $query = $bd->prepare("SELECT idAlbum_Album from album where nomAlbum_Album = :nomAlbum");
            $query->execute(array(
                'nomAlbum'=> $nomAlbum
            ));
            $query2 = $bd->prepare("UPDATE titre SET idAlbum_Album =:idAlbum where clip_Titre = :clipTitre");
            $query2->execute(array(
                'idAlbum' => $idAlbum,
                'clipTitre' => $clipTitre
            ));
            $query->closeCursor();
            $query2->closeCursor();
            $requete_pdo->closeCursor();
        }
        $req->closeCursor();
    }
}
