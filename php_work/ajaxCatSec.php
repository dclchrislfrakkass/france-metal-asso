<?php

require '../php/pdo.php';

var_dump($_POST);
    echo "<select name='styleS'>";
    if(isset($_POST["idStylePrincipal_StylePrincipal"])){
        
        $req=$bd->query("SELECT * FROM stylesecondaire
        NATURAL JOIN styleprincipal
        WHERE idStylePrincipal_StylePrincipal =".$_POST['idStylePrincipal_StylePrincipal']."");
     
            while ($row = $req->fetch()){
            echo "<option value='".$row["idStyleSecondaire"]."'>".$row["nomStyleSecondaire_StyleSecondaire"]."</option>";
        }
    }
    echo "</select>";
?>