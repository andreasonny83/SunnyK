					<footer>
						<div class="container">
							<div class="row">
								<div class="footer-col social col-md-6">
									<h3  class="title">
										<?php echo get_theme_mod( 'social_links', 'Social' ); ?>
									</h3>
									<?php
									$locations  = get_nav_menu_locations();
									$menu       = wp_get_nav_menu_object( $locations['social-menu'] );
									$menu_items = wp_get_nav_menu_items( $menu->term_id );
									foreach ( $menu_items as $key => $menu_item ) {
										$title        = $menu_item->title;
										$url          = $menu_item->url;
										$button_class = $menu_item->classes[0];
										$li_class     = 'col-xs-6 col-sm-2';

										if ( $key === 0 ) {
											$li_class = 'col-xs-6 col-sm-2 col-sm-offset-1';
										}
										else if ( $key === 4 ) {
											$li_class = 'col-xs-12 col-sm-2';
										}

										$output  = "<a href='$url' class='btn-social btn-outline'><i class='materialButton round fa fa-fw $button_class fa-3x'></i></a>";
										echo $output;
									}
									?>
								</div>
								<div class="footer-col col-md-6">
									<h3 class="title"><?php echo get_theme_mod( 'contact_us', 'Contact Us' );?></h3>
									<p><?php echo get_theme_mod( 'contact_us_content', 'Contact Us' );?></p>
								</div>
							</div>
						</div>
						<div class="footer-below">
							<div class="container">
								<div class="row">
									<?php
									$footer = get_page_by_path( 'footer' );
									setup_postdata( $footer );
									the_content();
									?>
							</div>
						</div>
					</footer>

	</section>

	<script src="<?php bloginfo('template_url'); ?>/js/jquery.1.11.1.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.easing.1.3.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.3.3.1.min.js"></script>
	<?php wp_footer(); ?>
</body>
</html>
