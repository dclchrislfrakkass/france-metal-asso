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
    echo '<br><br><br>';


    // pour enlever la contrainte de clé étrangère
    $requete_pdo = $bdd->prepare("set FOREIGN_KEY_CHECKS=0");
    $requete_pdo->execute();

$styleSec = $ligne[0];
$nomAlbum = $ligne[2];


echo 'nomAlbum : <br>';
var_dump($nomAlbum);

echo '<br>';

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


?>