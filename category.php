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

    <?php if (have_posts()) {?>
      <?php while (have_posts()) : the_post(); ?>
      <div class="col-sm-3">
        <?php the_content(); ?>
      </div>
      <?php endwhile;?>
    <?php }?>
  </div>
  <div class="row">
    <p class="pull-right">
      <?php
        $big = 999999999; // need an unlikely integer

        echo paginate_links( array(
        	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        	'format' => '?paged=%#%',
        	'current' => max( 1, get_query_var('paged') ),
        	'total' => $wp_query->max_num_pages
        ) );
      ?>
      <?php wp_reset_query();?>
    </p>
  </div>

<?php get_footer(); ?>
