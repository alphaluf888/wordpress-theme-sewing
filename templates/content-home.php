<?php while(have_posts()) : the_post() ?>
  <?php $slide="slide1"; echo get_post_meta($post->ID, $slide, true); ?>
<?php endwhile; ?>
