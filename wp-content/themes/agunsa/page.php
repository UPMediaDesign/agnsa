<?php get_header()?>
<?php get_template_part('searchbar')?>


<div class="clear miniseparator"></div>

<div id="main">
	<div class="container">
		<div class="row">
        	<div class="">
            	<h1><?php echo $post->post_title?></h1>
            </div>
            
            <div class="clear miniseparator"></div>
            
            <?php if(get_field('menu_selector' , $post->ID)){?>
        	<div class="insidemenu desktop">
            	<?php $menu = get_field('menu_selector' , $post->ID)?>
                <?php wp_nav_menu( array( 'container' => 'none', 'menu' => $menu->name ) ); ?>
            </div>
            <div class="clear separator"></div>
            <?php }?>
            
            
            
            <?php if(get_field('top_imagen' , $post->ID)){?>  
			<?php $topimagen = wp_get_attachment_image_src(get_field('top_imagen' , $post->ID) , 'slider')?>
            <div class="top-imagen col-md-12" style="background-image:url(<?php echo $topimagen[0]?>); ">
                <div class="row">
                    <div class="box col-md-offset-6 col-md-6">
                        <h3><?php echo $post->post_title;?></h3>
                        <p><?php echo $post->post_excerpt;?></p>
                    </div>
                </div>
            </div>
            <div class="clear separator"></div>
            <?php }?>
      </div>
     
      <?php if(is_page(61)){?> 
      <div class="row">
      	<div class="col-md-12">
        	<?php echo apply_filters('the_content' , $post->post_content)?>
        </div>
      </div> 
      <div class="clear separator"></div>
      
      <div class="row">
      	<div class="col-md-12 desktop">
        
        	<?php $hitos = get_field('hitos')?>
            <ul id="dates" role="tablist" class="clearfix ">
            
            
            	<ul class="list-group col-md-2 col-xs-12 col-esp">	
                	
                    <?php $hxc = 0?>
					<?php foreach($hitos as $hitox):?>
                    <?php $hxc++?>
					<?php if($hitox['tipo'] == 'separador'){?>
                    
                    </ul>
                    <ul class="list-group col-md-2 col-xs-12 col-esp">	
                    <?php }else{?>
                    
                        <li data-toggle="tooltip" title="<?php echo $hitox['titulo']?>" data-placement="top" class="<?php if($hitox['tipo'] == 'decada'){echo 'decada';}else{echo 'no-decada';}?> <?php if($hxc == 1){echo 'active';}?>">
                            <a href="#a<?php echo $hitox['year']?>" data-toggle="tab" role="tab" aria-controls="a<?php echo $hitox['year']?>" title="<?php echo $hitox['titulo']?>">
                                <?php if($hitox['tipo'] == 'decada'){echo $hitox['year'].'<div class="clear"></div><span class="fa fa-circle"></span>';}else{echo '&nbsp;<div class="clear"></div><span class="fa fa-circle"></span>';}?>
                            </a>
                        </li>
                    <?php }?>    
                    <?php endforeach;?>
                </ul>
            
            </ul>
            <div class="clear"></div>
            <div id="facts">
            	
            	<ul id="issues"class="tab-content">
                	<?php $hcount = 0?>
                    <?php foreach($hitos as $hito):?>
                    	<?php $hcount++?>
                        <div role="tabpanel" class="tab-pane fade <?php if($hcount == 1){?>in active<?php }?>" id="a<?php echo $hito['year']?>">
                            <?php $imghito = wp_get_attachment_image_src( $hito['imagen_del_hito'], 'col-6-mid' ); ?> 
                           	<div class="col-md-6 col-esp">
                            	<img src="<?php echo $imghito[0]?>" width="100%" />
                            </div>
                           	<div class="col-md-6">
                                <h2><?php echo $hito['year']?> <small><?php echo $hito['titulo']?></small></h2>
                                <p><?php echo $hito['descripcion']?></p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    <?php endforeach?>
                </ul>
            </div>
            
      </div>
      <script type="text/javascript">
	  
	  	  
	  
		  jQuery(document).ready(function(){
			  
			  jQuery('.list-group li , .list-group li a').click(function(){
				  jQuery('.list-group > li').removeClass('active');
			  });
			  
			  jQuery("#dates li a").tooltip();   
		  });
	  </script>
      </div>
      
      	<?php }elseif(is_page(531) ){
		echo '<div class="row"><section id="filiales">';  
		  	$fcount = 0;
			$filiales = get_field('filiales');
			foreach($filiales as $filial):
			$fcount ++; 
			$cols = 'col-esp-c';
			
			if($fcount % 4 == 0){ $cols = 'col-esp-b';} elseif($fcount % 4 == 1){$cols = 'col-esp-a';}elseif($fcount == 1){$cols = 'col-esp-a';}else{$cols = 'col-esp-c';};
			
			?>
				
				<div class="col-md-3 col-esp <?php echo $cols ?>">
                	<?php $ima = wp_get_attachment_image_src($filial['logo_imagen'] , 'col-3')?>
                    <figure>
                        <img src="<?php echo $ima[0]?>" alt="" width="100%">
                        <figcaption>
                            <h4><?php echo $filial['filial']?></h4>
                            <p><?php echo $filial['descripcion']?></p>
                        </figcaption>
                    </figure>
                </div>
                
                <?php if($fcount % 4 == 0){echo '<div class="clear"></div>';}?>
				
			<?php endforeach;?>
            
            <script>
            jQuery(document).ready(function($) {
				jQuery('#filiales figure').hover(function() {
					$(this).children('figcaption').animate({opacity:1}, 400)
				}, function() {
					$(this).children('figcaption').animate({opacity:0}, 400)
				});
			});

            </script>
            
		</section></div>
		<?php }?>
      
           
            <?php $contenidos = get_field('boxes');?>
            
            <?php $scounter = 0;?>
        	<?php foreach($contenidos as $contenido):?>
        		<?php $scounter++?>
            
            	
            	
                        <?php if($contenido["acf_fc_layout"] == 'col-md-12'){?> 
                        	<?php if($contenido['ancho'] == 'narrow'){?> 
                                <div class="row">
                                    <div id="seccion-<?php echo $scounter?>" class="section clearfix">
                                        <div class="col-md-8 col-md-offset-2 flex narrow">
                                            <?php echo apply_filters('the_content' , $contenido["editor"])?>
                                        </div>
                                    </div>
                                </div>
                            <?php }elseif($contenido['ancho'] == 'full'){?> 
                                <div class="row">
                                    <div id="seccion-<?php echo $scounter?>" class="section clearfix">
                                        <div class="col-md-12 col-esp flex full">
                                            <?php echo apply_filters('the_content' , $contenido["editor"])?>
                                        </div>
                                    </div>
                                </div>
                            <?php }elseif($contenido['ancho'] == 'extra'){?> 
                            </div>
                 			<div id="seccion-<?php echo $scounter?>" class="section clearfix">
                                <?php echo apply_filters('the_content' , $contenido["editor"])?>
                            </div>
                            <div class="container">
                            <?php }?>
                        <?php }elseif($contenido["acf_fc_layout"] == 'col-md-6'){?>
                            <div class="row">
                                <div id="seccion-<?php echo $scounter?>" class="section clearfix">
                                    <div class="<?php echo $contenido["acf_fc_layout"]?> col-esp col-esp-a flex">
                                        <?php echo apply_filters('the_content' , $contenido["columna_1"])?>
                                    </div>
                                    <div class="<?php echo $contenido["acf_fc_layout"]?> col-esp col-esp-b flex">
                                        <?php echo apply_filters('the_content' , $contenido["columna_2"])?>
                                    </div>
                                </div>
                            </div>
                        <?php }elseif($contenido["acf_fc_layout"] == 'col-md-4'){?>
                        	<div class="row">
                                <div id="seccion-<?php echo $scounter?>" class="section clearfix">
                                    <div class="<?php echo $contenido["acf_fc_layout"]?> col-esp col-esp-a flex">
                                        <?php echo apply_filters('the_content' , $contenido["columna_1"])?>
                                    </div>
                                    <div class="<?php echo $contenido["acf_fc_layout"]?> col-esp col-esp-c flex">
                                        <?php echo apply_filters('the_content' , $contenido["columna_2"])?>
                                    </div>
                                    <div class="<?php echo $contenido["acf_fc_layout"]?> col-esp col-esp-b flex">
                                        <?php echo apply_filters('the_content' , $contenido["columna_3"])?>
                                    </div>
                                </div>
                            </div>
                        <?php }elseif($contenido["acf_fc_layout"] == 'col-md-3'){?>
                        	
                            <?php $colesp = ''; if($contenido['columnas_especiales']){$colesp = 'col-esp';}?>
                        	
                        	<div class="row">
                                <div id="seccion-<?php echo $scounter?>" class="section clearfix">
                                    <div class="<?php echo $contenido["acf_fc_layout"]?> <?php echo $colesp.' col-esp col-esp-a'?> flex">
                                        <?php echo apply_filters('the_content' , $contenido["columna_1"])?>
                                    </div>
                                    <div class="<?php echo $contenido["acf_fc_layout"]?> <?php echo $colesp.' col-esp col-esp-c'?> flex">
                                        <?php echo apply_filters('the_content' , $contenido["columna_2"])?>
                                    </div>
                                    <div class="<?php echo $contenido["acf_fc_layout"]?> <?php echo $colesp.' col-esp col-esp-c'?> flex">
                                        <?php echo apply_filters('the_content' , $contenido["columna_3"])?>
                                    </div>
                                    <div class="<?php echo $contenido["acf_fc_layout"]?> <?php echo $colesp.' col-esp col-esp-b'?> flex">
                                        <?php echo apply_filters('the_content' , $contenido["columna_4"])?>
                                    </div>
                                </div>
                            </div>
                        <?php }elseif($contenido["acf_fc_layout"] == 'col-md-2'){?>
                            <div class="row">
                                <div id="seccion-<?php echo $scounter?>" class="section clearfix">
                                    <div class="<?php echo $contenido["acf_fc_layout"]?> flex">
                                        <?php echo apply_filters('the_content' , $contenido["columna_1"])?>
                                    </div>
                                    <div class="<?php echo $contenido["acf_fc_layout"]?> flex">
                                        <?php echo apply_filters('the_content' , $contenido["columna_2"])?>
                                    </div>
                                    <div class="<?php echo $contenido["acf_fc_layout"]?> flex">
                                        <?php echo apply_filters('the_content' , $contenido["columna_3"])?>
                                    </div>
                                    <div class="<?php echo $contenido["acf_fc_layout"]?> flex">
                                        <?php echo apply_filters('the_content' , $contenido["columna_4"])?>
                                    </div>
                                    <div class="<?php echo $contenido["acf_fc_layout"]?> flex">
                                        <?php echo apply_filters('the_content' , $contenido["columna_5"])?>
                                    </div>
                                    <div class="<?php echo $contenido["acf_fc_layout"]?> flex">
                                        <?php echo apply_filters('the_content' , $contenido["columna_6"])?>
                                    </div>
                                </div>
                            </div>
                        <?php }elseif($contenido["acf_fc_layout"] == 'col-md-20'){?>
                        	<div class="row">
                                <div id="seccion-<?php echo $scounter?>" class="section clearfix">
                                    <div class="<?php echo $contenido["acf_fc_layout"]?> flex">
                                        <?php echo apply_filters('the_content' , $contenido["columna_1"])?>
                                    </div>
                                    <div class="<?php echo $contenido["acf_fc_layout"]?> flex">
                                        <?php echo apply_filters('the_content' , $contenido["columna_2"])?>
                                    </div>
                                    <div class="<?php echo $contenido["acf_fc_layout"]?> flex">
                                        <?php echo apply_filters('the_content' , $contenido["columna_3"])?>
                                    </div>
                                    <div class="<?php echo $contenido["acf_fc_layout"]?> flex">
                                        <?php echo apply_filters('the_content' , $contenido["columna_4"])?>
                                    </div>
                                    <div class="<?php echo $contenido["acf_fc_layout"]?> flex">
                                        <?php echo apply_filters('the_content' , $contenido["columna_5"])?>
                                    </div>
                                </div>
                            </div>
                        <?php }elseif($contenido["acf_fc_layout"] == 'acordion'){?>
                        	<div class="col-md-8 col-md-offset-2 flex">
                            <div class="panel-group" id="accordion">
                            <?php $acordeones = $contenido["acordeones"];?>
                            <?php $acocounter = 0?>
                            <?php foreach($acordeones as $acordeon):?>
                            	<?php $acocounter++?>
                            	<div class="panel panel-default">
                                <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#acordeon-<?php echo $acocounter?>">
                                      <?php echo $acordeon['titulo']?>
                                    </a>
                                  </h4>
                                </div>
                                <div id="acordeon-<?php echo $acocounter?>" class="panel-collapse collapse">
                                  <div class="panel-body">
                                    <?php echo $acordeon['contenido']?>
                                  </div>
                                </div>
                              </div>
                            <?php endforeach;?>
                            </div>
                            </div>
                        <?php }elseif($contenido["acf_fc_layout"] == 'topbox'){?>
                        	<div class="row">
                                <div class="col-md-6 col-esp-a-top top-box">
                                    <h2><?php echo $contenido["titulo"]?></h2>
                                </div>
                                <div class="col-md-6 col-esp-b-top top-box">
                                    <p><?php echo $contenido["bajada"]?></p>
                                </div>
                            </div>
                            <div class="clear separator"></div>
                        <?php }elseif($contenido["acf_fc_layout"] == 'maps'){?>
               		        <?php if($contenido["tipo_mapa"] == 'pais'){?>
                            	<div class="row">
                                    <section class="section clearfix">
                                    
                                        <?php $paises = get_posts(array('post_type' => 'pais' , 'numberposts' => -1))?>
                                        
                                        <script type="text/javascript">
                                            var pins = [
                                            <?php foreach($paises as $pais):?>
                                                <?php $pins = get_field('ubicaciones' , $pais->ID)?>
                                                <?php foreach($pins as $pin):?>
                                                    <?php if($pin['type'] == $contenido['tipo']){?>
                                                        ['<?php echo $pin['ubicacion']['address']; ?>', <?php echo $pin['ubicacion']['lat']; ?>, <?php echo $pin['ubicacion']['lng']; ?>, '<?php echo $pin['tipo']?>' , '<?php echo $pin['info']?>' ,4],
                                                    <?php }?>
                                                <?php endforeach;?>
                                            <?php endforeach;?>
                                            ];
                                        </script>
                                        
                                        <script type="text/javascript">
                                        function setMarkers(map, locations) {
                                          map.setCenter(new google.maps.LatLng(34.580138, 16.736237));
                                          map.setZoom(2); 
                                            
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
                                        
                                        <div class="col-md-12 col-esp">
                                            <div id="map_canvas" style="width:100%; height:480px"></div>
                                        </div>
                                            
                                    </section>
                                </div> 
            				<?php }elseif($contenido["tipo_mapa"] == 'custom'){?>
                            	<div class="row">
                                    <section class="section clearfix">
                                    
                                    <?php $pins = $contenido["ubicaciones"]?>
                                    
									<script type="text/javascript">
                                            var pins = [
                                            <?php foreach($pins as $pin):?>
											['<?php echo $pin['ubicacion']['address']; ?>', <?php echo $pin['ubicacion']['lat']; ?>, <?php echo $pin['ubicacion']['lng']; ?>, '<?php echo $pin['tipo']?>' , '<?php echo $pin['info']?>' ,4],
											<?php endforeach;?>
                                            ];
                                        </script>
                                        
                                        <script type="text/javascript">
                                        function setMarkers(map, locations) {
                                          map.setCenter(new google.maps.LatLng(34.580138, 16.736237));
                                          map.setZoom(2); 
                                            
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
                                        
                                        <div class="col-md-12 col-esp">
                                            <div id="map_canvas" style="width:100%; height:480px"></div>
                                        </div>
                                            
                                    </section>
                                </div>
                            <?php }?>	
                        <?php }elseif($contenido["acf_fc_layout"] == 'carrusel_clientes'){?>
                                <div class="row">
                                	<div class="clear-separator"></div>
                                    <section id="seccion-<?php echo $scounter?>" class="section clearfix section-carousel">
                                        <h3><?php echo $contenido['titulo_seccion']?></h3>
                                        <ul class="bxslider">
                                            <?php $clients = $contenido["clientes"]?>
                                            <?php $clientcounter = 0?>
                                            <?php foreach( $clients as $client):?>
                                            <?php $clientcounter++?>
                                            
                                            <li>
                                            	
                                            	<div id="fig-<?php echo $clientcounter?>" class="fig-<?php echo $clientcounter?> fig">               
                                                    
                                                    <h3><?php echo $client['cliente']?></h3>
                                                    <p><?php echo $client['info']?></p>
                                                    <div id="plus-<?php echo $clientcounter?>" class="plus-<?php echo $clientcounter?> plus">+</div>
                                                </div>
                                                
                                                
                                                <?php $ima = wp_get_attachment_image_src( $client['imagen_destacada'], 'col-4' ); ?>
                                                <img src="<?php echo $ima[0]?>" id="ima-<?php echo $clientcounter?>" class="ima-<?php echo $clientcounter?>" />
                                               
                                            
                                            <script>
												jQuery('#plus-<?php echo $clientcounter?>').click(function(event) {
													jQuery('.fig-<?php echo $clientcounter?>').toggle(
														function(){jQuery(this).animate({height : 500},300)},
														function(){jQuery(this).animate({height : 100},300).stop()
													});
													jQuery('.ima-<?php echo $clientcounter?>').fadeToggle()
												});
                                            </script>
                                            
                                            </li>
                    						<?php endforeach?>
                                        </ul>
                                        
                                        <script>
                                            jQuery('.bxslider').bxSlider({
                                              minSlides: 1,
                                              maxSlides: 3,
                                              slideWidth: 360,
                                              slideMargin: 10,
											  moveSlides: 3,
											  pager: false,
											  nextText: '<span class="fa fa-chevron-right"></span>',
	 										  prevText: '<span class="fa fa-chevron-left"></span>'
                                              //adaptiveHeight: true
                                            });
                                            
                                        </script>
                                        
                                    </section>
                                    <div class="clear-separator"></div>
                                </div>
                            <?php }elseif($contenido["acf_fc_layout"] == 'mini_carrusel_clientes'){?>
                                <div class="row">
                                	<div class="clear-separator"></div>
                                    <section id="seccion-<?php echo $scounter?>" class="section clearfix section-carousel section-mini-carousel">
                                        <h3><?php echo $contenido['titulo_seccion']?></h3>
                                        <ul class="bxslider">
                                            <?php $clients = $contenido["clientes"]?>
                                            <?php $clientcounter = 0?>
                                            <?php foreach( $clients as $client):?>
                                            <?php $clientcounter++?>
                                            
                                            <li>
                                            	<?php if($client['link']){echo '<a href="'.$client['link'].'">';};?>
                                                
                                                <?php $ima = wp_get_attachment_image_src( $client['imagen_destacada'], 'thumbnail' ); ?>
                                                <!--<a data-toggle="tooltip" data-placement="right" title="<?php echo $client['cliente']?> - <?php echo $client['info']?>"> -->
                                                	<img src="<?php echo $ima[0]?>" id="ima-<?php echo $clientcounter?>" class="ima-<?php echo $clientcounter?>" />
                                                    
                                                <?php if($client['link']){echo '</a>';};?>
												<h5><?php echo $client['cliente']?></h5>
                                            </li>
                   							<?php endforeach?>
                                            
                                        </ul>
                                        <style>
                                        .plus{ padding:20px; background-color:#f2f2f2; display: inline-block; cursor:pointer; position: absolute; top: 0px; right: 0; color:#000}
										.section-mini-carousel li{ text-align:center}
										.section-mini-carousel li a img{ border-radius: 200px; overflow:hidden }
                                        </style>
                                        <script type="text/javascript">
											  /* jQuery(document).ready(function(){
												  jQuery(".bxslider a").tooltip();   
											  }); */
										
                                            jQuery('.bxslider').bxSlider({
                                              minSlides: 3,
                                              maxSlides: 7,
                                              slideWidth: 145,
                                              slideMargin: 10,
											  moveSlides: 3,
											  pager: false,
											  nextText: '<span class="fa fa-chevron-right"></span>',
	 										  prevText: '<span class="fa fa-chevron-left"></span>'
                                              //adaptiveHeight: true
                                            });
                                            
                                        </script>
                                        
                                    </section>
                                    <div class="clear-separator"></div>
                                </div>
                            <?php }?>
            
            <?php endforeach;?>
            
            
            
            
            
	</div>
</div>


<?php get_footer()?>