<?php
  get_header();
  require_once( 'send.php' );
?>
<article id="post-<?php the_ID();?>" <?php post_class();?>>
  <div class="row">
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
