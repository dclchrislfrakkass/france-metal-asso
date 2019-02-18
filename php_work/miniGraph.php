<?php
// Appel conexion a la base
require '../php/pdo.php';

?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    google.charts.setOnLoadCallback(drawChart2);
    google.charts.setOnLoadCallback(drawChart3);
    google.charts.setOnLoadCallback(drawChart4);
    google.charts.setOnLoadCallback(drawChart5);
    google.charts.setOnLoadCallback(drawChart6);
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
        ['Groupe', 'Votes'],
        <?php 
            // Get data from database
        $result = $bd->prepare("SELECT idStylePrincipal_StylePrincipal, nomStylesecondaire_StyleSecondaire, SUM(note_Album) AS compteur FROM groupe
        NATURAL JOIN album
        NATURAL JOIN stylesecondaire
        NATURAL JOIN styleprincipal
        NATURAL JOIN a_voté_pour
        WHERE idStylePrincipal_StylePrincipal = :idStyle
        GROUP BY nomStylesecondaire_StyleSecondaire
        ORDER BY note_Album DESC LIMIT 5");
        $result->execute(array(
            'idStyle' => 1
        ));
        while ($row = $result->fetch()){
            echo "['".$row['nomStylesecondaire_StyleSecondaire']."', ".$row['compteur']."],";
        } ?>
        ]);
        var options = {
        title: 'Votes par styles',
        backgroundColor: 'black',
        is3D: true,
        legend: {textStyle: {color: 'white', fontSize: 16}},
        height:'500'
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }
    function drawChart2() {
        var data = google.visualization.arrayToDataTable([
        ['Groupe', 'Votes'],
        <?php 
            // Get data from database
        $result = $bd->prepare("SELECT idStylePrincipal_StylePrincipal, nomStylesecondaire_StyleSecondaire, SUM(note_Album) AS compteur FROM groupe
        NATURAL JOIN album
        NATURAL JOIN stylesecondaire
        NATURAL JOIN styleprincipal
        NATURAL JOIN a_voté_pour
        WHERE idStylePrincipal_StylePrincipal = :idStyle
        GROUP BY nomStylesecondaire_StyleSecondaire
        ORDER BY note_Album DESC LIMIT 5");
        $result->execute(array(
            'idStyle' => 2
        ));
        while ($row = $result->fetch()){
            echo "['".$row['nomStylesecondaire_StyleSecondaire']."', ".$row['compteur']."],";
        } ?>
        ]);
        var options = {
        title: 'Votes par styles',
        backgroundColor: 'black',
        is3D: true,
        legend: {textStyle: {color: 'white', fontSize: 16}},
        height:'500'
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
        chart.draw(data, options);
    }
    function drawChart3() {
        var data = google.visualization.arrayToDataTable([
        ['Groupe', 'Votes'],
        <?php 
            // Get data from database
        $result = $bd->prepare("SELECT idStylePrincipal_StylePrincipal, nomStylesecondaire_StyleSecondaire, SUM(note_Album) AS compteur FROM groupe
        NATURAL JOIN album
        NATURAL JOIN stylesecondaire
        NATURAL JOIN styleprincipal
        NATURAL JOIN a_voté_pour
        WHERE idStylePrincipal_StylePrincipal = :idStyle
        GROUP BY nomStylesecondaire_StyleSecondaire
        ORDER BY note_Album DESC LIMIT 5");
        $result->execute(array(
            'idStyle' => 3
        ));
        while ($row = $result->fetch()){
            echo "['".$row['nomStylesecondaire_StyleSecondaire']."', ".$row['compteur']."],";
        } ?>
        ]);
        var options = {
        title: 'Votes par styles',
        backgroundColor: 'black',
        is3D: true,
        legend: {textStyle: {color: 'white', fontSize: 16}},
        height:'500'
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart3'));
        chart.draw(data, options);
    }
    function drawChart4() {
        var data = google.visualization.arrayToDataTable([
        ['Groupe', 'Votes'],
        <?php 
            // Get data from database
        $result = $bd->prepare("SELECT idStylePrincipal_StylePrincipal, nomStylesecondaire_StyleSecondaire, SUM(note_Album) AS compteur FROM groupe
        NATURAL JOIN album
        NATURAL JOIN stylesecondaire
        NATURAL JOIN styleprincipal
        NATURAL JOIN a_voté_pour
        WHERE idStylePrincipal_StylePrincipal = :idStyle
        GROUP BY nomStylesecondaire_StyleSecondaire
        ORDER BY note_Album DESC LIMIT 5");
        $result->execute(array(
            'idStyle' => 4
        ));
        while ($row = $result->fetch()){
            echo "['".$row['nomStylesecondaire_StyleSecondaire']."', ".$row['compteur']."],";
        } ?>
        ]);
        var options = {
        title: 'Votes par styles',
        backgroundColor: 'black',
        is3D: true,
        legend: {textStyle: {color: 'white', fontSize: 16}},
        height:'500'
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart4'));
        chart.draw(data, options);
    }
    function drawChart5() {
        var data = google.visualization.arrayToDataTable([
        ['Groupe', 'Votes'],
        <?php 
            // Get data from database
        $result = $bd->prepare("SELECT idStylePrincipal_StylePrincipal, nomStylesecondaire_StyleSecondaire, SUM(note_Album) AS compteur FROM groupe
        NATURAL JOIN album
        NATURAL JOIN stylesecondaire
        NATURAL JOIN styleprincipal
        NATURAL JOIN a_voté_pour
        WHERE idStylePrincipal_StylePrincipal = :idStyle
        GROUP BY nomStylesecondaire_StyleSecondaire
        ORDER BY note_Album DESC LIMIT 5");
        $result->execute(array(
            'idStyle' => 5
        ));
        while ($row = $result->fetch()){
            echo "['".$row['nomStylesecondaire_StyleSecondaire']."', ".$row['compteur']."],";
        } ?>
        ]);
        var options = {
        title: 'Votes par styles',
        backgroundColor: 'black',
        is3D: true,
        legend: {textStyle: {color: 'white', fontSize: 16}},
        height:'500'
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart5'));
        chart.draw(data, options);
    }
    function drawChart6() {
        var data = google.visualization.arrayToDataTable([
        ['Groupe', 'Votes'],
        <?php 
            // Get data from database
        $result = $bd->prepare("SELECT idStylePrincipal_StylePrincipal, nomStylesecondaire_StyleSecondaire, SUM(note_Album) AS compteur FROM groupe
        NATURAL JOIN album
        NATURAL JOIN stylesecondaire
        NATURAL JOIN styleprincipal
        NATURAL JOIN a_voté_pour
        WHERE idStylePrincipal_StylePrincipal = :idStyle
        GROUP BY nomStylesecondaire_StyleSecondaire
        ORDER BY note_Album DESC LIMIT 5");
        $result->execute(array(
            'idStyle' => 6
        ));
        while ($row = $result->fetch()){
            echo "['".$row['nomStylesecondaire_StyleSecondaire']."', ".$row['compteur']."],";
        } ?>
        ]);
        var options = {
        title: 'Votes par styles',
        backgroundColor: 'black',
        is3D: true,
        legend: {textStyle: {color: 'white', fontSize: 16}},
        height:'500'
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart6'));
        chart.draw(data, options);
    }
</script>
<div class="mt-5 mt-sm-none contenair position-relative"></div>  <!-- div intercalaire -->
<div class="row">
    <!-- Display the pie chart -->
    <div class="col-12 col-xl-6 text-center mt-3">
        <h3 class="mt-1">Metal Extreme</h3>
        <div id="piechart"></div>
    </div>
    <div class="col-12 col-xl-6 text-center mt-xl-3">
        <h3 class="mt-1">Metal Dark Ambiant Atmo</h3>
        <div id="piechart2"></div>
    </div>
    <div class="col-12 col-xl-6 text-center">
        <h3 class="mt-1">Hardcore Punk</h3>
        <div id="piechart3"></div>
    </div>
    <div class="col-12 col-xl-6 text-center">
        <h3 class="mt-1">Metal Hardcore</h3>
        <div id="piechart4"></div>
    </div>
    <div class="col-12 col-xl-6 text-center">
        <h3 class="mt-1">Metal Heavy Thrash</h3>
        <div id="piechart5"></div>
    </div>
    <div class="col-12 col-xl-6 text-center">
        <h3 class="mt-1">Metal Fusion</h3>
        <div id="piechart6"></div>
    </div>
</div>