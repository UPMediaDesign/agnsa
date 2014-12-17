<?php get_header()?>
<?php get_template_part('searchbar')?>

<div class="clear miniseparator"></div>

<div id="main">
	<div class="container">
		<div class="row">
        	<div class="col-md-12">
            	<h4>Noticias</h4>
                <div class="clear separator border"></div>
            	<h1><?php echo $post->post_title?></h1>
                <p><?php echo $post->post_excerpt?></p>
                <div class="clear separator border"></div>
            </div>
            
            <div class="clear separator"></div>
            
           	<div class="col-md-8">
            	<section>
                	<?php echo get_the_post_thumbnail($post->ID , 'col-4' , array('class' => 'alignleft'))?>
            		<?php echo apply_filters('the_content' , $post->post_content)?>
                </section>
                
                <div class="clear separator"></div>
                 
            </div>
            <aside class="col-md-4">
            	
                <div class="years row">
                	<ul>
                    	<h3>Noticias por año</h3>
						<?php $years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date) FROM $wpdb->posts ORDER BY post_date");
                        foreach($years as $year) : ?>
                            <li>
                                <a href="<?php echo get_year_link($year); ?> "><?php echo $year; ?></a>
                            </li>
                        <?php endforeach; ?>
                        
                	</ul>
                </div>
                
            </aside>
        </div>
        <div class="clear separator border"></div>
        <h3>Noticias recientes</h3>
        <div class="row noticias_extras">
        	<?php $noticias = get_posts(array( 'cat' => 3 , 'numberposts' => 4 , 'post__not_in' => array($post->ID)))?>
            <?php foreach($noticias as $noticia):?>
            	<div class="col-md-3">
            		<h4><?php echo $noticia->post_title?></h4>
                    <p><?php echo $noticia->post_excerpt?></p>
                    <a href="<?php get_permalink($noticia->ID)?>" class="morelink pull-right">Leer más <span class="fa fa-angle-double-right"></span></a>
            	</div>
            <?php endforeach;?>
            <div class="clear"></div>
        </div>
        <div class="clear separator border"></div>
	</div>
</div>


<?php get_footer()?>