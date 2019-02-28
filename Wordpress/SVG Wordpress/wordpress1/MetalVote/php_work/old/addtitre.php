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

$clipTitre = $ligne[8].' '.$ligne[9];
$lienTitre = $ligne[5].' '.$ligne[6].' '.$ligne[7];





$query = $bdd->prepare("INSERT INTO titre (clip_Titre, lienEcouteTitre_Titre) VALUES (:clipTitre, :lienTitre)");
$query->execute(array(
    'clipTitre'=> $clipTitre,
    'lienTitre' => $lienTitre
));


}





?>
