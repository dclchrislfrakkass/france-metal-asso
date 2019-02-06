<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Awards France Metal</title>
</head>
<body>
<?php 

// $req = $bdd->query('SELECT nomStylePrincipal_StylePrincipal FROM stylePrincipal');

// $row = $req->fetch()
// // echo $row;
//     // var_dump($row['nomStylePrincipal_StylePrincipal']);

// 
    require '../php/pdo.php';
    echo '<h1>'.'connard'.'</h1>';
    // Recuperation des styles principaux:

    $req = $bdd->query("SELECT nomStylePrincipal_StylePrincipal FROM styleprincipal");

    while ($row = $req->fetch()){
        // var_dump($row);
       $aa ='<h1>'.$row['nomStylePrincipal_StylePrincipal'].'</h1>';
    }?>
<div class="container-fluid">
<div class="row">
    <!-- Card -->
    <div class="card col-5">

    <!-- Card image -->
    <div class="view overlay">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap">
        <a href="#!">
        <div class="mask rgba-white-slight"></div>
        </a>
    </div>

    <!-- Card content -->
    <div class="card-body">

        <!-- Title -->
        <h4 class="card-title"><?= $aa?></h4>
        <!-- Text -->
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <!-- Button -->
        <a href="#" class="btn btn-primary">Button</a>

    </div>

    </div>
    <!-- Card -->

    <!-- Card -->
    <div class="card col-5">

    <!-- Card image -->
    <div class="view overlay">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap">
        <a href="#!">
        <div class="mask rgba-white-slight"></div>
        </a>
    </div>

    <!-- Card content -->
    <div class="card-body">

        <!-- Title -->
        <h4 class="card-title"><?= $aa?></h4>
        <!-- Text -->
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <!-- Button -->
        <a href="#" class="btn btn-primary">Button</a>

    </div>

    </div>
    <!-- Card -->

</div>
</div>







    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>