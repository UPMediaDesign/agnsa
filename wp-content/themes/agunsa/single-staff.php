<?php get_header()?>
<?php get_template_part('searchbar')?>


<div class="clear miniseparator"></div>

<div id="main">
	<div class="container">
		<div class="row">
        	<div class="col-md-12">
            	<h1><?php echo $post->post_title?></h1>
                <h3><?php echo get_field('cargo')?></h3>
                <h5><?php echo get_field('titulo')?></h5>
                <div class="clear separator border"></div>
            </div>
            
            <div class="clear separator"></div>
            
           	<div class="col-md-9">
            	<section>
                	<?php echo get_the_post_thumbnail($post->ID , 'col-4' , array('class' => 'alignleft'))?>
            		<?php echo apply_filters('the_content' , $post->post_content)?>
                </section>
                
                <div class="clear separator"></div>
                <section class="asks">
                <?php $asks = get_field('ask')?>
                <?php foreach($asks as $ask):?>
                	<h3><?php echo $ask['pregunta']?></h3>
                	<div class="respuesta">
                    	<?php echo $ask['respuesta']?>
                    </div>
                <?php endforeach?>
               	</section>
                 
            </div>
            <aside class="col-md-3">
            	
                <blockquote><?php echo get_field('quote')?></blockquote>
                
            </aside>
            
            <div class="clear separator"></div>
            
            <div class="otherstaff">
              <div class="col-md-12"><h5>Top Management</h5></div>
              <?php $staff = get_posts(array('post_type' => 'staff' ,  'area' => 'top-management' ,  'numberposts' => 10))?>
              <?php foreach( $staff as $staf):?>
                  <div class="col-md-2 col-xs-6">
                      <a href="<?php echo get_permalink($staf->ID)?>"><?php echo get_the_post_thumbnail($staf->ID , 'thumbnail')?></a>
                  </div>
              <?php endforeach?>
            </div>
            
        </div>
	</div>
</div>


<?php get_footer()?>