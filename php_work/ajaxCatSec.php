<?php

require '../php/pdo.php';

?>
<select name='styleS' id='styleS'>
<?php 
if(isset($_POST['idStylePrincipal_StylePrincipal'])){
    
    $req=$bd->query("SELECT * FROM stylesecondaire
    NATURAL JOIN styleprincipal
    WHERE idStylePrincipal_StylePrincipal=".$_POST['idStylePrincipal_StylePrincipal']."");
    
    while ($row = $req->fetch()){
        echo "<option value='".$row['idStyleSecondaire_StyleSecondaire']."'>".$row['nomStyleSecondaire_StyleSecondaire']."</option>";
        echo "</select>";
    }
}
?>