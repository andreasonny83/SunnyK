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

function draw_table() {
	?>
	<table class="table">
		<caption>Optional table caption.</caption>
		<thead>
			<tr>
				<th>#</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Username</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">1</th>
				<td>Mark</td>
				<td>Otto</td>
				<td>@mdo</td>
			</tr>
			<tr>
				<th scope="row">2</th>
				<td>Jacob</td>
				<td>Thornton</td>
				<td>@fat</td>
			</tr>
			<tr>
				<th scope="row">3</th>
				<td>Larry</td>
				<td>the Bird</td>
				<td>@twitter</td>
			</tr>
		</tbody>
	</table>
	<?php
}

function contact_form( $atts, $content = null ) {
	$output = '
	<form method="post" action="' . $_SERVER['REQUEST_URI'] . '" id="contact_form">
		<div class="form-group">
		<label for="userName">Enter your name</label>
		<input type="text" class="form-control" id="userName" placeholder="Your name" required>
		</div>
		<div class="form-group">
		<label for="userEmail">Email address</label>
		<input type="email" class="form-control" id="userEmail" placeholder="Enter email" required>
		</div>
		<div class="form-group">
		<label for="userComment">Nature of Enquiry</label>
		<textarea class="form-control" placeholder="Leave your message here" rows="5" id="userComment" required></textarea>
		</div>
		<button type="submit" class="btn btn-default">Submit</button>
	</form>';

	return $output;
}

function review_box( $atts, $content = null ) {

	extract( shortcode_atts( array(
		"title" => ''
	), $atts ) );

	$output = '
	<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-info">
	<div class="panel-heading">
	<h3 class="panel-title">' . $title . '</h3>
	</div>
	<div class="panel-body">' . $content . '</div>
	</div>
	</div>';

	return $output;
}

add_action( 'init', 'register_menus' );
add_shortcode( 'title', 'draw_title' );
add_shortcode( 'facebook', 'facebook' );
add_shortcode( 'contact-form', 'contact_form' );
add_shortcode( 'review_box', 'review_box' );
?>