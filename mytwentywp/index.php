<?php get_header(); ?>
<?php
if (have_posts()) :
  while (have_posts()) :
    the_post(); ?>
    <div class="row">
      <div class="info">
        <?php
          $metadata = wp_get_attachment_metadata();
          if ($metadata){
            $image_size = apply_filters( 'mytwentyswp_attachment_size', 'large' );
            echo wp_get_attachment_image( get_the_ID(), $image_size );
            echo get_the_ID();
          } else {
            ?>
            <h1><img src="<?php print IMAGES; ?>/<?php echo dynamicImage(); ?>" alt="<?php bloginfo('name'); ?>" /></h1>
            <?php
            echo get_the_ID();
          }
        ?>
      </div>
      <div class="info">
        <h2><?php the_title(); ?></h2>
        <?php the_excerpt()?>
        <?php
          //the_content();
        ?>
        <div class="navbar2"><a href="<?php the_permalink(); ?>"><?php echo get_the_ID(); ?></a></div>
      </div>
    </div>
    <hr>
  <?php endwhile;
else:
  echo '<p>2. No posts.</p>';
endif;
?>

<?php get_footer(); ?>
