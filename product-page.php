<?php get_header(); ?>
<div class="container">
    <div class="row">
      <div class="col-xs-12">
        <?php while (have_posts()) : the_post(); ?>
        <div id="carousel-top" class="carousel slide" data-ride="carousel">
          <!-- indicator -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-top" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-top" data-slide-to="1"></li>
            <li data-target="#carousel-top" data-slide-to="2"></li>
            <li data-target="#carousel-top" data-slide-to="3"></li>
            <li data-target="#carousel-top" data-slide-to="4"></li>
            <li data-target="#carousel-top" data-slide-to="5"></li>
          </ol>

          <!-- wrapper for slides -->
          <div class="carousel-inner" role="listbox" style="max-height: 400px;">
            <div class="item active">
                <?php $slide="slide1"; echo get_post_meta($post->ID, $slide, true); ?>
            </div>
            <div class="item">
              <?php $slide="slide2"; echo get_post_meta($post->ID, $slide, true); ?>
            </div>
            <div class="item">
              <?php $slide="slide3"; echo get_post_meta($post->ID, $slide, true); ?>
            </div>
            <div class="item">
              <?php $slide="slide4"; echo get_post_meta($post->ID, $slide, true); ?>
            </div>
            <div class="item">
              <?php $slide="slide5"; echo get_post_meta($post->ID, $slide, true); ?>
            </div>
            <div class="item">
              <?php $slide="slide6"; echo get_post_meta($post->ID, $slide, true); ?>
            </div>
          </div>

        <!-- controls -->
        <a class="left carousel-control" href="#carousel-top" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-top" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-3">
      <h2>About us</h2>
      <hr>
      <ul class="nav nav-pills nav-stacked">
        <li role="presentation" class="active"><a href="#">Automatic pocket setting machine</a></li>
        <li role="presentation"><a href="#">Automatic belt loop machine</a></li>
        <li role="presentation"><a href="#">Pattern sewing machine</a></li>
        <li role="presentation"><a href="#">Automatic button sewer with robot</a></li>
        <li role="presentation"><a href="#">Others</a></li>
      </ul>
    </div>
    <div class="col-sm-9">
      <h2>Product Gallery</h2>
      <hr>
      <div class="row">
        <div class="col-md-4">
          <a href="#" class="thumbnail">
            <img alt="product 1" src="img/RM-100.jpg" style="max-height:300px;">
          </a>
        </div>
        <div class="col-md-4">
          <a href="#" class="thumbnail">
            <img alt="product 2" src="img/RM-101.jpg" style="max-height:300px;">
          </a>
        </div>
        <div class="col-md-4">
          <a href="#" class="thumbnail">
            <img alt="product 3" src="img/RM-310S.jpg" style="max-height:300px;">
          </a>
        </div>
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
        <div class="col-md-4">
          <a href="#" class="thumbnail">
            <img alt="product 1" src="img/RM-320S.jpg" style="max-height:300px;">
          </a>
        </div>
        <div class="col-md-4">
          <a href="#" class="thumbnail">
            <img alt="product 2" src="img/RM-326G.jpg" style="max-height:300px;">
          </a>
        </div>
        <div class="col-md-4">
          <a href="#" class="thumbnail">
            <img alt="product 3" src="img/RM-342G.jpg" style="max-height:300px;">
          </a>
        </div>
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

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='https://www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
<?php get_footer(); ?>
