<?php
/**
 * @package Bootstrap to WordPress
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );

		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		 endif; ?>

		<p class="author-date">
			<?php the_author(); ?>
			&middot;
			<?php the_time('j F Y'); ?>
		</p>

	</header><!-- .entry-header -->

	<div class="post-body">
		<?php the_content(); ?>
	</div><!-- post-excerpt -->

</article>
