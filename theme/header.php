<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="NewThème">
<meta name="author" content="Frédéric Brodar">

<title>Nouveau template</title>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
     <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
     <!--  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-metal.css">-->
   <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">-->
       <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
            <a class="blog-nav-item active" href="#">Acceuil</a>
            <a class="blog-nav-item" href="#">Articles</a>
            <a class="blog-nav-item" href="#">Liens</a>
            <a class="blog-nav-item" href="#">Portfolio</a>
            <a class="blog-nav-item" href="#">Contact</a>
        </nav>
    </div>
</div>



    