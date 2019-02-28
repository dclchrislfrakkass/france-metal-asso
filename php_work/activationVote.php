<?php
// Appel connexion a la base
require '../php/pdo.php';
$title = 'Activation des votes';
ob_start();

$req= $bd->prepare("SELECT * FROM votePossible");
$req->execute();
$row=$req->fetch();
$vote = $row['voteOuvert'];
if ($vote == 1){
    $votePossible = 'ok';
    $stat= 'danger';
    
} if ($vote == 0) {
    $votePossible = '';
    $stat= 'success';
}
?>
<body class="position-absolute mt-sm-3 mt-5 pt-2">   
    <div class="mt-5 mt-sm-none contenair position-relative"></div><!-- div intercalaire -->
        <div class="container">
            <p class="bg-<?php echo $stat ?> p-1">Etat des votes Rouge = off || Vert = ON</p>
        </div>

        <form method="post" action="" class="text-center"> 
            <input class="bg-<?php echo $stat ?>" type="submit" name="Submiton" value="Votes">
        </form>

<?php

    if ($vote == 1){
    $req= $bd->prepare("UPDATE votePossible SET voteOuvert = 0");
    $req->execute();
    } else {
        $req= $bd->prepare("UPDATE votePossible SET voteOuvert = 1");
        $req->execute();
    }

?>

<p></p>

<?php
$req->closeCursor();

$content = ob_get_clean();
require './template.php';
?>



