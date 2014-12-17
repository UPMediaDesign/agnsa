<?php get_header()?>
<?php get_template_part('searchbar')?>
<script src="//f.vimeocdn.com/js/froogaloop2.min.js"></script>
<?php $var = get_queried_object()?>



<div class="clear miniseparator"></div>

<div id="main">
	<div class="container">
		<div class="row">
        	<div class="col-md-12">
            	<h1>Videos</h1>
            </div>
            
            <div class="clear separator"></div>
           
            <div class="col-md-6 col-esp-a-top top-box">
            	<h2>Lorem ipsum, consectetur adipiscing elit.</h2>
            </div>
            <div class="col-md-6 col-esp-b-top top-box">
            	<p><em><strong>Sit amet, consectetuer adipiscing elit</strong></em>, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea.</p>
            </div>
            
            <div class="clear separator"></div>
            <div class="videos">
            	
               <?php $count = 0;?>
               <?php foreach($posts as $post):?>
               		<?php $count++?>
                	<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'col-6-mid' );?>
				  	<?php if($count % 2 == 0){?>
                    
                        <div class="col-md-6 col-esp col-esp-a">
                        	<figure>
                            	<img src="<?php echo $img[0]?>" width="100%" alt="" data-toggle="modal" data-target="#video-modal_<?php echo $count?>" />
                            	<figcaption>
                                	<div data-toggle="modal" data-target="#video-modal_<?php echo $count?>"><span class="fa fa-play-circle-o"></span></div>
                                </figcaption>
                            </figure>
                        </div>
                        
                        <div class="col-md-6 col-esp col-esp-b odd">
                            <h2><?php echo $post->post_title?></h2>
                            <p>
                                <?php echo $post->post_content?>
                            </p>
                        </div>
                        
                  	<?php }else{?>
                        <div class="col-md-6 col-esp col-esp-a odd">
                            <h2><?php echo $post->post_title?></h2>
                            <p>
                                <?php echo $post->post_content?>
                            </p>
                        </div>
                        <div class="col-md-6 col-esp col-esp-b">
                            <figure>
                            	<img src="<?php echo $img[0]?>" width="100%" alt="" data-toggle="modal" data-target="#video-modal_<?php echo $count?>" />
                            	<figcaption>
                                	<div data-toggle="modal" data-target="#video-modal_<?php echo $count?>"><span class="fa fa-play-circle-o"></span></div>
                                	
                                </figcaption>
                            </figure>
                        </div>
                        
                   	<?php }?>
                     
                    <div class="modal fade modal-wide" id="video-modal_<?php echo $count?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" id="cerrar-vx-<?php echo get_field('video_id' , $post->ID)?>"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="myModalLabel"><?php echo $post->post_title?></h4>
                          </div>
                          <div class="modal-body">
                            <iframe src="//player.vimeo.com/video/<?php echo get_field('video_id' , $post->ID)?>?title=0&amp;byline=0&amp;portrait=0&amp;color=e21717" id="vi-<?php echo get_field('video_id' , $post->ID)?>" width="100%" height="480" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            <?php echo apply_filters('the_content' , $post->post_content)?>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal" id="cerrar-v-<?php echo get_field('video_id' , $post->ID)?>">Cerrar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <script type="text/javascript">
					jQuery(document).ready(function($) {
						var iframe = document.getElementById('vi-<?php echo get_field('video_id' , $post->ID)?>');
						$f == Froogaloop
						var player = $f(iframe);
						
						var pauseButton = document.getElementById("cerrar-v-<?php echo get_field('video_id' , $post->ID)?>");
						pauseButton.addEventListener("click", function() {
						  player.api("pause");
						});
						
						var pauseButton = document.getElementById("cerrar-vx-<?php echo get_field('video_id' , $post->ID)?>");
						pauseButton.addEventListener("click", function() {
						  player.api("pause");
						});
						
						var pauseButton = document.getElementById("video-modal_<?php echo $count?>");
						pauseButton.addEventListener("click", function() {
						  player.api("pause");
						});
						
					}); 
					</script>
                        
                   	<?php echo '<div class="clear"></div>'?>
               <?php endforeach;?>
                
            </div>
           
            
        </div>
	</div>
</div>


<?php get_footer()?>