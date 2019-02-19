<?php

require '../php/pdo.php';


?>

<script>
    var select = document.getElementById( "styleS" )
    select.addEventListener( "change", function ( e )
    {
        var input = document.getElementById( "inputToDisplay" )
 
        if ( e.target.value == "-1" )
           
            input.style.display = "block"
        else
            input.style.display = "none"
    } )
</script>

<link rel="stylesheet" href="ajoutStyle.css">

<div id='styleS' style='display:inline'>
<select name='styleS' class="form-control">
<?php 
if(isset($_POST['idStylePrincipal_StylePrincipal'])){
    
    $req=$bd->query("SELECT * FROM stylesecondaire
    NATURAL JOIN styleprincipal
    WHERE idStylePrincipal_StylePrincipal=".$_POST['idStylePrincipal_StylePrincipal']."");
    
    while ($row = $req->fetch()){
        echo "<option value='".$row['idStyleSecondaire_StyleSecondaire']."'>".$row['nomStyleSecondaire_StyleSecondaire']."</option>";
    }
};
        ?>
            <option value='0' selected>Choisissez un style secondaire</option>
            <option value='1'>Ajouter un nouveau style</option>
        </select>

    


<div id="inputToDisplay">
<div class="form-group col-md-6">
    <label for="inputNSS">Style Secondaire à ajouter</label>
    <input type="text" class="form-control" id="inputNewSS" placeholder="Nouveau Style Secondaire">
</div>
</div>










<!--


// <script>
// function activer()
//     {
//         var select = document.getElementById( "styleS" )

//         var input = document.getElementById( "inputToDisplay" )
 
//         if ( select.value == "1" )
//         input.style.display = "inline-block";
//             console.log(select.value);
//         else
//             input.style.display = "none";
//     }
// </script>


// <script>
//     var select = document.getElementById( "styleS" )
//     select.addEventListener( "change", function ( e )
//     {
//         var input = document.getElementById( "inputToDisplay" )
 
//         if ( e.target.value == "-1" )
//             console.log(e.target.value);
//             input.style.display = "block"
//         else
//             input.style.display = "none"
//     } )
</script>