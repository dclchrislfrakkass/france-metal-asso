<?php
// Appel conexion a la base
require '../php/pdo.php';

// Get data from database
$result = $bd->query("SELECT nomStyleSecondaire_StyleSecondaire, SUM(note_Album) AS compteur FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
NATURAL JOIN a_voté_pour
GROUP BY nomStylesecondaire_StyleSecondaire
ORDER BY note_Album DESC LIMIT 10");
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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
    legend: {textStyle: {color: 'white', fontSize: 16}},
    height:'500'
    };
    var chart3 = new google.visualization.PieChart(document.getElementById('piechart12'));
    chart3.draw(data3, options3);
}
</script>
<!-- Display the pie chart -->
<div id="piechart12"></div>
