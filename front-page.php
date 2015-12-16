<?php
  get_header();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class();?>>
  <div class="row">
    <?php
    $slider    = get_theme_mod( 'wd_slider', false );
    $slider_id = get_theme_mod( 'wd_slider_id', 2 );

    if ( $slider ) {
      wd_slider( $slider_id );
    }
    ?>
    <h1 class="title"><?php echo get_bloginfo('name');?></h1>
    <p style="text-align: center;"><?php echo get_bloginfo('description');?></p>
    <?php
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();
        the_content();
      }
    }
    ?>
  </div>
</article>

<?php get_footer(); ?>
