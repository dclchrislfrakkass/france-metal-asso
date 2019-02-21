<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

//Autorisation execution PHP dans un Widgets
add_filter('widget_text','execute_php_widgets',10);

function execute_php_widgets($html){
   if(strpos($html,"<"."?php")!==false){
   ob_start();
   eval("?".">".$html);
   $html=ob_get_contents();
   ob_end_clean();
   }
return $html;
}