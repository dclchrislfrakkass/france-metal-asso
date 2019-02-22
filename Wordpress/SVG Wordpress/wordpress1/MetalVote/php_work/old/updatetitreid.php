<?php
// Connexion à la BDD
try {
    
    $bdd = new PDO('mysql:host=localhost; dbname=france_metal_asso', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
}
 
catch(exception $e) {
    die('Erreur '.$e->getMessage());
}

// Lecture du fichier CSV
$fichier = 'AWARDS 2018-sicca-test.csv';

$csv = new SplFileObject($fichier);
$csv->setFlags(SplFileObject::READ_CSV);
$csv->setCsvControl('|');

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


?>