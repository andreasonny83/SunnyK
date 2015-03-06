<?php get_header(); ?>

	<section>
		<article id="post-<?php the_ID(); ?>" <?php post_class('container');?> >

			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<div class="row">
						<?php
							require_once( 'send.php' );
						?>
						<?php the_content(); ?>
					</div>

			<?php endwhile; ?>
		<?php endif; ?>

<?php get_footer(); ?>