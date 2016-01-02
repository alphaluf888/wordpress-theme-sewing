<?php get_header(); ?>
<div class="container">
  <div class="row">
    <?php get_template_part('slides'); ?>
  </div>
  <div class="row">
    <div class="col-sm-3">
      <ul class="nav nav-pills nav-stacked">
        <?php wp_list_categories('exclude=3&orderby=ID&order=DESC&hide_empty=1&title_li='); ?>
      </ul>
    </div>

    <?php
      // the query to set the posts per page to 3
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $args = array('posts_per_page' => 3, 'paged' => $paged );
      query_posts($args);
    ?>
    <?php if (have_posts()) {?>

      <?php while (have_posts()) : the_post(); ?>
      <div class="col-sm-3">
        <?php if ( has_post_thumbnail() ) {?>
          <a class="thumbnail" href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
        <?php } ?>
      </div>
      <?php endwhile;?>
      <?php the_posts_pagination(); ?>
    <?php }?>
  </div>
  <div class="row">
    <p class="pull-right">
      <?php
        // $big = 999999999; // need an unlikely integer
        //
        // echo paginate_links( array(
        // 	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        // 	'format' => '?paged=%#%',
        // 	'current' => max( 1, get_query_var('paged') ),
        // 	'total' => $wp_query->max_num_pages
        // ) );
      ?>

    </p>
  </div>

<?php get_footer(); ?>
