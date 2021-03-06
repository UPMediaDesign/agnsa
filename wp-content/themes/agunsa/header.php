<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php if(is_home()){?>
	<title><?php wp_title();?></title>
<?php }else{?>
	<title><?php wp_title();?></title>
<?php }?>

<meta name="viewport" content="width=device-width, initial-scale=0.75 , minimum-scale=1.0 ,  maximum-scale=1.0">

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>?ver=3.8.1" />
<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/cfix.css" />

<!-- FontAwesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Exo+2:200,700,100italic,600,200italic,500italic,300,400italic,100,300italic,800,900,400,900italic,700italic,800italic,600italic,500' rel='stylesheet' type='text/css'>

<!--Otros -->
<?php wp_head()?>

<!-- scripts -->
<?php call_scripts()?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/bxslider.js"></script>

<?php if(is_home()){?>

<script type="text/javascript">
jQuery(document).ready(function($) {
	jQuery('.bxslider').bxSlider({
	  mode: 'fade',
	  captions: true,
	  pager: false,
	  nextText: '<span class="fa fa-chevron-right"></span>',
	  prevText: '<span class="fa fa-chevron-left"></span>'
	});
});
</script>
<?php }?>
<script type="text/javascript">

jQuery(document).ready(function($) {
	jQuery('.bxnews').bxSlider({
	  mode: 'fade',
	  pager: false,
	  nextText: '<span class="fa fa-chevron-right"></span>',
	  prevText: '<span class="fa fa-chevron-left"></span>'
	});
});

</script>

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>
<script type="text/javascript">

  function initialize() {
	 
	var styles = [
	  {
		featureType: "all",
		stylers: [
		  { saturation: -100 }
		]
	  },{
		featureType: "road",
		elementType: "geometry",
		stylers: [
		  { visibility: "off"}
		]
	  },{
		featureType: "poi",
		elementType: "labels",
		stylers: [
		  { visibility: "off" }
		]
	  },{
		featureType: "administrative",
		elementType: "labels",
		stylers: [
		  { visibility: "off" }
		]
	  },{
		featureType: "landscape.natural",
		elementType: "labels",
		stylers: [
		  { visibility: "off" }
		]
	  },{
		featureType: "road",
		elementType: "labels",
		stylers: [
		  { visibility: "off" }
		]
	  },{
		featureType: "landscape" ,
		elementType: "geometry.fill",
		stylers: [
		  { visibility: "off" }
		]
	  },{
		featureType: "administrative.country",
		elementType: "labels",
		stylers: [
		  { visibility: "on" },
		  { hue: "#e21717" },
		  { saturation: 100 },
		  { lightness: 0 },
		  { gamma: 1.51 }
		]
	  }
	];
	
    var mapOptions = {
      center: new google.maps.LatLng(-32.739055,-67.0574941),
      zoom: 5,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
	  streetViewControl: false,
	  mapTypeControl: false,
	  styles: styles,
	  
	  scrollwheel: false,
	  draggable:false,
	  
    };

    var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
	
	google.maps.event.addListener(map, 'click', function(event){
		map.setOptions({draggable: true});
	});
	
	
	setMarkers(map, pins);
	
  }
</script>

<?php if(is_page(61)){?>
<script src="<?php bloginfo('template_directory')?>/js/timelinr.js"></script>
<script>
	/*jQuery(function(){
		jQuery().timelinr({
			arrowKeys: 'true'
		})
	});*/
</script>
<?php }?>

</head>

<body  <?php body_class()?>>

<div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
      	<div class="row">
      	
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php bloginfo('url')?>"><img src="<?php bloginfo('template_directory')?>/images/logo.png" alt="" /></a>
            </div>
            <div class="navbar-collapse collapse">
              
              <?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'nav navbar-nav' , 'theme_location' => 'primary' ) ); ?>
              
              <ul class="nav navbar-nav navbar-right">
                  <li><a href="<?php echo get_page_link(797)?>" title="Logout">Inversionistas</a></li>
                  <li><a href="<?php echo get_page_link(531)?>" title="Logout">Filiales</a></li>
              </ul>
              
            </div><!--/.nav-collapse -->
            
      	</div>
      </div>
</div>