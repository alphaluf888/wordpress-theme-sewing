<?php get_header(); ?>
<div class="container">
    <div class="row">
      <?php get_template_part('slides'); ?>
  </div>
  <div class="row">
    <div class="col-sm-3">
      <h2>About us</h2>
      <hr>
      <p>
        This is the about us section.
        This is the about us section.
        This is the about us section.
        This is the about us section.
        This is the about us section.
        This is the about us section.
      </p>
    </div>
    <div class="col-sm-9">
      <h2>Product Gallery</h2>
      <hr>
      <div class="row">
        <?php while (have_posts()) : the_post(); ?>
        <div class="col-md-4">
          <a href="#" class="thumbnail">
            <?php $product="product1"; echo get_post_meta($post->ID, $product, true); ?>
          </a>
        </div>
        <div class="col-md-4">
          <a href="#" class="thumbnail">
            <?php $product="product2"; echo get_post_meta($post->ID, $product, true); ?>
          </a>
        </div>
        <div class="col-md-4">
          <a href="#" class="thumbnail">
            <?php $product="product3"; echo get_post_meta($post->ID, $product, true); ?>
          </a>
        </div>
        <?php endwhile; ?>
      </div>

    </div>
  </div>
  <div class="row">
    <div class="col-sm-3">
      <h2>Contact us</h2>
      <hr>
      <h4>Rambo Sewing Equipment Manufacturing Co. Ltd</h4>
      <p><strong>Address: </strong>NO.99 West Beijing Road, XinYi Economic Development Park,Xuzhou,Jiangsu Province, China</p>
      <p><strong>Tel: </strong>0516-88593698</p>
      <p><strong>Fax: </strong>0516-81610389</p>
      <p><strong>Email: </strong>sewingindustries@163.com</p>
      <p><strong>Mobile: </strong>0086-13501780552</p>
    </div>
    <div class="col-sm-9">
      <div class="row">
        <?php while (have_posts()) : the_post(); ?>
        <div class="col-md-4">
          <a href="#" class="thumbnail">
              <?php $product="product4"; echo get_post_meta($post->ID, $product, true); ?>
          </a>
        </div>
        <div class="col-md-4">
          <a href="#" class="thumbnail">
              <?php $product="product5"; echo get_post_meta($post->ID, $product, true); ?>
          </a>
        </div>
        <div class="col-md-4">
          <a href="#" class="thumbnail">
              <?php $product="product6"; echo get_post_meta($post->ID, $product, true); ?>
          </a>
        </div>
        <nav>
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
        </nav>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <h2>Factory Gallery</h2>
      <hr>
      <div id="owl-product-effects" class="owl-carousel">
        <div>
          <img src="img/RM-1014.jpg" alt="Third product picture in top carousel slides" style="max-height:200px;">
        </div>
        <div>
          <img src="img/RM-1014.jpg" alt="Third product picture in top carousel slides" style="max-height:200px;">
        </div>
        <div>
          <img src="img/RM-1014.jpg" alt="Third product picture in top carousel slides" style="max-height:200px;">
        </div>
        <div>
          <img src="img/RM-1014.jpg" alt="Third product picture in top carousel slides" style="max-height:200px;">
        </div>
        <div>
          <img src="img/RM-1014.jpg" alt="Third product picture in top carousel slides" style="max-height:200px;">
        </div>
        <div>
          <img src="img/RM-1014.jpg" alt="Third product picture in top carousel slides" style="max-height:200px;">
        </div>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>
