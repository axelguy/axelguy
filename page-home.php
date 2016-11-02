<?php
/*
	Template Name: Home Page
*/

get_header(); ?>

<div class="container">
	<div class="row">
		<div id="icons" class="col-sm-6 col-sm-offset-3">

			<?php $loopLinks = new WP_Query( array(
				'post_type' => 'icon_link',
				'orderby' 	=> 'post_id',
				'order'		=> 'ASC'
				) );
			?>

			<?php while( $loopLinks -> have_posts() ) : $loopLinks -> the_post(); ?>

				<a href="<?php the_field( 'link' ); ?>" target="_blank" class="social">
					<i class="<?php the_field( 'icon_name' ); ?>"></i>
				</a>

			<?php endwhile; ?>


		</div>
	</div>
</div>

<?php get_footer(); ?>
