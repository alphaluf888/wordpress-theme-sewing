<?php get_header(); ?>
<div class="container">
  <div class="row">
    <?php get_template_part('slides'); ?>
  </div>
  <div class="row">
    <div class="col-sm-3">
      <ul class="nav nav-pills nav-stacked">
        <!-- <li role="presentation" class="active"><a href="#">Home</a></li> -->
        <?php wp_list_categories(array("title_li" => "", "orderby" => "ID", "exclude" => "1,3", "hide_empty" => 0)); ?>
      </ul>
    </div>

    <?php while (have_posts()) : the_post(); ?>
    <div class="col-sm-9">
      <?php the_content(); ?>
    </div>
    <?php endwhile;?>
  </div>
</div>

<?php get_footer(); ?>
