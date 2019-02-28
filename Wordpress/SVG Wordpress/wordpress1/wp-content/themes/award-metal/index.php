<!DOCTYPE html>
  <html>
    <head>
      <?php wp_head(); ?>  

      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <link href="<?php echo get_template_directory_uri(); ?>/style-metal.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      
                    <?php 
                    // the query
                    $the_query = new WP_Query( 
                      array(
                        'category_name' => 'cat',
                        'order'=> 'DESC'
                        ) 
                      ); 
                    ?>


          <nav>
            <div class="nav-wrapper">
              <a href="#" class="brand-logo"><img src="<?php echo get_template_directory_uri(); ?>/logo-france-metal.png" alt=""></a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                  <?php if ( $the_query->have_posts() ) : ?>
                  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                  <li><a href=""><?php the_title(); ?></a></li>
                  <?php endwhile; ?>
                  <?php wp_reset_postdata(); ?>
                  <?php endif; ?>
              </ul>
            </div>
          </nav>






          <?php 

          // the query
          $the_query = new WP_Query( array( 'category_name' => 'cat' ) );
          ?>
          

          <?php if ( $the_query->have_posts() ) : ?>

          <!-- pagination here -->

          <!-- the loop -->
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

          <?php 
          $imageAlaUneId=get_post_thumbnail_id();
          $imgSrc=wp_get_attachment_url( $imageAlaUneId );
          ?>
          <img src="<?php echo $imgSrc; ?>" alt="">
          <h2><?php the_title(); ?></h2>
          <p><?php the_content(); ?></p>

          <?php include ('affichage_categorie.php')?>
          

          
          <?php endwhile; ?>
          <!-- end of the loop -->

          <!-- pagination here -->

          <?php wp_reset_postdata(); ?>

          <?php else : ?>
          <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>






          <!-- JQuery -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <!-- Compiled and minified JavaScript -->
          <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

          <script>
            $(document).ready(function(){
              $('.sidenav').sidenav();
            });
          </script>

          <?php wp_footer(); ?>
    </body>
  </html>