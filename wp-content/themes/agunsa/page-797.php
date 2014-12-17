<?php get_header()?>
<?php get_template_part('searchbar')?>


<div class="clear miniseparator"></div>

<div id="main">
	<div class="container">
		<div class="row">
        	<div class="col-md-12">
            	<h1><?php echo $post->post_title?></h1>
            </div>
            
            <div class="clear miniseparator"></div>
            
            <?php if(get_field('menu_selector' , $post->ID)){?>
        	<div class="col-md-12 insidemenu desktop">
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
                                                    <div id="plus-<?php echo $clientcounter?>" class="plus-<?php echo $clientcounter?> plus"><span class="glyphicon glyphicon-plus"></span></div>
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
                                        <style>
                                        .bxslider li .fig{ height:110px; overflow:hidden; background-color:#525252; padding:20px; color:#fff;}
										.bxslider li .fig h3{ padding:0px; margin:0px;}
										.bxslider li .fig p{ color:#fff}
                                        .plus{ padding:20px; background-color:#f2f2f2; display: inline-block; cursor:pointer; position: absolute; top: 0px; right: 0; color:#000}
                                        </style>
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
            
           <div class="row">
           		<section class="section-revenues">
            		
                    <ul class="bxslider-revenue">
						<?php $revenues = get_field('revenues')?>
                        <?php foreach ( $revenues as $revenue):?>
                        	
                            <?php $revima = wp_get_attachment_image_src($revenue['grafico'] , 'full')?>
                            <li><img src="<?php echo $revima[0]?>" width="100%" alt="" /></li>
                            
                        <?php endforeach?>
                        
                        <script type="text/javascript">
							jQuery('.bxslider-revenue').bxSlider({
							  pager: false,
							  nextText: '<span class="fa fa-chevron-right"></span>',
							  prevText: '<span class="fa fa-chevron-left"></span>'
							  //adaptiveHeight: true
							});
							
						</script>
                        
                    </ul>
                    
            	</section>
           </div>
           
           
           <div class="row">
               <section class="section section-graph-areas">
               	
				
                <div role="tabpanel">
				  <?php $areas = get_field('areas')?>
                  
                  <ul class="nav nav-tabs" role="tablist">
                  	<?php $acc = 0?>
					<?php foreach($areas as $area):?>
						<?php $acc++?>
                        <li role="presentation" <?php if($acc == 1){?>class="active"<?php }?>><a href="#area-<?php echo $acc?>" aria-controls="area-<?php echo $acc?>" role="tab" data-toggle="tab"><?php echo $area["area"]?></a></li>
                    <?php endforeach;?>
                  </ul>
                
                  <div class="tab-content">
                   	<?php $acc = 0?>
					<?php foreach($areas as $area):?>
					<?php $acc++?>
                    	<div role="tabpanel" class="tab-pane <?php if($acc == 1){?>active<?php }?>" id="area-<?php echo $acc?>">
                        	
                            <div class="col-md-10 col-esp col-esp-a">
                            	
                                <?php $reportes = $area["reportes"]?>
                                
                                <div class="panel-group" id="accordion-<?php echo $acc?>" role="tablist" aria-multiselectable="true">
                                  	<div class="panel panel-default">
                                    <?php $repoc = 0?>
									<?php foreach($reportes as $reporte):?>
                                    <?php $repoc++?>  
                                      	
                                        <div id="collapse-<?php echo $acc?>-<?php echo $repoc?>" class="panel-collapse collapse <?php if($repoc == 1){?>in<?php }?>" role="tabpanel" aria-labelledby="heading-<?php echo $acc?>-<?php echo $repoc?>">
                                      		<div class="panel-body">
                                            	<h4><?php echo $reporte["etiqueta"]?></h4>
                                        		
                                                <?php $repo = wp_get_attachment_image_src( $reporte["reporte"], 'full'); ?> 
                                                <img src="<?php echo $repo[0]?>" width="100%" alt="">
                                                
                                          </div>
                               			</div>
                                  
                                	<?php endforeach;?>
                                	</div>
                            	</div>
                                
                            </div>
                            <div class="col-md-2  col-esp col-esp-b">
                            	<?php $repoz = 0?>
								<?php foreach($reportes as $reporte):?>
                                <?php $repoz++?>
                            		
                                        <a class="btn btn-danger btn-block" data-toggle="collapse" data-parent="#accordion-<?php echo $acc?>" href="#collapse-<?php echo $acc?>-<?php echo $repoz?>">
                                          <?php echo $reporte["etiqueta"]?>
                                        </a>
                                      
								<?php endforeach;?>
                            </div>
                            <div class="clear"></div>
                        </div>
                    <?php endforeach;?>
                  </div>
                
                </div>
                                
                
               </section>
           </div>
           
           <div class="row">
           		<section class="section section-reportes-anuales">
                	
                    <div class="col-md-8 col-esp col-esp-a">
						<?php $anuales = get_posts(array('post_type' => 'reportes_anuales' , 'numberposts' => -1))?>
                        
                        
                        
                        <div role="tabpanel">

                          <!-- Nav tabs -->
                          <ul class="nav nav-tabs" role="tablist">
						  <?php $anoscount = 0;?>
						  <?php foreach($anuales as $ranual):?>
						  <?php $anoscount++?>
                                <li role="presentation" <?php if($anoscount == 1){?>class="active"<?php }?>>
                                    <a href="#reporte-<?php echo $ranual->post_title;?>" aria-controls="reporte-<?php echo $ranual->post_title;?>" role="tab" data-toggle="tab"><?php echo $ranual->post_title;?></a>
                                </li>
                          <?php endforeach;?>
                          </ul>
                        
                          <!-- Tab panes -->
                          <div class="tab-content">
						  <?php $anoscount = 0;?>
                          <?php foreach($anuales as $ranual):?>
                          <?php $anoscount++?>
                            	<div role="tabpanel" class="tab-pane <?php if($anoscount == 1){?>active<?php }?>" id="reporte-<?php echo $ranual->post_title;?>">
                                	
                                    <?php $data = get_field('anuales' , $ranual->ID)?>
                                    <?php $data = $data[0]?>
                                    
                                    
                                    
                                    <h3>Memorias</h3>
                                	<div class="row">
                                        <div class="col-xs-2">
                                            <a href="<?php echo wp_get_attachment_url($data["memoria_anual"])?>" target="_blank"><img src="//placehold.it/300x400/e21717/ffffff/&text=Memoria+<?php echo $ranual->post_name?>" width="100%" alt=""></a>
                                        </div>
                                        <div class="col-xs-10">
                                            <h4>Memoria Anual <?php echo $ranual->post_title?></h4>
                                            <h5><a href="<?php echo wp_get_attachment_url($data["memoria_anual"])?>" target="_blank">Descargar - <span class="fa <?php echo get_icon_for_attachment($data["memoria_anual"])?>"></span> <?php echo get_type_for_attachment($data["memoria_anual"])?></a></h5>
                                        </div>
                                    </div>
                                    <div class="clear miniseparator"></div>
                                    
                                    <h3>Estados Financierons IFRS</h3>
									<?php foreach($data["estados_financieros"] as $eeff):?>
                                        <h4><?php echo $eeff["periodo"]?></h4>
                                        <h5><a href="<?php echo wp_get_attachment_url($eeff["estado_financiero"])?>" target="_blank">Descargar - <span class="fa <?php echo get_icon_for_attachment($eeff["estado_financiero"])?>"></span> <?php echo get_type_for_attachment($eeff["estado_financiero"])?></a></h5>
                                        <div class="border"></div>
                                    <?php endforeach;?>
                                        
                                    <div class="clear miniseparator"></div>
                                    
                                    <h3>Hechos Escenciales</h3>
                                    <?php foreach($data["hechos_esenciales"] as $hhee):?>
                                        <h4><?php echo $hhee["periodo"]?></h4>
                                        <h5><a href="<?php echo wp_get_attachment_url($hhee["hecho"])?>" target="_blank">Descargar - <span class="fa <?php echo get_icon_for_attachment($hhee["hecho"])?>"></span> <?php echo get_type_for_attachment($hhee["hecho"])?></a></h5>
                                        <div class="border"></div>
                                    <?php endforeach;?>
                                    <div class="clear miniseparator"></div>
                                    
                                    <h3>FECU</h3>
                                    <?php foreach($data["fecu"] as $fecu):?>
                                        <h4><?php echo $fecu["periodo"]?></h4>
                                        <h5><a href="<?php echo wp_get_attachment_url($fecu["fecu"])?>" target="_blank">Descargar - <span class="fa <?php echo get_icon_for_attachment($fecu["fecu"])?>"></span> <?php echo get_type_for_attachment($fecu["fecu"])?></a></h5>
                                        <div class="border"></div>
                                    <?php endforeach;?>
                                    <div class="clear miniseparator"></div>
                                    
                                    <h3>Junta de Accionistas</h3>
                                    <?php foreach($data["junta_accionistas"] as $jjaa):?>
                                        <h4><?php echo $jjaa["periodo"]?></h4>
                                        <h5><a href="<?php echo wp_get_attachment_url($jjaa["acta"])?>" target="_blank">Descargar - <span class="fa <?php echo get_icon_for_attachment($jjaa["acta"])?>"></span> <?php echo get_type_for_attachment($jjaa["acta"])?></a></h5>
                                        <div class="border"></div>
                                    <?php endforeach;?>
                                    
                                    <div class="clear miniseparator"></div>
                                </div>
                          <?php endforeach;?>  
                          </div>
                        
                        </div>
                        
                        
                        
                    </div>
                    <div class="col-md-4 col-esp col-esp-b">
                    	
                        <div class="minicol">
                        	<a href="<?php echo get_page_link(1003)?>"><?php echo get_the_post_thumbnail(1003 , 'minibox')?></a>
							<div class="caption">
								<h5>Principales Accionistas</h5>
							</div>
						</div>
                        
                        <div class="clear miniseparator"></div>
                        <div class="minicol">
                        	<a href="<?php echo get_bloginfo('url')?>/area/directores/"><?php echo get_the_post_thumbnail(1003 , 'minibox')?></a>
							<div class="caption">
								<h5>Directorio</h5>
							</div>
						</div>
                        
                        <div class="clear miniseparator"></div>
                        <div class="row">
                            <div class="col-md-6 col-xs-6 col-esp-a">
                                <div class="minicol">
                                    <a href="<?php echo get_field('politicas')?>">
                                    	<?php $pol = wp_get_attachment_image_src( get_field('politicas_img'), 'midbox'); ?> 
                                        <img src="<?php echo $pol[0]?>" width="100%" alt="">
                                    </a>
                                    <div class="caption">
                                        <h5>Políticas</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-6 col-esp-b">
                                <div class="minicol">
                                    <a href="<?php echo get_field('estatutos')?>">
										<?php $est = wp_get_attachment_image_src( get_field('estatutos_img'), 'midbox'); ?> 
                                        <img src="<?php echo $est[0]?>" width="100%" alt="">
                                    </a>
                                    <div class="caption">
                                        <h5>Estatutos</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="clear miniseparator"></div>
                        <div class="row">
                            <div class="col-md-6 col-xs-6 col-esp-a">
                                <div class="minicol">
                                    <a href="<?php echo get_field('manejo')?>">
										<?php $man = wp_get_attachment_image_src( get_field('manejo_img'), 'midbox'); ?> 
                                        <img src="<?php echo $man[0]?>" width="100%" alt="">
                                    </a>
                                    <div class="caption">
                                        <h5>Manejo información para el mercado</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-6 col-esp-b">
                                <div class="minicol">
                                    <a href="<?php echo get_field('gobierno')?>">
										<?php $gob = wp_get_attachment_image_src( get_field('gobierno_img'), 'midbox'); ?> 
                                        <img src="<?php echo $gob[0]?>" width="100%" alt="">
                                    </a>
                                    <div class="caption">
                                        <h5>Prácticas Gobierno Corporativo</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="clear miniseparator"></div>
                        <div class="minicol">
                        	<a href="<?php echo get_field('infoeconomica')?>">
								<?php $gob = wp_get_attachment_image_src( get_field('infoeconomica_img'), 'minibox'); ?> 
                                <img src="<?php echo $gob[0]?>" width="100%" alt="">
                            </a>
							<div class="caption">
								<h5>Información económica</h5>
							</div>
						</div>
                        
                        <div class="clear miniseparator"></div>
                        <div class="row">
                            <div class="col-md-6 col-xs-6 col-esp-a">
                                <div class="minicol">
                                    <a href="<?php echo get_page_link(1013)?>"><?php echo get_the_post_thumbnail(1013 , 'midbox')?></a>
                                    <div class="caption">
                                        <h5>Denuncias</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-6 col-esp-b">
                                <div class="minicol">
                                    <a href="<?php echo get_page_link(1012)?>"><?php echo get_the_post_thumbnail(1012 , 'midbox')?></a>
                                    <div class="caption">
                                        <h5>Contacto</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        
                    </div>
                    
                    	
                </section>
           </div>
            
            
            
	</div>
</div>


<?php get_footer()?>