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
    <div class="col-sm-12">
      <h2>Contact us</h2>
      <hr>
      <h4>Rambo Sewing Equipment Manufacturing Co. Ltd</h4>
      <p><strong>Address: </strong>NO.99 West Beijing Road, XinYi Economic Development Park,Xuzhou,Jiangsu Province, China</p>
      <p><strong>Tel: </strong>0516-88593698</p>
      <p><strong>Fax: </strong>0516-81610389</p>
      <p><strong>Email: </strong>sewingindustries@163.com</p>
      <p><strong>Mobile: </strong>0086-13501780552</p>
    </div>
  </div>
  <div class="row">
    <div id="rambo-map" style="width:100%; height:400px; overflow: hidden: margin:0;"></div>
  </div>

</div>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=tEeieESUINs5Ky7ROmTUGzcR">
</script>
<script type="text/javascript">
  //创建和初始化地图函数：
  function initMap(){
    createMap();//创建地图
    setMapEvent();//设置地图事件
    addMapControl();//向地图添加控件
    addMapOverlay();//向地图添加覆盖物
  }
  function createMap(){
    map = new BMap.Map("rambo-map"); 
    map.centerAndZoom(new BMap.Point(118.314702,34.359178),15);
  }
  function setMapEvent(){
    map.enableScrollWheelZoom();
    map.enableKeyboard();
    map.enableDragging();
    map.enableDoubleClickZoom()
  }
  function addClickHandler(target,window){
    target.addEventListener("click",function(){
      target.openInfoWindow(window);
    });
  }
  function addMapOverlay(){
    var markers = [
      {content:"",title:"Rambo Sewing",imageOffset: {width:0,height:3},position:{lat:34.36043,lng:118.320092}}
    ];
    for(var index = 0; index < markers.length; index++ ){
      var point = new BMap.Point(markers[index].position.lng,markers[index].position.lat);
      var marker = new BMap.Marker(point,{icon:new BMap.Icon("http://api.map.baidu.com/lbsapi/createmap/images/icon.png",new BMap.Size(20,25),{
        imageOffset: new BMap.Size(markers[index].imageOffset.width,markers[index].imageOffset.height)
      })});
      var label = new BMap.Label(markers[index].title,{offset: new BMap.Size(25,5)});
      var opts = {
        width: 200,
        title: markers[index].title,
        enableMessage: false
      };
      var infoWindow = new BMap.InfoWindow(markers[index].content,opts);
      marker.setLabel(label);
      addClickHandler(marker,infoWindow);
      map.addOverlay(marker);
    };
  }
  //向地图添加控件
  function addMapControl(){
    var scaleControl = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
    scaleControl.setUnit(BMAP_UNIT_METRIC);
    map.addControl(scaleControl);
    var navControl = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
    map.addControl(navControl);
    var overviewControl = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:true});
    map.addControl(overviewControl);
  }
  var map;
    initMap();
</script>
<?php get_footer(); ?>
