<?php get_header(); ?>
<div class="container">
  <div class="row">
    <?php get_template_part('slides'); ?>
  </div>
  <div class="row">
    <div class="col-sm-3">
      <ul class="nav nav-pills nav-stacked">
        <?php wp_list_categories('include=3&orderby=ID&order=DESC&hide_empty=1&title_li='); ?>
      </ul>
    </div>

    <?php
    $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
    $category_name = get_query_var('category_name');
    $args = array(
      'posts_per_page' => 6,
      'category_name' => $category_name,
      'paged' => $paged,
    );
    $wp_query = new WP_Query( $args );
    ?>
    <?php if ($wp_query->have_posts()) {?>
      <?php $count = 0; ?>
      <?php while ($wp_query->have_posts()) : $wp_query->the_post();
        if ($count == 3) {
      ?>
        <div class="col-sm-3 col-sm-offset-3">
          <?php if ( has_post_thumbnail() ) {?>
            <a class="thumbnail" href="<?php the_permalink() ?>"><?php the_post_thumbnail(array(150, 150)); ?></a>
          <?php } ?>
        </div>
      <?php } else { ?>
        <div class="col-sm-3">
          <?php if ( has_post_thumbnail() ) {?>
            <a class="thumbnail" href="<?php the_permalink() ?>"><?php the_post_thumbnail(array(150, 150)); ?></a>
          <?php } ?>
        </div>
      <?php  } ?>

      <?php ++$count; endwhile;?>

    <?php }?>
  </div>
  <div class="row">
    <p class="pull-right">
      <?php
        global $wp_query;
        $big = 999999999; // need an unlikely integer

        echo paginate_links( array(
        	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        	'format' => '?paged=%#%',
        	'current' => max( 1, get_query_var('paged') ),
        	'total' => $wp_query->max_num_pages
        ) );
      ?>
    </p>
  </div>

<?php get_footer(); ?>
