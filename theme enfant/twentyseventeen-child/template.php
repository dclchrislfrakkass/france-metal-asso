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
<<<<<<< HEAD
    
    <script>

    var checkbox = document.querySelectorAll("[type=checkbox]");

=======
    <script src="<?php echo get_template_directory_uri(); ?>-child/script.js">
    var checkbox = document.querySelectorAll("[type=checkbox]");
>>>>>>> 18f88fb94314677093b01ebd91236be3fb3022e3
    var checkboxlenght = checkbox.length;
    var longueur = <?php echo json_encode($longueur); ?>;

    for (i = 0; i<checkboxlenght; i++){
        checkbox[i].addEventListener("change", function (){
            if (document.querySelectorAll(":checked").length > longueur){
                this.checked = false;
                alert('3 votes maximum svp');
            }  
        }, false);
<<<<<<< HEAD
    };

=======
    };    
>>>>>>> 18f88fb94314677093b01ebd91236be3fb3022e3
    </script>
</body>
</html>