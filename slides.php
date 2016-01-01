<div class="col-xs-12">
  <?php
      $page = get_page_by_title('Slides');
      $content = apply_filters('the_content', $page->post_content);
      echo $content;

      echo "id:" + the_ID();
  ?>
</div>
