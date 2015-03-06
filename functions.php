<?php
function register_menus() {
  register_nav_menu( 'header-menu', __( 'Header Menu' ) );
  register_nav_menu( 'footer-menu', __( 'Footer Menu' ) );
}

function draw_title( $atts, $content = null ) {
	return '<h1 class="title">' . $content . '</h1>';
}

function facebook() {
	return '<a href="https://www.facebook.com/groups/165288720181270/" class="btn-social portfolio btn-outline"><i class="fa fa-fw fa-facebook"></i></a>';
}

function contact_form( $atts, $content = null ) {
	$output = '
	<form method="post" action="' . $_SERVER['REQUEST_URI'] . '" id="contact_form" name="contact_form">
		<div class="form-group">
		<label for="userName">Enter your name</label>
		<input type="text" class="form-control" id="userName" name="userName" placeholder="Your name" required>
		</div>
		<div class="form-group">
		<label for="userEmail">Email address</label>
		<input type="email" class="form-control" id="userEmail" name="userEmail" placeholder="Enter email" required>
		</div>
		<div class="form-group">
		<label for="userPhone">Telephone</label>
		<input type="number" class="form-control" id="userPhone" name="userPhone" placeholder="Enter phone number" required>
		</div>
		<div class="form-group">
		<label for="userComment">Nature of Enquiry</label>
		<textarea class="form-control" placeholder="Leave your message here" rows="5" id="userComment" name="userMessage" required></textarea>
		</div>
		<button type="submit" name="Submit" class="btn btn-default">Submit</button>
	</form>';

	return $output;
}

add_action( 'init', 'register_menus' );
add_shortcode( 'title', 'draw_title' );
add_shortcode( 'facebook', 'facebook' );
add_shortcode( 'contact-form', 'contact_form' );
add_theme_support( 'post-thumbnails' );
?>