<?php
// Appel conexion a la base
require '../php/pdo.php';
$title = 'Graph2';



// Get data from database
$result = $bd->query("SELECT nomStylePrincipal_StylePrincipal, SUM(note_Album) AS compteur FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
NATURAL JOIN a_voté_pour
GROUP BY nomStylePrincipal_StylePrincipal
ORDER BY note_Album DESC");


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
        echo "['".$row['nomStylePrincipal_StylePrincipal']."', ".$row['compteur']."],";
    } ?>
    // ['Work',     11],
    // ['Eat',      2],
    // ['Commute',  2],
    // ['Watch TV', 2],
    // ['Sleep',    7]
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


