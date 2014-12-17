<?php get_header()?>
<?php get_template_part('searchbar')?>


<div class="clear miniseparator"></div>

<div id="main">
	<div class="container">
		<div class="row">
        	<div class="col-md-12">
            	<h1><?php echo $post->post_title?></h1>
            </div>
            
            <div class="clear separator"></div>
            
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
     
         
            
                                <div class="row">
                                	<div class="clear-separator"></div>
                                    <section id="seccion-<?php echo $scounter?>" class="section clearfix section-carousel section-mini-carousel">
                                        <h3><?php echo $contenido['titulo_seccion']?></h3>
                                        <ul class="bxslide">
                                            <?php $paises = get_posts(array('post_type' => 'pais' , 'numberposts' => 99 , 'order_by' => 'name' , 'order' => 'ASC'))?>
                                            
											<?php $clientcounter = 0?>
                                            
                                            <?php foreach( $paises as $pais):?>
                                            <?php $clientcounter++?>
                                            
                                            <li style="text-align:center" class="col-md-2">
                                            	<a href="<?php echo get_permalink($pais->ID)?>">
                                                	
                                                    <?php echo get_the_post_thumbnail($pais->ID , 'thumbnail')?>
                                                    <div class="clear"></div>
                                                    <h5><?php echo $pais->post_title?></h5>
                                                </a>
                                            </li>
                   							<?php endforeach?>
                                            
                                        </ul>
                                        <style>
                                        .plus{ padding:20px; background-color:#f2f2f2; display: inline-block; cursor:pointer; position: absolute; top: 0px; right: 0; color:#000}
										.section-mini-carousel li { border-radius: 200px; overflow:hidden }
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
            
            
	</div>
</div>


<?php get_footer()?>