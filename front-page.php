<?php get_header(); ?>
<div class="container">
  <div class="row">
    <?php get_template_part('slides'); ?>
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

  <div class="row">
    <div class="col-sm-3">
      <h2>About us</h2>
      <hr>
      <p>
        This is the about us section.
        This is the about us section.
        This is the about us section.
        This is the about us section.
        This is the about us section.
        This is the about us section.
      </p>
    </div>
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
      <h2>Contact us</h2>
      <hr>
      <h4>Rambo Sewing Equipment Manufacturing Co. Ltd</h4>
      <p><strong>Address: </strong>NO.99 West Beijing Road, XinYi Economic Development Park,Xuzhou,Jiangsu Province, China</p>
      <p><strong>Tel: </strong>0516-88593698</p>
      <p><strong>Fax: </strong>0516-81610389</p>
      <p><strong>Email: </strong>sewingindustries@163.com</p>
      <p><strong>Mobile: </strong>0086-13501780552</p>
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
      <h2>Factory Gallery</h2>
      <hr>
      <div id="owl-product-effects" class="owl-carousel">
        <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
          <div style="max-height:200px;">
            <?php if ( has_post_thumbnail() ) {?>
              <a class="thumbnail" href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
            <?php } ?>
          </div>
        <?php endwhile;?>

        <div>
          <img src="img/RM-1014.jpg" alt="Third product picture in top carousel slides" style="max-height:200px;">
        </div>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>
