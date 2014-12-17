<?php get_header()?>
<?php get_template_part('searchbar')?>

<div class="clear miniseparator"></div>

<div id="main">
	<div class="container">
		<div class="row">
        	<div class="col-md-12">
            	<h1>Noticias</h1>
            </div>
            
            <div class="clear separator"></div>
                        
            <div class="col-md-6 col-esp-a-top top-box">
            	<h2>Lorem ipsum, consectetur adipiscing elit.</h2>
            </div>
            <div class="col-md-6 col-esp-b-top top-box">
            	<p><em><strong>Sit amet, consectetuer adipiscing elit</strong></em>, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea.</p>
            </div>
            
            <div class="clear separator"></div>
            
            <div class="noticias">
            	
                <?php $count = 0;?>
                <?php foreach($posts as $post):?>
                <?php $count++?>
                
                <div class="col-md-6 col-esp col-esp-a odd">
                    <h2><?php echo $post->post_title?></h2>
                    <p>
                        <?php echo $post->post_excerpt?>
                    </p>
                </div>
                <div class="col-md-6 col-esp col-esp-b">
                    <figure>
                    	<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'col-6-mid' );?>
                        <a href="<?php echo get_permalink($post->ID)?>"><img src="<?php echo $img[0]?>" width="100%" alt="" /></a>
                        <figcaption>
                            <div><a href="<?php echo get_permalink($post->ID)?>"><span class="fa fa-angle-double-right"></span></a></div>
                            
                        </figcaption>
                    </figure>
                </div>   
                    
                    
                <?php echo '<div class="clear"></div>'?>
                <?php endforeach;?>
                <?php wp_paginate();?>
                
            </div>
           
            
        </div>
	</div>
</div>


<?php get_footer()?>