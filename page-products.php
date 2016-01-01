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

    <?php
    $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
    $args = array(
      'posts_per_page' => 6,
      'category_name' => 'products',
      'paged' => $paged,
    );
    $wp_query = new WP_Query( $args );
    ?>
    <?php $count = 0; ?>
    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
    <?php if (($count == 0) or ($count % 3 != 0)) { ?>
      <div class="col-sm-3">
        <?php if ( has_post_thumbnail() ) {?>
          <a class="thumbnail" href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
        <?php } ?>
      </div>
    <?php } else { ?>
      <div class="col-sm-3 col-sm-offset-3">
        <?php if ( has_post_thumbnail() ) {?>
          <a class="thumbnail" href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
        <?php } ?>
      </div>
    <?php }?>
    <?php ++$count; endwhile; ?>
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
    </p>
    <!-- <nav class="pull-right">
      <ul class="pagination">
        <li>
          <a href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li>
          <a href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav> -->
  </div>
</div>

<?php get_footer(); ?>
