					<footer>
						<div class="container">
							<div class="row">
								<div class="footer-col social col-md-6">
									<h3  class="title">Social Links</h3>
									<a href="https://www.facebook.com/groups/165288720181270/" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
									<a href="http://instagram.com/sunny_k_makeupartist/" class="btn-social btn-outline"><i class="fa fa-fw fa-instagram"></i></a>
									<a href="https://twitter.com/Sunny_k_MUA" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
								</div>
								<div class="footer-col col-md-6">
									<h3  class="title">Contact Us</h3>
									<p>If you have any questions or need additional information, please don't hesitate to <a title="Contact Us" href="<?php echo $_SERVER['REQUEST_URI'] . 'contacts/' ?>">contact us</a>.</p>
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
								<p class="copy">Developed with <i class="fa fa-heart"></i> by <a href="https://github.com/andreasonny83" alt="andreasonny83 on GitHub">&lt;SonnY&gt;</a></p>
							</div>
						</div>
					</footer>

				</article>

	</section>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.easing.1.3.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<?php wp_footer(); ?>
</body>
</html>
