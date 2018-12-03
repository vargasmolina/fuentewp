<?php get_header(); ?>
<section> 
    <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
            get_template_part( 'content/page','full' );
        endwhile;
    ?>
</section>
<aside> <? dynamic_sidebar( 'lateral-portada' ); ?> </aside>

<?php get_footer(); ?>