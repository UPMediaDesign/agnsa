<?php get_header()?>
<?php get_template_part('searchbar')?>

<?php $pins = get_field('ubicaciones')?>
<script type="text/javascript">
var pins = [
	<?php foreach($pins as $pin):?>
  	['<?php echo $pin['ubicacion']['address']; ?>', <?php echo $pin['ubicacion']['lat']; ?>, <?php echo $pin['ubicacion']['lng']; ?>, '<?php echo $pin['tipo']?>' , '<?php echo $pin['info']?>' ,4],
  	<?php endforeach;?>
];
function setMarkers(map, locations) {
  map.setCenter(new google.maps.LatLng(<?php echo $pins[0]['ubicacion']['lat']; ?>, <?php echo $pins[0]['ubicacion']['lng']; ?>));

  var image = {
    url: 'https://google-developers.appspot.com/maps/documentation/javascript/examples/full/images/beachflag.png',
    // This marker is 20 pixels wide by 32 pixels tall.
    size: new google.maps.Size(20, 32),
    // The origin for this image is 0,0.
    origin: new google.maps.Point(0,0),
    // The anchor for this image is the base of the flagpole at 0,32.
    anchor: new google.maps.Point(0, 32)
  };
  var shape = {
      coords: [1, 1, 1, 20, 18, 20, 18 , 1],
      type: 'poly'
  };
  for (var i = 0; i < locations.length; i++) {
    var pin = locations[i];
    var myLatLng = new google.maps.LatLng(pin[1], pin[2]);
    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        //icon: image,
        //shape: shape,
        title: pin[0],
        zIndex: pin[5]
    });
	
	var content = '<img src="<?php bloginfo('template_directory')?>/images/logo.png" height="50" alt="" /><h4>'+pin[0]+'</h4><h5>'+pin[3]+'</h5><p>'+pin[4]+'</p>';
	var infowindow = new google.maps.InfoWindow( {maxWidth: 320} )
	
	google.maps.event.addListener(marker,'click', (function(marker,content,infowindow){ 
        return function() {
           infowindow.setContent(content);
           infowindow.open(map,marker);
        };
    })(marker,content,infowindow));
	
  }
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>


<div id="main">
	<div class="container">
		<div class="row">
        	<div class="col-md-12">
        		<h1>AGUNSA en <?php echo $post->post_title?></h1>
            </div>
            <div class="clear separator"></div>
            
            <div class="col-md-6 col-esp-a-top top-box">
            	<h2>Lorem ipsum, consectetur adipiscing elit.</h2>
            </div>
            <div class="col-md-6 col-esp-b-top top-box">
            	<p><em><strong>Sit amet, consectetuer adipiscing elit</strong></em>, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea.</p>
            </div>
            
            <div class="clear separator"></div>
            
            <div class="col-md-12 col-esp">
                <div id="map_canvas" style="width:100%; height:480px"></div>
            </div>
            
            <div class="clear separator"></div>
            
            <div class="col-md-8 col-esp col-esp-a">
            	
                <div role="tabpanel">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#servicios" aria-controls="servicios" role="tab" data-toggle="tab">Nuestros servicios</a></li>
                    <li role="presentation"><a href="#oficinas" aria-controls="oficinas" role="tab" data-toggle="tab">Nuestras Oficinas</a></li>
                  </ul>
                
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="servicios">
                    	<?php $sercount = 0?>
                        <?php $services = get_field('servicios')?>
                        <?php foreach($services as $service):?>
                        	<?php $sercount++?>
                        	<div class="col-md-6">
                            	<h3><?php echo $service['servicio']?></h3>
                                <p><?php echo $service['descripcion']?></p>
                            </div>
                            <?php if($setcount == 2){ echo '<div class="clear"></div>'; }?>
                        <?php endforeach?>
                       <div class="clear"></div> 
                    </div>
                    <div role="tabpanel" class="tab-pane" id="oficinas">
                    	<?php $pincount = 0?>
                    	<?php foreach($pins as $pin):?>
                        	<?php $pincount++?>
                        	<div class="col-md-6">
                            	<h3><?php echo $pin['nombre_del_lugar']?></h3>
                                <p><?php echo $pin['descripcion']?></p>
                            </div>
                            <?php if($pincount == 2){ echo '<div class="clear"></div>'; }?>
                        <?php endforeach?>
                        <div class="clear"></div>
                    </div>
                    
                    
                  </div>
                
                </div>
                
            </div>
            
            <div class="col-md-4 col-esp col-esp-b">
            	<img src="//placehold.it/500x250" width="100%" alt="">
                <div class="clear separator"></div>
                <img src="//placehold.it/500x250" width="100%" alt="">
                <div class="clear separator"></div>
                <blockquote>
                	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu tristique purus. Aliquam pharetra porta ligula eget fringilla. Aliquam consequat semper sapien, feugiat molestie nisl pellentesque eget. Nulla erat ex, blandit vel purus vitae, ornare condimentum massa. Pellentesque ex dui, imperdiet non lectus sit amet, imperdiet posuere justo. 
                	<div class="clear separator"></div>
                	<a href="#" class="btn btn-danger">Trabaja con nosotros</a>
                </blockquote>
            </div>
            
        </div>
	</div>
</div>

<?php get_footer()?>