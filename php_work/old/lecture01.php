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
    print_r($ligne);
    echo '<br><br><br>';


    // pour enlever la contrainte de clé étrangère
    $requete_pdo = $bdd->prepare("set FOREIGN_KEY_CHECKS=0");
    $requete_pdo->execute();


$label = $ligne[7];
$nomAlbum= $ligne[2];
$sortie = $ligne[3];
$liens = $ligne[5];

echo 'label : <br>';
var_dump($label);
echo '<br>';
echo 'nom album : <br>';
var_dump($nomAlbum);
echo '<br>';
echo 'nom album : <br>';
var_dump($sortie);
echo '<br>';
echo 'nom album : <br>';
var_dump($liens);
    echo '<br>';
    
    // echo '|'.implode('|', $ligne).'|';

    //rqt = "INSERT INTO stylesecondaire(idStyleSecondaire_StyleSecondaire,nomStyleSecondaire_StyleSecondaire,idStylePrincipal_StylePrincipal ) VALUES ('','$ligne[0]', '1')";.

    // $rqt = "INSERT INTO album (nomAlbum_Album, dateSortie_Album, label_Album, lienEcouteAlbum_Album) VALUES (:nomAlbum, :sortie, :label, :liens)";



    $query = $bdd->prepare("INSERT INTO album (nomAlbum_Album, dateSortie_Album, label_Album, lienEcouteAlbum_Album) VALUES (:nomAlbum, :sortie, :label, :liens)");
    $query->execute(array(
        'label' => $label,
        'nomAlbum'=>$nomAlbum,
        'sortie'=> $sortie,
        'liens'=> $liens
    ));
    echo '<br>';
    var_dump($query);
    echo '<br>';

}




////
?>
<!--

test:

INSERT INTO `stylesecondaire` (`idStyleSecondaire_StyleSecondaire`, `nomStyleSecondaire_StyleSecondaire`, `idStylePrincipal_StylePrincipal`) VALUES (NULL, 'Technical Death Metal', '1');

//////////


UPDATE
    Sales_Import SI,
    RetrieveAccountNumber RAN
SET
    SI.AccountNumber = RAN.AccountNumber
WHERE
    SI.LeadID = RAN.LeadID;

    ----
    
    UPDATE 
    Table1 t1, 
    Table2 t2
SET 
    t1.column = t2.column 
WHERE
    t1.ID = t2.ID;





    /////////
SELECT *FROM album NATURAL JOIN stylesecondaire
