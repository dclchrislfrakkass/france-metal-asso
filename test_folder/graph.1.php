<?php
// Appel conexion a la base
require '../php/pdo.php';
$title = 'Graph';
ob_start();


$annee = (date('Y')) -1;
$vcount = 1;


$result = $bd->prepare("SELECT nomGroupe_Groupe, note_Album FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
NATURAL JOIN a_voté_pour
GROUP BY nomGroupe_Groupe
ORDER BY note_Album DESC LIMIT 10");
$result -> execute();




//////////////1
$rt = $result->fetchAll();
/////////////1



// $ioi =$result['nomAlbum_Album'];
// $array= array(
//     'nom'=> $ioi);

// var_dump($result);



///////////////////////2
// class topVote {
    
// }


// $rt = $result->fetchAll(PDO::FETCH_CLASS, "topVote" );

// print_r($rt);

// $json_data = json_encode($rt);
// file_put_contents('myfile.json', $json_data);


////////////////////////////2

echo '<br>';echo '<br>';
// print_r($rt);
echo '<br>';echo '<br>';



echo '<br>';
print_r($rt[0]);echo '<br>';
print_r($rt[3]);echo '<br>';
print_r($rt[8]);echo '<br>';

// echo $rt[1];


?>



<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

<div id="container" style="min-width: 310px; height: 600px; max-width: 900px; margin: 0 auto"></div>

<?php
$json =file_get_contents('myfile.json');
$dec=json_decode($json, true);

?>

























<script>
Highcharts.chart('container', {
chart: {
    plotBackgroundColor: null,
    plotBorderWidth: 0,
    plotShadow: false
},
title: {
    text: 'Top 10 <br>Votes<br><?=$annee?>',
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
    ['The Dead Years', 12],
    ['A Wake Up Nightmare', 10],
    ['The Diving Mask', 6],
    ['Agony', 6],
    ['Album 17', 6],
    {
        name: 'Autres',
        y: 20,
        dataLabels: {
        enabled: false
        }
    }
    ]
}]
});

</script>