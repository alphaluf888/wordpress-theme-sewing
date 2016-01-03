<div class="col-xs-12">
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
    <?php wp_reset_query();?>
  <?php } else {?>
    no content
  <?php }?>
</div>
