<?php
// Appel conexion a la base
require '../php/pdo.php';
$title = 'Graph';



// Get data from database
$result = $bd->query("SELECT nomGroupe_Groupe, note_Album FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
NATURAL JOIN a_voté_pour
GROUP BY nomGroupe_Groupe
ORDER BY note_Album DESC LIMIT 10");

    
// while($row = $result->fetchAll()){
//     var_dump($row);

//     echo "['".$row['nomGroupe_Groupe']."', ".$row['note_Album']."],";
// }
// ?>


<!DOCTYPE html>
<html lang="fr">
<head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div id="piechart" style="width: 900px; height: 500px;"></div>

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
    // ['Work',     11],
    // ['Eat',      2],
    // ['Commute',  2],
    // ['Watch TV', 2],
    // ['Sleep',    7]
    ]);

    var options = {
    title: 'My Daily Activities'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
}

</script>




</head>



<body>
    <!-- Display the pie chart -->
    <div id="piechart"></div>

</body>
</html>


