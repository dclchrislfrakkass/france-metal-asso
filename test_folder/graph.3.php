<?php
// Database credentials
$dbHost = 'cl1-sql23.phpnet.org';
$dbUsername = 'p1216_5';
$dbPassword = '6xl31ESwq358';
$dbName = 'p1216_5';

// Create connection and select db
$db = new mysqli("$dbHost", "$dbUsername", "$dbPassword", "$dbName");

// Get data from database
$result = $db->query("SELECT nomGroupe_Groupe, note_Album FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
NATURAL JOIN a_voté_pour
GROUP BY nomGroupe_Groupe
ORDER BY note_Album DESC LIMIT 10");
?>


<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

    var data = google.visualization.arrayToDataTable([
    ['Language', 'Rating'],
    <?php
    // if($result->num_rows > 0){
        var_dump($row);
        while($row = $result->fetch_assoc()){
            echo "['".$row['nomGroupe_Groupe']."', ".$row['note_Album']."],";
        }
    // }
    ?>
    ]);
    
    var options = {
        title: 'Most Popular Programming Languages',
        width: 900,
        height: 500,
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