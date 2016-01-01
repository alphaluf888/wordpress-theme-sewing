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

<script type="text/javascript">
  function initMap() {
    var myLatlng = new google.maps.LatLng(34.352808, 118.315716);
    var mapOptions = {
      zoom: 13,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("rambo-map"), mapOptions);
    var marker = new google.maps.Marker({
      position: myLatlng,
      title: 'Rambo Sewing'
    });

    marker.setMap(map);
  }

</script>
<script async defer src="http://maps.google.cn/maps/api/js?region=cn&language=zh-CN&key=AIzaSyBN3PRdYoQem6AOPUVC-z1HytT2UcSKuT8&callback=initMap">
</script>
<?php get_footer(); ?>
