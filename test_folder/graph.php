<?php
// Appel conexion a la base
require '../php/pdo.php';
$title = 'Résultat Catégories';
ob_start();
$req = $bd->prepare("SELECT * FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
NATURAL JOIN a_voté_pour
GROUP BY nomGroupe_Groupe
ORDER BY note_Album DESC LIMIT 15");
$req -> execute();
$vcount = 1;

while (!empty($row = $req->fetch())){

echo '<br>';
// var_dump($row);
echo '<br>';
echo '<br>';
// echo 'Nombre de votes : '.$row['note_Album'];
// echo "<p><strong> Nom du Groupe : </strong>".$row['nomGroupe_Groupe']."</p>";
echo '<br>';
echo '<br>';
// for ($vcount = 1 ; $vcount <= 15 ; $vcount++ ){
$nbVote = $row['note_Album'];
$nomGrp = $row['nomGroupe_Groupe'];
echo 'Compteur: '.$vcount. ' nombre de votes --> '.$nbVote. ' et groupe --> ' .$nomGrp;


echo '<br>';
echo '$v' . $vcount;
$v1 = 
// $vv = "'y' => 12,'label' => 'Mourning Dawn'";

// $vv . $vcount = '"y" => '.$nbVote.',"label" =>"'.$nomGrp.'"';
$vcount ++;
};


 


$dataPoints = array( 
    array("y" => $v1,
          "label" => "Mourning Dawn"),
    array($vv),
    array("y" => 12,"label" => "Mourning Dawn" ),
    array("y" => 10,"label" => "Recedant Somnia" ),
    array("y" => 5,"label" => "Eighters" ),
    array("y" => 5,"label" => "Yann Armellino & El Butcho" )
);
 var_dump($dataPoints);
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    title:{
        text: "Votes FRANCE METAL AWARDS"
    },
    axisY: {
        title: "Nombre de votes"
        
    },
    data: [{
        type: "bar",
        yValueFormatString: "#,##0",
        indexLabel: "{y}",
        indexLabelPlacement: "inside",
        indexLabelFontWeight: "bolder",
        indexLabelFontColor: "white",
        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
    }]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>   