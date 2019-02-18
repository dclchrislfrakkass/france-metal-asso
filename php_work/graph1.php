<?php
// Appel conexion a la base
require '../php/pdo.php';

// Get data from database
$result = $bd->query("SELECT nomGroupe_Groupe, note_Album FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
NATURAL JOIN a_voté_pour
GROUP BY nomGroupe_Groupe
ORDER BY note_Album DESC LIMIT 10");
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var data = google.visualization.arrayToDataTable([
    ['Groupe', 'Votes'],
    <?php 
    while($row = $result->fetch()){
        echo "['".$row['nomGroupe_Groupe']."', ".$row['note_Album']."],";
    } ?>
    ]);
    var options = {
    title: 'Top 10 des votes',
    backgroundColor: 'black',
    is3D: true,
    legend: {textStyle: {color: 'white', fontSize: 16}},
    height:'500'
    };
    var chart = new google.visualization.PieChart(document.getElementById('piechart10'));
    chart.draw(data, options);
}
</script>
<!-- Display the pie chart -->
<div id="piechart10"></div>