<?php get_header(); ?>

	<section>
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('container');?> >
					<div class="row">
						<?php
							require_once( 'send.php' );
						?>
						<?php the_content(); ?>
					</div>

<?php get_footer(); ?>