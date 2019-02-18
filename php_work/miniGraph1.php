<?php
// Appel conexion a la base
require '../php/pdo.php';
$title = 'Mini1';



// Get data from database
$result = $bd->query("SELECT idStylePrincipal_StylePrincipal, nomStylesecondaire_StyleSecondaire, SUM(note_Album) AS compteur FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
NATURAL JOIN a_voté_pour
WHERE idStylePrincipal_StylePrincipal = 1
GROUP BY nomStylesecondaire_StyleSecondaire
ORDER BY note_Album DESC LIMIT 5");


// ?>


<!DOCTYPE html>
<html lang="fr">
<head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div id="piechart2" style="width: 700px; height: 600px;"></div>

<script>

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

    var data2 = google.visualization.arrayToDataTable([
        
    ['Groupe', 'Votes'],
    <?php 
    while($row = $result->fetch()){
        echo "['".$row['nomStylesecondaire_StyleSecondaire']."', ".$row['compteur']."],";
    } ?>

    ]);

    var options2 = {
    title: 'Votes par styles',
    backgroundColor: 'black',
    is3D: true,
    legend: {textStyle: {color: 'white', fontSize: 16}}
    };

    var chart2 = new google.visualization.PieChart(document.getElementById('piechart2'));

    chart2.draw(data2, options2);
}

</script>
<link rel="stylesheet" href="stylechart.css">



</head>

<body>
    <!-- Display the pie chart -->
    <div id="piechart2"></div>


</body>
</html>


