<?php get_header()?>
<?php get_template_part('searchbar')?>

<?php $var = get_queried_object()?>



<div class="clear miniseparator"></div>

<div id="main">
	<div class="container">
		<div class="row">
        	<div class="col-md-12">
            	<h1><?php echo $var->name?></h1>
            </div>
            
            <div class="clear separator"></div>
                        
            <?php if(get_field('menu_selector' , 'area_'.$var->term_id)){?>
        	<div class="col-md-12 insidemenu desktop">
            	<?php $menu = get_field('menu_selector' , 'area_'.$var->term_id)?>
                <?php wp_nav_menu( array( 'container' => 'none', 'menu' => $menu->name ) ); ?>
            </div>
            <?php }?>
            
            <div class="clear separator"></div>
            
            <div class="equipo">
            	
                <?php $count = 0;?>
                <?php foreach($posts as $post):?>
                <?php $count++?>
                
                	<?php if($var->slug == 'directores'){?>
                	<div class="col-md-6 col-esp <?php if($count % 2 == 0){echo 'col-esp-b';}elseif($count % 2 == 1){echo 'col-esp-a';}?>">
                                        
                    	<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'col-6' );?>
                    	<img src="<?php echo $img[0]?>" width="100%" alt="" />
                		<h4><?php echo $post->post_title?></h4>
                        <h5><?php echo get_field('cargo' , $post->ID)?></h5>
                        <h6><?php echo get_field('titulo' , $post->ID)?></h6>
                        <p>
                        	<?php echo $post->post_excerpt?>
                        </p>
                    </div>
                    <?php }else{?>
                    <div class="col-md-6 col-esp <?php if($count % 2 == 0){echo 'col-esp-b';}elseif($count % 2 == 1){echo 'col-esp-a';}?>">
                                        
                    	<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'col-6' );?>
                    	<a href="<?php echo get_the_permalink($post->ID)?>"><img src="<?php echo $img[0]?>" width="100%" alt="" /></a>
                		<h4><a href="<?php echo get_the_permalink($post->ID)?>"><?php echo $post->post_title?></a></h4>
                        <h5><?php echo get_field('cargo' , $post->ID)?></h5>
                        <h6><?php echo get_field('titulo' , $post->ID)?></h6>
                        <p>
                        	<?php echo $post->post_excerpt?>
                        </p>
                    </div>
                    <?php }?>
                    <?php if($count % 2 == 0){echo '<div class="clear"></div>';}?>
                <?php endforeach;?>
                
            </div>
           
            
        </div>
	</div>
</div>


<?php get_footer()?>