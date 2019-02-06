<?php
// Connexion à la BDD
try {
    
    $bdd = new PDO('mysql:host=localhost; dbname=france_metal_asso', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
}
 
catch(exception $e) {
    die('Erreur '.$e->getMessage());
}

// Lecture du fichier CSV
$fichier = '.csv';          //à compléter avec celui que l'on veut injecter

$csv = new SplFileObject($fichier);
$csv->setFlags(SplFileObject::READ_CSV);
$csv->setCsvControl('|');




//////////////////////////////////
//UPDATE id STYLE SECONDAIRE
//////////////////////////////////

foreach($csv as $ligne){
    // print_r($ligne);



    // pour enlever la contrainte de clé étrangère
    $requete_pdo = $bdd->prepare("set FOREIGN_KEY_CHECKS=0");
    $requete_pdo->execute();

$styleSec = $ligne[0];
$nomAlbum = $ligne[2];


$query = $bdd->prepare("SELECT idStyleSecondaire_StyleSecondaire from stylesecondaire where nomStyleSecondaire_StyleSecondaire = '$styleSec'");
$query->execute(array(
    'styleSec'=> $styleSec
));


while ($donnees = $query->fetch()){
    $idStyle = $donnees['idStyleSecondaire_StyleSecondaire'];
    $query2 = $bdd->prepare("UPDATE album SET idStyleSecondaire_StyleSecondaire =:idStyle where nomAlbum_Album = :nomAlbum");
    $query2->execute(array(
        'idStyle' => $idStyle,
        'nomAlbum' => $nomAlbum
    ));


};
   


}


//////////////////////////////////
//UPDATE id GROUPE
//////////////////////////////////


foreach($csv as $ligne){
    // print_r($ligne);


    // pour enlever la contrainte de clé étrangère
    $requete_pdo = $bdd->prepare("set FOREIGN_KEY_CHECKS=0");
    $requete_pdo->execute();


$nomAlbum = $ligne[2];
$nomGroup = $ligne[1];
$lien = $ligne[10];
$mailGroupe = $ligne[11];
$telGroupe = $ligne[13];




$query = $bdd->prepare("SELECT idGroupe_Groupe from groupe where nomGroupe_Groupe = :nomGroup");
$query->execute(array(
    'nomGroup'=> $nomGroup
));
    while ($donnees = $query->fetch()){
        $idgroup = $donnees['idGroupe_Groupe'];
        $query2 = $bdd->prepare("UPDATE album SET idGroupe_Groupe = :idgroup where nomAlbum_Album = :nomAlbum");
        $query2->execute(array(
            'idgroup' => $idgroup,
            'nomAlbum' => $nomAlbum
        ));


    };
   
   

}


//////////////////////////////////
//UPDATE id ALBUM
//////////////////////////////////




foreach($csv as $ligne){
    // print_r($ligne);


    // pour enlever la contrainte de clé étrangère
    $requete_pdo = $bdd->prepare("set FOREIGN_KEY_CHECKS=0");
    $requete_pdo->execute();


    $nomAlbum = $ligne[2];
    $clip = $ligne[8].' '.$ligne[9];
   
    $query = $bdd->prepare("SELECT idAlbum_Album from album where nomAlbum_Album = :nomAlbum");
    $query->execute(array(
        'nomAlbum'=> $nomAlbum
    ));


    while ($donnees = $query->fetch()){
        $idAlbum = $donnees['idAlbum_Album'];
        var_dump($idAlbum);
        $query2 = $bdd->prepare("UPDATE titre SET idAlbum_Album =:idAlbum where clip_Titre = :clip");
        $query2->execute(array(
            'idAlbum' => $idAlbum,
            'clip' => $clip
        ));
    } ;

}

