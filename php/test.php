<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Card Tittle</title>
</head>
<body>

<?php
// session_start();
// Appel conexion a la base
require '../php/pdo.php'; ?>

        <!-- Grid row -->
        <div class="row">

        <!-- Grid column -->
        <div class="col-md-10 col-lg-9 col-xl-6 mb-r">

            <!--Panel-->
            <div class="card card-body mb-3">
            <div class="media d-block d-md-flex">
                <img class="d-flex avatar-2 mb-md-0 mb-3 mx-auto" src="https://www.lagrosseradio.com/_images/fck/1553.jpg"
                alt="Generic placeholder image">
                <div class="media-body text-center text-md-left ml-md-3 ml-0">
                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia magni dolores
                    eos qui ratione voluptatem sequi nesciunt.</p>
                <button type="button" class="btn btn-primary btn-md">Read more</button>
                </div>
            </div>
            </div>
            <!--/.Panel-->

            <!--Panel-->
            <div class="card card-body mb-3">
            <div class="media d-block d-md-flex">
                <img class="d-flex avatar-2 mb-md-0 mb-3 mx-auto" src="http://www.doloremrecords.com/promo/NEPHREN%20KA%20COVER%20ART%20final%201400x1400.jpg"
                alt="Generic placeholder image">
                <div class="media-body text-center text-md-left ml-md-3 ml-0">
                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia magni dolores
                    eos qui ratione voluptatem sequi nesciunt.</p>
                <button type="button" class="btn btn-primary btn-md">Read more</button>
                </div>
            </div>
            </div>
            <!--/.Panel-->

            <!--Panel-->
            <div class="card card-body">
            <div class="media d-block d-md-flex">
                <img class="d-flex avatar-2 mb-md-0 mb-3 mx-auto" src="https://www.lagrosseradio.com/_images/fck/20184.jpg"
                alt="Generic placeholder image">
                <div class="media-body text-center text-md-left ml-md-3 ml-0">
                <p> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
                    placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Itaque earum rerum
                    hic tenetur a sapiente delectus.</p>
                    <button type="button" class="btn btn-primary btn-md">Read more</button>
                </div>
            </div>
            </div>
            <!--/.Panel-->

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-10 col-lg-9 col-xl-6">


<!--Panel-->
<div class="card card-body mb-3">
<div class="media d-block d-md-flex">
    <img class="d-flex avatar-2 mb-md-0 mb-3 mx-auto" src="data:image/jpeg;base64,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"
    alt="Generic placeholder image">
    <div class="media-body text-center text-md-left ml-md-3 ml-0">
    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia magni dolores
        eos qui ratione voluptatem sequi nesciunt.</p>
    <button type="button" class="btn btn-primary btn-md">Read more</button>
    </div>
</div>
</div>
<!--/.Panel-->

<!--Panel-->
<div class="card card-body mb-3">
<div class="media d-block d-md-flex">
    <img class="d-flex avatar-2 mb-md-0 mb-3 mx-auto" src="https://i.pinimg.com/236x/1e/fb/79/1efb79e68700173dfccb3710ec2b3ddd--extreme-metal-gojira.jpg"
    alt="Generic placeholder image">
    <div class="media-body text-center text-md-left ml-md-3 ml-0">
    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia magni dolores
        eos qui ratione voluptatem sequi nesciunt.</p>
    <button type="button" class="btn btn-primary btn-md">Read more</button>
    </div>
</div>
</div>
<!--/.Panel-->

<!--Panel-->
<div class="card card-body">
<div class="media d-block d-md-flex">
    <img class="d-flex avatar-2 mb-md-0 mb-3 mx-auto" src="https://i.pinimg.com/236x/82/98/ab/8298ab7330a0a39f6e77f1e460d2231e--metal-albums-music-artwork.jpg"
    alt="Generic placeholder image">
    <div class="media-body text-center text-md-left ml-md-3 ml-0">
    <p> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
        placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Itaque earum rerum
        hic tenetur a sapiente delectus.</p>
        <button type="button" class="btn btn-primary btn-md">Read more</button>
    </div>
</div>
</div>
<!--/.Panel-->

</div>
        
        <!-- Grid column -->

        </div>
        <!-- Grid row -->


        <br>
        <p>ou</p> 
            <br>
            <br>
<ul class="list-unstyled">
<li class="media">
    <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/avatar-min1.jpg" alt="Generic placeholder image">
    <div class="media-body">
    <h5 class="mt-0 mb-2 font-weight-bold">Anna Smith</h5>
    <!--Review-->
    <i class="fas fa-star blue-text"> </i>
    <i class="fas fa-star blue-text"> </i>
    <i class="fas fa-star blue-text"> </i>
    <i class="fas fa-star blue-text"> </i>
    <i class="fas fa-star blue-text"> </i>
    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
        odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
        Donec lacinia congue felis in faucibus.</p>
    </div>
</li>
<li class="media my-4">
    <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/avatar-min2.jpg" alt="Generic placeholder image">
    <div class="media-body">
    <h5 class="mt-0 mb-2 font-weight-bold">Tom Brown</h5>
    <!--Review-->
    <i class="fas fa-star blue-text"> </i>
    <i class="fas fa-star blue-text"> </i>
    <i class="fas fa-star blue-text"> </i>
    <i class="fas fa-star blue-text"> </i>
    <i class="fas fa-star grey-text"> </i>
    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
        odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
        Donec lacinia congue felis in faucibus.</p>
    </div>
</li>
<li class="media">
    <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/avatar-min3.jpg" alt="Generic placeholder image">
    <div class="media-body">
    <h5 class="mt-0 mb-2 font-weight-bold">Natalie Doe</h5>
    <!--Review-->
    <i class="fas fa-star blue-text"> </i>
    <i class="fas fa-star blue-text"> </i>
    <i class="fas fa-star blue-text"> </i>
    <i class="fas fa-star grey-text"> </i>
    <i class="fas fa-star grey-text"> </i>
    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
        odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
        Donec lacinia congue felis in faucibus.</p>
    </div>
</li>
</ul>

<!-- 

        <div class="jumbotron">
            <h2 class="h1-responsive">GROUPE XX</h2>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention
                to featured content or information.</p>
            <hr class="my-2">
            <p>It uses utility classes for typography and spacing to space content out within the larger
                container.
            </p>
            <a class="btn btn-primary btn-lg" role="button">Voir Plus</a>
        </div> -->





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>