<?php
// Connexion à la bdd
require '../php/pdo.php';
////////////////////////////////
//REMPLISSAGE DE LA TABLE ALBUM
////////////////////////////////

// Lecture du fichier CSV
$fichier = '.csv';          //à compléter avec celui que l'on veut injecter

$csv = new SplFileObject($fichier);
$csv->setFlags(SplFileObject::READ_CSV);
$csv->setCsvControl('|');
$ligne = fgets($fp,4096);
foreach($csv as $ligne){
    $styleSec = $ligne[0];
    $nomGroupe = $ligne[1];
    $nomAlbum = $ligne[2];
    $sortie = $ligne[3];
    $lienTitre = $ligne[4];
    $lienTitre2 = $ligne[5];
    $lienTitre3 = $ligne[6];
    $label = $ligne[7];
    $clipTitre = $ligne[8];
    $clipTitre2 = $ligne[9];
    $lienGroupe = $ligne[10];
    $mailGroupe = $ligne[11];
    $origine = $ligne[12];
    $telGroupe = $ligne[13];
    $pochette = $ligne[14];
    $photoGroupe = $ligne[15];

    $req -> $bd->prepare("SELECT * FROM groupe WHERE nomGroupe_Groupe = :nomGroupe");
    $req-> execute(array(
        'nomGroupe_Groupe' => $nomGroupe
    ));
    if ($req){
        $requete_pdo = $bd->prepare("set FOREIGN_KEY_CHECKS=0");
        $requete_pdo->execute();
        // update table groupe
        $query = $bd->prepare("UPDATE groupe SET lien_Groupe=:lienGroupe, mail_Groupe:=mailGroupe, telephone_Groupe=:telGroupe, photoGroupe=:photoGroupe WHERE nomGroupe_Groupe=:nomGroup");
        $query->execute(array(
            'nomGroup'=> $nomGroup,
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
        $query = $bd->prepare("UPDATE album SET nomAlbum_Album=:nomAlbum, dateSortie_Album=:sortie, label_Album=:nomAlbum, pochette=:pochette NATURAL JOIN groupe WHERE nomGroupe_Groupe=:nom groupe");
        $query->execute(array(
            'label' => $label,
            'nomAlbum'=>$nomAlbum,
            'sortie'=> $sortie,
            'pochette' => $pochette
            'nomGroupe' => $nomGroupe
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
