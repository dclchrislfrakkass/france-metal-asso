<?php
/*
Plugin Name: Metal vote
Plugin Uri: http://awards.france-metal.fr/
Description: Un Plugin de Vote Metal Award
Version: 1.0
Author: Aformac
Author URI:  http://awards.france-metal.fr/
Licence: GPL2

*/

function metal_vote_page(){

 add_menu_page( 'Plugin de Popup | Réglages', 'Vote Metal', 'administrator', 'vote_metal', 'vote_metal_fonction', 'dashicons-format-aside', 40 );

   // add_submenu_page( 'options-general.php', 'Plugin de Popup | Réglages', 'Vote Metal', 'administrator', 'vote_metal', 'vote_metal_fonction');
}

add_action('admin_menu','metal_vote_page');

function vote_metal_fonction(){
    include('metal_vote_admin.php');
}

function metal_vote_admin_js(){

    wp_enqueue_script('jquery_admin', plugins_url( 'metal_vote_admin.js', __FILE__), array('jquery'), '1.0');
    wp_enqueue_style('admin_css', plugins_url( 'metal_vote_admin.css', __FILE__));

}

add_action( 'admin_menu', 'metal_vote_admin_js');

function metal_vote_jscss(){
    wp_enqueue_script('wp_vote_metal_js', plugins_url( 'metal_vote.js', __FILE__), array('jquery'), '1.0');
    wp_enqueue_style('wp_vote_metal_css', plugins_url( 'metal_vote.css', __FILE__));
    wp_enqueue_style('style_metal_css', plugins_url( 'style-metal.css', __FILE__));

}

add_action('wp_head', 'metal_vote_jscss');

function metal_vote_content_display(){

    //$contenu_popup=get_option( 'vote_metal_contenu' ); // aller chercher le contenu de l'option en BD
    //$contenu_popup=stripslashes($contenu_popup);

    $contenu_popup=include('affichage_categorie.php');


    
       // echo '<div id="dropElem"><!-- wrapper -->
        //    <div id="dropContent"><!-- Inside this tag put your popup contents -->
         //       <div id="dropClose">X</div><!-- this will serve as close button -->
         //       '.$contenu_popup.'
         //   </div>
       // </div>';

        echo $contenu_popup;
    }


function metal_vote_display_options(){

	$vote_metal_actif=get_option( 'vote_metal_actif' ); // aller chercher le contenu de l'option en bdd
    $vote_metal_display=get_option( 'vote_metal_display' ); // aller chercher le contenu de l'option en bdd
    $vote_metal_display_pages=get_option( 'vote_metal_display_pages' ); // aller chercher le contenu de l'option en bdd

	if($vote_metal_actif== 'oui'){

		if($vote_metal_display==1){ // sur la page d'accueil uniquement

			if( is_front_page() || is_home() ){
				add_action('wp_footer','metal_vote_content_display');
			}


		} else if($vote_metal_display==2){ // sur toutes les pages
			add_action('wp_footer','metal_vote_content_display');
		}else{ // sur certaines pages uniquement

			$page_id=get_the_ID();
			if(in_array($page_id,$vote_metal_display_pages)){
				if(is_page()){
					add_action('wp_footer','metal_vote_content_display');
					}
			}

		}
	}

}

add_action('wp_head', 'metal_vote_display_options');


// Fonction à rajouter pour rendre le plugin traduisible
function jb_popup_load_text_domain(){
	load_plugin_textdomain( 'wp_popup_jb', false, dirname(plugin_basename(__FILE__)).'/languages/' );
}

add_action('plugins_loaded','jb_popup_load_text_domain');


/////////////////////////////////////////////////////////////////////////////////////////////

//function vote_metal_fonction(){
//    include('affichage_categorie.php');
//}

// add_action('wp_head', 'vote_metal_fonction');