<?php get_header(); ?>
<div class="container">
  <div class="row">
    <?php get_template_part('slides'); ?>
  </div>
  <div class="row">
    <div class="col-sm-3">
      <ul class="nav nav-pills nav-stacked">
        <!-- <li role="presentation" class="active"><a href="#">Home</a></li> -->
        <?php
          $categories = get_the_category();
          $category_type = null;
          foreach ($categories as $category) {
            //echo $category->slug;
            if ($category->slug == 'products') {
              $category_type = true;
              break;
            }
          }

          if ($category_type <> null) {
            wp_list_categories('exclude=12&orderby=ID&order=DESC&hide_empty=1&title_li=');
          }else {
            wp_list_categories('include=3&orderby=ID&order=DESC&hide_empty=1&title_li=');
          }
        ?>
      </ul>
    </div>
    <?php if (have_posts()) {?>
      <?php while (have_posts()) : the_post(); ?>
      <div class="col-sm-9">
        <?php the_content(); ?>
      </div>
      <?php endwhile;?>
      <?php wp_reset_query();?>
    <?php }?>
  </div>
</div>

<?php get_footer(); ?>
