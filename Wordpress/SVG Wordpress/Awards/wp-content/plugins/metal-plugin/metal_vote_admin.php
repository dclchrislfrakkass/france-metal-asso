<div class="wrap">

<?php

if(isset($_POST['submit'])){

 // enregistrement en base de données

 // sanitize_text_field permet de nettoyer des chaines de caracteres en retirant toute balise ou code.
//$vote_metal_contenu=sanitize_text_field($_POST['vote_metal_contenu']);

    //update_option( 'vote_metal_contenu', $_POST['vote_metal_contenu']);
    update_option( 'vote_metal_actif', $_POST['vote_metal_actif']);
    update_option( 'vote_metal_display', $_POST['vote_metal_display']);
    update_option( 'vote_metal_display_pages', $_POST['vote_metal_display_pages']);
    

echo '<div id="messages" class="updated">Reglages enregistré</div>';   

}

?>

<h1><span class="dashicons dashicons-admin-appearance"></span> Réglages du plugin</h1>

    <form action="<?php echo str_replace('%7E','~', $_SERVER['REQUEST_URI']) ?>" name ="vote_metal" method="post">


        <?php

            //$contenu_popup=get_option( 'vote_metal_contenu' ); // aller chercher le contenu de l'option en bdd

            //$contenu_popup=stripslashes($contenu_popup); // enlever les slashes

            

            $vote_metal_actif=get_option( 'vote_metal_actif' ); // aller chercher le contenu de l'option en bdd
            $vote_metal_display=get_option( 'vote_metal_display' ); // aller chercher le contenu de l'option en bdd
            $vote_metal_display_pages=get_option( 'vote_metal_display_pages' ); // aller chercher le contenu de l'option en bdd

            //wp_editor( $contenu_popup, 'vote_metal_contenu' );

        ?>

    <div class="wrap">
        <label for="vote_metal_actif">Activez le plugin ?</label>
        <select name="vote_metal_actif" id="vote_metal_actif">
            <option value="oui" <?php selected($vote_metal_actif, 'oui') ?>>Oui</option>
            <option value="non" <?php selected($vote_metal_actif, 'non') ?>>Non</option>
        </select>
    </div>

    <div class="wrap">
        <label for="vote_metal_display"> Choisissez la/ les pages sur lesquelles vous souhaitez afficher la popup</label>
        <br>
            <select name="vote_metal_display" id="vote_metal_display">

                <option value="1" <?php selected($vote_metal_display, '1') ?>>Sur la page d'accueil</option>
                <option value="2" <?php selected($vote_metal_display, '2') ?>>Sur l'ensemble des pages du site</option>
                <option value="3" <?php selected($vote_metal_display, '3') ?>>Sur les pages selectionnées...</option>

            </select>

    </div>

    <?php

    $args=array(
    'sort_order' =>'asc',
    'sort_column' => 'post_title',
    'post_type' => 'page',
    'post_status' => 'publish'     
    );

    $pages=get_pages( $args);
    // var_dump($pages);


    ?>

    <div class="wrap">
        <select name="vote_metal_display_pages[]" id="vote_metal_display_pages" multiple <?php $vote_metal_display==3?print 'style="display :block" ': print 'style="display:none" ' ?> >

        <?php
        foreach ($pages as $key => $value) {
            $id= $value->ID;
            $post_title=$value->post_title;
            echo '<option value="'.$id.'" ';
            
        in_array($id,$vote_metal_display_pages)?print ' selected ':print'';
            
            echo'>'.$post_title.'<?option>';
        }

        ?>

        </select>
    </div>



        <input type="submit" value="Envoyez" name="submit">

    </form>

</div>
