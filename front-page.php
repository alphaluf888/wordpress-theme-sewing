<?php get_header(); ?>
<div class="container">
  <div class="row">
    <?php get_template_part('slides'); ?>
  </div>
  <div class="row">
    <div class="col-sm-3">
        <?php get_template_part('frontpage-about-us'); ?>
    </div>
    <?php
    $temp = $wp_query;
    $wp_query= null;
    $args = array(
      'posts_per_page' => 6,
      'category_name' => 'products'
    );
    $wp_query = new WP_Query($args);
    ?>
    <?php $count = 0; ?>
    <div class="col-sm-9">
      <h2>Product Gallery</h2>
      <a href="http://localhost/wordpress/products/"><p class="text-right small">See More ...</p></a>
      <hr>

      <div class="row">
        <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <?php if ($count < 3 ) { ?>
          <div class="col-md-4">
            <?php if ( has_post_thumbnail() ) {?>
              <a class="thumbnail" href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
            <?php } ?>
          </div>
        <?php } ?>
        <?php $count++; endwhile;?>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-3">
      <?php get_template_part('frontpage-contact-us'); ?>
    </div>
    <div class="col-sm-9">
      <div class="row">
        <?php $count = 0; ?>
        <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <?php if ($count >= 3 ) { ?>
          <div class="col-md-4">
            <?php if ( has_post_thumbnail() ) {?>
              <a class="thumbnail" href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
            <?php } ?>
          </div>
        <?php } ?>
        <?php $count++; endwhile;?>
      </div>
    </div>
  </div>
  <?php
  $wp_query= null;
  $args = array(
    'category_name' => 'machine-video'
  );
  $wp_query = new WP_Query($args);
  ?>
  <?php $count = 0; ?>
  <div class="row">
    <div class="col-sm-12">
      <h2>Machine Video</h2>
      <hr>
      <div id="owl-product-effects" class="owl-carousel">
        <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
          <div style="max-height:200px;">
            <?php if ( has_post_thumbnail() ) {?>
              <a class="thumbnail" href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
            <?php } ?>
          </div>
        <?php endwhile;?>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>
