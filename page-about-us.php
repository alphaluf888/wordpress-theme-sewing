<?php get_header(); ?>
<div class="container">
  <div class="row">
    <?php get_template_part('slides'); ?>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <?php
          $wp_query= null;
          $args = array(
            'pagename' => 'about-us'
          );
          $wp_query = new WP_Query($args);
      ?>
      <?php if ($wp_query->have_posts()) {?>
        <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile;?>
        <?php wp_reset_postdata();?>
      <?php } else {?>
        no content
      <?php }?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
