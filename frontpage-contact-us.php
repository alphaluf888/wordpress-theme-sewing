<div class="col-xs-12">
  <?php
      $my_query= null;
      $args = array(
        'pagename' => 'contact-us'
      );
      $my_query = new WP_Query($args);
  ?>
  <?php if ($my_query->have_posts()) {?>
    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile;?>
  <?php } else {?>
    no content
  <?php }?>
</div>
