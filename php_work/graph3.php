<?php
// Appel conexion a la base
require '../php/pdo.php';
$title = 'Graph3';



// Get data from database
$result = $bd->query("SELECT nomStyleSecondaire_StyleSecondaire, SUM(note_Album) AS compteur FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
NATURAL JOIN a_voté_pour
GROUP BY nomStylesecondaire_StyleSecondaire
ORDER BY note_Album DESC LIMIT 10");

// ?>


<!DOCTYPE html>
<html lang="fr">
<head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div id="piechart3" style="width: 700px; height: 600px;"></div>

<script>

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

    var data3 = google.visualization.arrayToDataTable([
        
    ['Groupe', 'Votes'],
    <?php 
    while($row = $result->fetch()){

        echo "['".$row['nomStyleSecondaire_StyleSecondaire']."', ".$row['compteur']."],";
    } ?>

    ]);

    var options3 = {
    title: 'Votes par styles',
    backgroundColor: 'black',
    is3D: true,
    legend: {textStyle: {color: 'white', fontSize: 16}}
    };

    var chart3 = new google.visualization.PieChart(document.getElementById('piechart3'));

    chart3.draw(data3, options3);
}

</script>
<link rel="stylesheet" href="stylechart.css">



</head>

<body>
    <!-- Display the pie chart -->
    <div id="piechart3"></div>


</body>
</html>


