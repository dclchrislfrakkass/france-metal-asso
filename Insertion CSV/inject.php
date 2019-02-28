<?php
// Connexion à la bdd
require '../php/pdo.php';

$fichiertmp = $_FILES['userfile']['tmp_name'];
$fichier = $_FILES['userfile']['name'];
// upload du fichier plus deplacement
$filedir = dirname(__FILE__).'/';
move_uploaded_file($fichiertmp, $filedir.$fichier);

switch ($fichier) {
    case 'StyleMetalExtreme.csv':
        $idStyleP = 1;
        break;
    case 'StyleMetalDarkAmbientAtmo.csv':
        $idStyleP = 2;
        break;
    case 'StyleHardcorePunk.csv':
        $idStyleP = 3;
        break;
    case 'StyleMetalHardRock.csv':
        $idStyleP = 4;
        break;
    case 'StyleMetalHeavyThrash.csv':
        $idStyleP = 5;
        break;
    case 'StyleMetalFusion.csv':
        $idStyleP = 6;
        break;
    default :
        echo '<h1 class="text-danger">Fichier non conforme</h1>';
}

// Lecture du fichier CSV

$csv = new SplFileObject($fichier);
$csv->setFlags(SplFileObject::READ_CSV);
$csv->setCsvControl(',');
$compteur = 0;
$compteur1 = 0;
foreach($csv as $ligne){
    if ($ligne[0]!=NULL){
        $styleSec = $ligne[0];
        $nomGroupe = $ligne[1];
        $nomAlbum = $ligne[2];
        $sortie = $ligne[3];
        if(!empty($ligne[4])){
            $lienTitre = $ligne[4];
        } else {
            $lienTitre = '';
        }
        if(!empty($ligne[5])){
            $lienTitre2 = $ligne[5];
        } else {
            $lienTitre2 = '';
        }
        if(!empty($ligne[6])){
            $lienTitre3 = $ligne[6];
        } else {
            $lienTitre3 = '';
        }
        if(!empty($ligne[7])){
            $label = $ligne[7];
        } else {
            $label = '';
        }
        $clipTitre = $ligne[8];

        if(!empty($ligne[9])){
            $clipTitre2 = $ligne[9];
        } else {
            $clipTitre2 = '';
        }
        if(!empty($ligne[10])){
            $lienGroupe = $ligne[10];
        } else {
            $lienGroupe = '';
        }
        if(!empty($ligne[11])){
            $mailGroupe = $ligne[11];
        } else {
            $mailGroupe = '';
        }
        if(!empty($ligne[12])){
            $origine = $ligne[12];
        } else {
            $origine = '';
        }
        if(!empty($ligne[13])){
            $telGroupe= $ligne[13];
        } else {
            $telGroupe = '';
        }
        if(!empty($ligne[14])){
            $pochette = $ligne[14];
        } else {
            $pochette = '';
        }
        if(!empty($ligne[15])){
            $photoGroupe = $ligne[15];
        } else {
            $photoGroupe = '';
            // var_dump($photoGroupe);
        }
        $req=$bd->prepare("SELECT * FROM groupe WHERE nomGroupe_Groupe = :nomGroupe");
        $req->execute(array(
            'nomGroupe' => $nomGroupe
        ));
        $donnees = $req->fetch();
        if ($donnees){
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
            // select id album
            $query = $bd->prepare("SELECT idAlbum_Album FROM album NATURAL JOIN groupe WHERE nomGroupe_Groupe = :nomGroupe ");
            $query->execute(array(
                'nomGroupe' => $nomGroupe
            ));
            $selectidAlbum = $query->fetch();
            $idAlbum = $selectidAlbum['idAlbum_Album'];
            $query->closeCursor();
            ///////////////////// update table album : id style et id groupe /////////////////////

            // Select id groupe
            $query = $bd->prepare("SELECT idGroupe_Groupe FROM groupe WHERE nomGroupe_Groupe = :nomGroupe");
            $query->execute(array(
                'nomGroupe'=> $nomGroupe
            ));
            while ($selectidG = $query->fetch()){
            $idGroupe = $selectidG['idGroupe_Groupe'];
            }
            $query->closeCursor();
            //  Select id style secondaire
            $query = $bd->prepare("SELECT idStyleSecondaire_StyleSecondaire FROM stylesecondaire WHERE nomStyleSecondaire_StyleSecondaire = :styleSec and idStylePrincipal_StylePrincipal = :idStyleP");
            $query->execute(array(
                'styleSec' => $styleSec,
                'idStyleP' => $idStyleP
            ));
            $data=$query->fetch();
            $idstyleS = $selectidG['idStyleSecondaire_StyleSecondaire'];
            $query->closeCursor();
            if ($data){
                $query2 = $bd->prepare("UPDATE album SET idStyleSecondaire_StyleSecondaire=:idStyleS , idGroupe_Groupe=:idGroupe WHERE idAlbum_Album = :idAlbum)");
                $query2->execute(array(
                    'idStyleS' => $idstyleS,
                    'idGroupe' => $idGroupe,
                    'idAlbum' => $idAlbum
                ));
            } elseif ($data) {
                $query2 = $bd->prepare("INSERT INTO stylesecondaire(nomStyleSecondaire_StyleSecondaire, idStylePrincipal_StylePrincipal) VALUE (:styleSec, :idStyleP)");
                $query2->execute(array(
                    'styleSec' => $styleSec,
                    'idStyleP' => $idStyleP
                ));
                $query2->closeCursor();
                $query = $bd->prepare("SELECT idStyleSecondaire_StyleSecondaire FROM stylesecondaire WHERE nomStyleSecondaire_StyleSecondaire = :styleSec and idStylePrincipal_StylePrincipal = :idStyleP");
                $query->execute(array(
                'styleSec' => $styleSec,
                'idStyleP' => $idStyleP
                ));
                $data=$query->fetch();
                $idstyleS = $selectidG['idStyleSecondaire_StyleSecondaire'];
                $query->closeCursor();

                $query2 = $bd->prepare("UPDATE album SET idStyleSecondaire_StyleSecondaire=:idStyleS , idGroupe_Groupe=:idGroupe WHERE idAlbum_Album = idAlbum");
                $query2->execute(array(
                    'idStyleS' => $idstyleS,
                    'idGroupe' => $idGroupe,
                    'idAlbum' => $idAlbum
                ));
            }
            $query2->closeCursor();

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

            // Update table titre id album
            $query = $bd->prepare("SELECT idAlbum_Album FROM album natural join groupe WHERE nomGroupe_Groupe = :nomGroupe");
            $query->execute(array(
                'nomGroupe'=> $nomGroupe
            ));
            while ($donnees = $query->fetch()){
                $idAlbum = $donnees['idAlbum_Album'];
                $query2 = $bd->prepare("UPDATE titre SET idAlbum_Album =:idAlbum WHERE clip_Titre = :clipTitre");
                $query2->execute(array(
                    'idAlbum' => $idAlbum,
                    'clipTitre' => $clipTitre
                ));
                $query->closeCursor();
                $query2->closeCursor();
                $requete_pdo->closeCursor();
            }
            $req->closeCursor();
        } else{
            // pour enlever la contrainte de clé étrangère
            $requete_pdo = $bd->prepare("set FOREIGN_KEY_CHECKS=0");
            $requete_pdo->execute();
            // Remplissage table groupe
            $query = $bd->prepare("INSERT INTO groupe (nomGroupe_Groupe, lien_Groupe, mail_Groupe, telephone_Groupe, photoGroupe) VALUES (:nomGroupe, :lienGroupe, :mailGroupe, :telGroupe, :photoGroupe)");
            $query->execute(array(
                'nomGroupe'=> $nomGroupe,
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

            // select dernier id album
            $query = $bd->prepare("SELECT MAX(idAlbum_Album) FROM album");
            $query->execute();
            $data3 = $query->fetch();
            $maxIdAlbum = $data3['MAX(idAlbum_Album)'];
            $query->closeCursor();
            ///////////////////// update table album : id style et id groupe /////////////////////

            // Select id groupe
            $query = $bd->prepare("SELECT idGroupe_Groupe FROM groupe WHERE nomGroupe_Groupe = :nomGroupe");
            $query->execute(array(
                'nomGroupe'=> $nomGroupe
            ));
            $selectidG = $query->fetch();
            $idGroupe = $selectidG['idGroupe_Groupe'];
            $query->closeCursor();
            //  Select id style secondaire
            $query = $bd->prepare("SELECT idStyleSecondaire_StyleSecondaire FROM stylesecondaire WHERE nomStyleSecondaire_StyleSecondaire = :styleSec and idStylePrincipal_StylePrincipal = :idStyleP");
            $query->execute(array(
                'styleSec' => $styleSec,
                'idStyleP' => $idStyleP
            ));
            $data2=$query->fetch();
            $idstyle = $data2['idStyleSecondaire_StyleSecondaire'];
            $query->closeCursor();

            if ($data2){
                $query2 = $bd->prepare("UPDATE album SET idStyleSecondaire_StyleSecondaire=:idStyle , idGroupe_Groupe=:idGroupe WHERE idAlbum_Album = :maxIdAlbum");
                $query2->execute(array(
                    'idStyle' => $idstyle,
                    'idGroupe' => $idGroupe,
                    'maxIdAlbum' => $maxIdAlbum
                ));
            } elseif (!$data2){
                var_dump($data2);
                var_dump($styleSec);
                $query2 = $bd->prepare("INSERT INTO stylesecondaire(nomStyleSecondaire_StyleSecondaire, idStylePrincipal_StylePrincipal) VALUE (:styleSec, :idStyleP)");
                //  ajouter style principal
                $query2->execute(array(
                    'styleSec' => $styleSec,
                    'idStyleP' => $idStyleP
                ));
                $query2->closeCursor();

                $query = $bd->prepare("SELECT idStyleSecondaire_StyleSecondaire FROM stylesecondaire WHERE nomStyleSecondaire_StyleSecondaire = :styleSec and idStylePrincipal_StylePrincipal = :idStyleP");
                $query->execute(array(
                    'styleSec' => $styleSec,
                    'idStyleP' => $idStyleP
                ));
                $data4=$query->fetch();
                $idstyle = $data4['idStyleSecondaire_StyleSecondaire'];
                $query->closeCursor();

                $query2 = $bd->prepare("UPDATE album SET idStyleSecondaire_StyleSecondaire=:idStyle , idGroupe_Groupe=:idGroupe WHERE idAlbum_Album = :maxIdAlbum");
                $query2->execute(array(
                    'idStyle' => $idstyle,
                    'idGroupe' => $idGroupe,
                    'maxIdAlbum' => $maxIdAlbum
                ));
            }
            $query2->closeCursor();

            // Update table titre : id album
            // $query = $bd->prepare("SELECT idAlbum_Album FROM album natural join groupe WHERE nomGroupe_Groupe = :nomGroupe");
            // $query->execute(array(
            //     'nomGroupe'=> $nomGroupe
            // ));
            $query2 = $bd->prepare("UPDATE titre SET idAlbum_Album =:idAlbum WHERE clip_Titre = :clipTitre");
            $query2->execute(array(
                'idAlbum' => $maxIdAlbum,
                'clipTitre' => $clipTitre
            ));
            $query->closeCursor();
            $query2->closeCursor();
            $requete_pdo->closeCursor();
        }
        $req->closeCursor();
    }
}
$csv = null;
$title = 'Categorie';
ob_start();
?>
<header>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <ul class="navbar-nav">
            <li class="nav-item">
                <input type="button" value="Retour" onclick="history.go(-1)">
            </li>
        </ul>
    </nav>
</header>
<body class="position-absolute mt-sm-3 mt-5 pt-2">   
    <div class="mt-5 mt-sm-none contenair position-relative"></div>  <!-- div intercalaire -->
        <h2 class="text-center">Vos données ont bien été ajoutées</h2>
<?php
unlink($fichier);
$content = ob_get_clean();
require './template.php';
?>
