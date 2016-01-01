<?php get_header(); ?>
<div class="container">
  <div class="row">
    <?php get_template_part('slides'); ?>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <?php if (have_posts()) {?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="col-sm-9">
          <?php the_content(); ?>
        </div>
        <?php endwhile;?>
      <?php }?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
