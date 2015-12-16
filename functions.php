<?php
//Remove RSS Feeds
remove_action( 'wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action( 'wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action( 'wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action( 'wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action( 'wp_head', 'index_rel_link'); // index link
remove_action( 'wp_head', 'parent_post_rel_link'); // prev link
remove_action( 'wp_head', 'start_post_rel_link'); // start link
remove_action( 'wp_head', 'adjacent_posts_rel_link'); // Display relational links for the posts adjacent to the current post.
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head' ); // Display relational links for the posts adjacent to the current post.
remove_action( 'wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version

// you may just want to kill all your RSS Feeds, wordpress does provide
remove_action('do_feed', 'disable_all_feeds', 1);
remove_action('do_feed_rdf', 'disable_all_feeds', 1);
remove_action('do_feed_rss', 'disable_all_feeds', 1);
remove_action('do_feed_rss2', 'disable_all_feeds', 1);
remove_action('do_feed_atom', 'disable_all_feeds', 1);

//Disable WordPress Login Hints
function no_wordpress_errors(){
  return 'Username or password not valid.';
}

add_filter( 'login_errors', 'no_wordpress_errors' );

function register_menus() {
  register_nav_menu( 'header-menu', __( 'Header Menu' ) );
  register_nav_menu( 'social-menu', __( 'Social Media Menu' ) );
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

function theme_customizer( $wp_customize ) {
  $wp_customize->add_section(
    'footer_section',
    array(
      'title' => 'Footer Section',
      'priority' => 35,
    )
  );

  $wp_customize->add_setting(
    'wd_slider',
    array(
      'default' => false,
    )
  );

  $wp_customize->add_control(
    'wd_slider',
    array(
      'label' => 'Homepage Slider',
      'section' => 'title_tagline',
      'type' => 'checkbox',
    )
  );

  $wp_customize->add_setting(
    'wd_slider_id',
    array(
      'default' => '2',
    )
  );

  $wp_customize->add_control(
    'wd_slider_id',
    array(
      'label' => 'Homepage Slider ID (default is: 2)',
      'section' => 'title_tagline',
      'type' => 'text',
    )
  );

  $wp_customize->add_setting(
    'nav_color',
    array(
      'default' => '#FFF'
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Color_Control(
    $wp_customize,
    'nav_color',
    array(
      'label'    => __( 'Header Background Color' ),
      'section'  => 'title_tagline',
      'settings' => 'nav_color'
      )
    )
  );

  $wp_customize->add_setting(
    'body_color',
    array(
      'default' => '#FFF'
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Color_Control(
    $wp_customize,
    'body_color',
    array(
      'label'    => __( 'Website Background Color' ),
      'section'  => 'title_tagline',
      'settings' => 'body_color'
      )
    )
  );

  $wp_customize->add_setting(
    'page_color',
    array(
      'default' => '#FFF'
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Color_Control(
    $wp_customize,
    'page_color',
    array(
      'label'    => __( 'Page Background Color' ),
      'section'  => 'title_tagline',
      'settings' => 'page_color'
      )
    )
  );

  $wp_customize->add_setting(
      'header_background_color',
      array(
          'default' => '#F0A3F5'
      )
  );

  $wp_customize->add_control(
    new WP_Customize_Color_Control(
      $wp_customize,
      'header_background_color',
      array(
        'label'    => __( 'Header Shadow Color' ),
        'section'  => 'title_tagline',
        'settings' => 'header_background_color'
      )
    )
  );

  $wp_customize->add_setting(
    'social_links',
    array(
        'default' => 'Social',
    )
  );

  $wp_customize->add_control(
    'social_links',
    array(
        'label' => 'Social links text',
        'section' => 'footer_section',
        'type' => 'text',
    )
  );

  $wp_customize->add_setting(
    'contact_us',
    array(
      'default' => 'Contact Us',
    )
  );

  $wp_customize->add_control(
    'contact_us',
    array(
        'label' => 'Contact Us label',
        'section' => 'footer_section',
        'type' => 'text',
    )
  );

  $wp_customize->add_setting(
  'contact_us_content',
  array(
    'default' => 'If you have any questions or need additional information, please don\'t hesitate to <a title="Contact Us" href="/contacts/">contact us</a>.',
  )
);

  $wp_customize->add_control(
    'contact_us_content',
    array(
        'label' => 'Contact Us Text',
        'section' => 'footer_section',
        'type' => 'textarea',
    )
  );

  $wp_customize->add_setting(
      'footer_background_color',
      array(
          'default' => '#AAA'
      )
  );

  $wp_customize->add_control(
    new WP_Customize_Color_Control(
      $wp_customize,
      'footer_color',
      array(
        'label'    => __( 'Background Color' ),
        'section'  => 'footer_section',
        'settings' => 'footer_background_color'
      )
    )
  );
}

function customizer_css() {
    ?>
    <style type="text/css">
        body { background-color: <?php echo get_theme_mod( 'body_color', '#FFF' ); ?> }
        header { box-shadow: 0 1px 50px <?php echo get_theme_mod( 'header_background_color', '#F0A3F5' ); ?> }
        header nav.navbar { background-color: <?php echo get_theme_mod( 'nav_color', '#FFF' ); ?>; }
        section { background-color: <?php echo get_theme_mod( 'page_color', '#FFF' ); ?> }
        footer { background-color: <?php echo get_theme_mod( 'footer_background_color', '#AAA' ); ?>; }
    </style>
    <?php
}

add_action( 'init', 'register_menus' );
add_shortcode( 'title', 'draw_title' );
add_shortcode( 'facebook', 'facebook' );
add_shortcode( 'contact-form', 'contact_form' );
add_theme_support( 'post-thumbnails' );
add_action( 'customize_register', 'theme_customizer' );
add_action( 'wp_head', 'customizer_css' );
?>
