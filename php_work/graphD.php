<?php
// Appel conexion a la base
require '../php/pdo.php';
$title = 'Graph';
ob_start();


$annee = (date('Y')) -1;
$vcount = 1;


$result = $bd->prepare("SELECT nomStylePrincipal_StylePrincipal, SUM(note_Album) AS compteur FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
NATURAL JOIN a_voté_pour
GROUP BY nomStylePrincipal_StylePrincipal
ORDER BY note_Album DESC");
$result -> execute();


echo '<br>';echo '<br>';
// print_r($rt);
echo '<br>';echo '<br>';



// echo $rt[1];


?>



<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

<div id="container" style="min-width: 310px; height: 600px; max-width: 900px; margin: 0 auto"></div>




<script>
Highcharts.chart('container', {
chart: {
    plotBackgroundColor: null,
    plotBorderWidth: 0,
    plotShadow: false
},
title: {
    text: 'Top <br>Votes<br><?=$annee?>',
    align: 'center',
    verticalAlign: 'middle',
    y: 40
},
tooltip: {
    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
},
plotOptions: {
    pie: {
    dataLabels: {
        enabled: true,
        distance: -50,
        style: {
        fontWeight: 'bold',
        color: 'white'
        }
    },
    startAngle: -90,
    endAngle: 90,
    center: ['50%', '75%'],
    size: '110%'
    }
},
series: [{
    type: 'pie',
    name: 'Top 10 Votes',
    innerSize: '50%',
    data: [
        <?php 
    while($row = $result->fetch()){
        echo "['".$row['nomStylePrincipal_StylePrincipal']."', ".$row['compteur']."],";
    } ?>
    // ['The Dead Years', 12],
    // ['A Wake Up Nightmare', 10],
    // ['The Diving Mask', 6],
    // ['Agony', 6],
    // ['Album 17', 6],
    {
        name: 'Autres',
        y: 0,
        dataLabels: {
        enabled: false
        }
    }
    ]
}]
});

</script>