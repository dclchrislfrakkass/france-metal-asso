<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>-child/style-metal.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title><?= $title ?></title>
</head>

    <?= $content; ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


    <script>

    var checkbox = document.querySelectorAll("[type=checkbox]");

    var checkboxlenght = checkbox.length;
    var longueur = <?php echo json_encode($longueur); ?>;

    for (i = 0; i<checkboxlenght; i++){
        checkbox[i].addEventListener("change", function (){
            if (document.querySelectorAll(":checked").length > longueur){
                this.checked = false;
                alert('3 votes maximum svp');
            }  
        }, false);
    };

    </script>


<!-- Script pour graph2 -->
<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var data2 = google.visualization.arrayToDataTable([
    ['Groupe', 'Votes'],
    <?php
    // Get data from database
    $result = $bd->query("SELECT nomStylePrincipal_StylePrincipal, SUM(note_Album) AS compteur FROM groupe
    NATURAL JOIN album
    NATURAL JOIN stylesecondaire
    NATURAL JOIN styleprincipal
    NATURAL JOIN a_voté_pour
    GROUP BY nomStylePrincipal_StylePrincipal
    ORDER BY note_Album DESC");
    ?>
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

<!-- Script pour graph1 -->
<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var data = google.visualization.arrayToDataTable([
    ['Groupe', 'Votes'],
    <?php
    // Get data from database
    $result = $bd->query("SELECT nomGroupe_Groupe, note_Album FROM groupe
    NATURAL JOIN album
    NATURAL JOIN stylesecondaire
    NATURAL JOIN styleprincipal
    NATURAL JOIN a_voté_pour
    GROUP BY nomGroupe_Groupe
    ORDER BY note_Album DESC LIMIT 10");
    ?>
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

<!-- Script pour graph3 -->
<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var data3 = google.visualization.arrayToDataTable([
    ['Groupe', 'Votes'],
    <?php
    // Get data from database
    $result = $bd->query("SELECT nomStyleSecondaire_StyleSecondaire, SUM(note_Album) AS compteur FROM groupe
    NATURAL JOIN album
    NATURAL JOIN stylesecondaire
    NATURAL JOIN styleprincipal
    NATURAL JOIN a_voté_pour
    GROUP BY nomStylesecondaire_StyleSecondaire
    ORDER BY note_Album DESC LIMIT 10");
    ?>
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

<!-- Script pour minigraph -->
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











</body>
</html>