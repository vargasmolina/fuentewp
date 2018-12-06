<?php 
/*
Template Name: Full-width Pagina
Template Post Type: post, page
*/

get_header(); ?>
<section> 
    <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
            get_template_part( 'content/page','full' );
        endwhile;
    ?>
</section>
<?php get_footer(); ?>