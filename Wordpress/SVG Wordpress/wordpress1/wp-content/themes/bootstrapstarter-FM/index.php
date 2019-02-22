<?php get_header(); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<div class="col-sm-8 blog-main">

    <?php
    if ( have_posts() ) {
        while ( have_posts() ) : the_post();
    ?>
    <div class="blog-post">
        <h2 class="blog-post-title"><?php the_title(); ?></h2>
        <p class="blog-post-meta"><?php the_date(); ?> by <?php the_author(); ?></p>
        <?php the_content(); ?>
    </div><!-- /.blog-post -->
    <?php
        endwhile;
    }
    ?>
</div>

<!-- /.blog-main -->

<?php get_sidebar(); ?>

    </div> <!-- /.row -->
    This entry was posted on <?php the_time('l, F jS, Y') ?> and is filed under <?php the_category(', ') ?>.
    <nav>
        <ul class="pager">
            <li><?php next_posts_link('Previous'); ?></li>
            <li><?php previous_posts_link('Next'); ?></li>
        </ul>
    </nav>

</div><!-- /.blog-main -->
<?php get_footer(); ?>