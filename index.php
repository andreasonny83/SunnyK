<?php get_header(); ?>
	<header>
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo get_option('home'); ?>"><span class="title">Sunny K</span><span class="desc">Makeup Artist and Creative Hair Stylist</span></a>
				</div>
				<div class="collapse navbar-collapse">
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'sort_column' => 'menu_order', 'container' => false, 'menu_class' => 'nav navbar-nav' ) ); ?>
				</div>
			</div>
		</nav>
	</header>
	<section>
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('container');?> >
					<div class="row">
						<?php
						if ( !empty( $_POST ) ) {
							require_once( 'template.php' );
						}
						else {

						}
						?>
<!-- 							<div class="col-md-12">
							<div class="alert alert-success alert-dismissible fade in" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
								<p>Your mail has been sent.</p>
							</div>
							<div class="alert alert-danger alert-dismissible fade in" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
								<h4>Oh snap! Something went wrong!</h4>
								<p>Your message has not been sent. Please try again or use another contact method.</p>
							</div>
 -->							<?php the_content(); ?>
						</div>
					</div>
				</article>
			<?php endwhile; ?>
		<?php endif; ?>
	</section>
<?php get_footer(); ?>