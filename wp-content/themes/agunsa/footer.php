<div class="separator"></div>
<div id="footer">
	<div class="container">
		<div class="row">
        	
            <div class="col-md-5">
            	<div class="row">
                    <div class="col-md-6">
                        <a href="<?php bloginfo('url')?>">
                            <img src="<?php bloginfo('template_directory')?>/images/logo.png" width="150px" alt="" />
                        </a>
                    </div>
                    <div class="col-md-6 col-bordered">
                    	<h4>Agunsa Website</h4>
                        
                        <?php wp_nav_menu( array( 'container' => 'none' , 'theme_location' => 'secondary' ) ); ?>
                        
                    </div>
                </div>
            </div>
            
            
            <div class="col-md-7">
            	<h4>Agunsa en el Mundo</h4>
                <?php $paises = get_posts(array('post_type' => 'pais' , 'numberposts' => -1 , 'orderby' => 'name' , 'order' => 'ASC'))?>
            	<?php foreach($paises as $pais):?>
                	<div class="col-md-3 col-xs-4 col-esp"><a href="<?php echo get_permalink($pais->ID)?>"><?php echo $pais->post_title?></a></div>
                <?php endforeach?>
            </div>
            
        </div>
	</div>
</div>

<div class="clear separator"></div>

<div class="copy">
	<div class="container">
		<div class="row">
        	<span>Copyright © 2014 AGUNSA. Todos los derechos reservados</span>
        </div>
	</div>
</div>

<div class="separator"></div>

</body>
<?php wp_footer()?>
</html>