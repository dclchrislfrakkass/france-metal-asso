<?php /* Template Name: votes */ ?>
<?php
// Appel conexion a la base
require 'pdo.php';

$title = 'Votes';
ob_start();
?>
<header>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="./index.php/categories/">Retour</a>
            </li>
        </ul>
    </nav>
</header>
<body class="position-absolute mt-sm-3 mt-5 pt-2">
    <div class="mt-5 mt-sm-none contenair position-relative"></div>  <!-- div intercalaire -->
        <?php
        if(!empty($_POST["style"])){
            foreach($_POST["style"] as $check){
                if( !isset($checkoptions) ){
                    $checkoptions = "- ".$check;
                } else { 
                    $checkoptions .= "<br>- ".$check; 
                }
            }
            echo '<div class="row"><div class="col-12"><h3>Vous avez voté pour:</h3><h4 class="ml-4">'.$checkoptions.'</h4></div></div>';
            echo '<div class="col-12 mt-2"><h3>Merci</h3></div>';
        } else {
            echo '<div class="col-12 text-center"><h3>Vous n\'avez rien sélectionné</h3></div>';
        }
        

$content = ob_get_clean();
require 'template.php';
?>