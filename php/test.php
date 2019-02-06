
<?php
// session_start();
// Appel conexion a la base
require '../php/pdo.php';
echo '<h1>'.'connard'.'</h1>';
// Recuperation des styles principaux:

$req = $bdd->query("SELECT nomStylePrincipal_StylePrincipal FROM styleprincipal");

while ($row = $req->fetch()){
    // var_dump($row);
    echo '<h1>'.$row['nomStylePrincipal_StylePrincipal'].'</h1>';
}
// var_dump($req);
// $req -> closeCursor();

// Recuperation des style secondaires selon le style principale choisi:
$styleprincselect = 1;// style principale selectionner

$req=$bdd->prepare("SELECT nomStyleSecondaire_StyleSecondaire FROM stylesecondaire
NATURAL JOIN styleprincipal
WHERE idStylePrincipal_StylePrincipal = :styleprincselect ");
$req->execute(array(
    'styleprincselect' => $styleprincselect
));

while ($row = $req->fetch()){
    echo '<h2>'.$row['nomStyleSecondaire_StyleSecondaire']. '</h2>';
}
$req -> closeCursor();