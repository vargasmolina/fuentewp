<?php
/**
 * Loop Name: LOOPS ENTRADA
 */
// global $wp_query;
// var_dump($wp_query->query_vars);
// $total_paginas = $wp_query->max_num_pages;
?>

<?php
/**
 * Loop Name: LOOPS ENTRADAS
 */

global $wp_query;
$total_paginas = $wp_query->max_num_pages;

?>

<?php if ( have_posts() ) : ?>

<div id="entradas"> 
	<?php /* Start the Loop */ ?>
	<?php while ( have_posts() ) : the_post(); $i++; ?>


	<?php if( has_post_thumbnail() ) : ?>
		<a class="grid-thumbnail" href="<?php the_permalink() ?>">
			<?php the_post_thumbnail('th-entrada') ?>
		</a>
	<?php endif; ?>

	<?php the_title(); the_excerpt(); ?>


	<?php endwhile; ?>
</div>

<?php pagination($total_paginas, false, 10);  ?>

<?php else : ?>

	<?php get_template_part( 'content/no-resultado', 'index' ); ?>

<?php endif; ?>
