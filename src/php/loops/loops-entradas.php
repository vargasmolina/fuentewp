<?php
/**
 * Loop Name: LOOPS ENTRADAS
 */

global $wp_query;
$total_paginas = $wp_query->max_num_pages;

?>

<?php if ( have_posts() ) : ?>

<div class="entradas"> 
	<?php /* Start the Loop */ 
	while ( have_posts() ) : the_post(); $i++; 
	?>


	<?php if( has_post_thumbnail() ) : ?>
		<a class="grid-thumbnail" href="<?php the_permalink() ?>">
			<?php the_post_thumbnail('th-entrada') ?>
		</a>
	<?php endif; ?>

	<?php the_title();?>
	<? the_excerpt(); ?>
	<a class="grid-thumbnail" href="<?php the_permalink() ?>"> Ver mas </a>

	<?php endwhile; ?>
</div>

<?php // pagination($total_paginas, false, 2);  ?>

<?php else : ?>

	<?php get_template_part( 'content/no-resultado', 'index' ); ?>

<?php endif; ?>
