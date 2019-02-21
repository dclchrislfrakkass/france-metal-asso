<form enctype="multipart/form-data" action="" method="post">
<!-- MAX_FILE_SIZE doit précéder le champ input de type file --><!-- Le nom de l'élément input détermine le nom dans le tableau $_FILES -->
Envoyez ce fichier : <input name="userfile" type="file" />
<input type="submit" value="Envoyer le fichier" />
</form>

<?php
// Dans les versions de PHP antiéreures à 4.1.0, la variable $HTTP_POST_FILES
// doit être utilisée à la place de la variable $_FILES.

$file_name = $_FILES['userfile']['name'];
$file_dir = dirname(__FILE__)."/uploads/";
// $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
var_dump($file_name);
echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $file_dir.$file_name)) {
    echo "Le fichier est valide, et a été téléchargé
        avec succès. Voici plus d'informations :\n";
} else {
    echo 'FUCK !';
}

echo 'Voici quelques informations de débogage :';
print_r($_FILES);
var_dump($file_dir);
echo '</pre>';

?>