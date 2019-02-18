<?php
// Appel conexion a la base
require '../php/pdo.php';

// Get data from database
$result = $bd->query("SELECT nomStylePrincipal_StylePrincipal, SUM(note_Album) AS compteur FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
NATURAL JOIN a_voté_pour
GROUP BY nomStylePrincipal_StylePrincipal
ORDER BY note_Album DESC");
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

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
    ]);
    var options2 = {
    title: 'Votes par styles',
    backgroundColor: 'black',
    is3D: true,
    legend: {textStyle: {color: 'white', fontSize: 16}},
    height:'500'
    };
    var chart2 = new google.visualization.PieChart(document.getElementById('piechart11'));
    chart2.draw(data2, options2);
}
</script>
<!-- Display the pie chart -->
<div id="piechart11"></div>
