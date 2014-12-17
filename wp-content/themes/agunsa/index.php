<?php get_header()?>
<?php get_template_part('searchbar')?>
<div class="slider">
	<div class="container">
		<div class="row">
        	
            <div class="paisselector desktop col-md-3 col-md-offset-8">
            	<!-- Split button -->
                <div class="row">
                    <div class="btn-group btn-block">
                      <button type="button" class="btn btn-spc" data-toggle="dropdown" style=" width:86%">Servicios por país</button>
                      <button type="button" class="btn btn-spc dropdown-toggle" data-toggle="dropdown">
                        <span class="fa fa-chevron-down" style="margin-top:6px"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu btn-block" role="menu">
                        <?php $paises = get_posts(array('post_type' => 'pais' , 'numberposts' => -1 , 'order' => 'ASC'))?>
                        <?php foreach($paises as $pais):?>
                        <li><a href="<?php echo get_permalink($pais->ID)?>"><?php echo $pais->post_title?></a></li>
                        <?php endforeach;?>
                      </ul>
                    </div>
                </div>
            </div>
            
            <ul class="bxslider">
            	<?php $slides = get_posts(array('post_type' => 'slider' , 'numberposts' => 5 , 'order' => 'ASC'))?>
                <?php foreach ( $slides as $slide):?>
              		<li><?php echo get_the_post_thumbnail($slide-> ID , 'slider' , array('data-title' => '<h1>'.get_the_title($slide->ID).'</h1>'.$slide->post_excerpt))?></li>
              	<?php endforeach?>
            </ul>
            
            <div class="paisselector mobile col-md-3 col-md-offset-8">
            	
            	<!-- Split button -->
                <div class="row">
                    <div class="btn-group btn-block">
                      <button type="button" class="btn btn-spc btn-block" data-toggle="dropdown">Servicios por país <span class="fa fa-chevron-down"></span></button>
                      <ul class="dropdown-menu btn-block" role="menu">
                        <?php foreach($paises as $pais):?>
                        <li><a href="<?php echo get_permalink($pais->ID)?>"><?php echo $pais->post_title?></a></li>
                        <?php endforeach;?>
                      </ul>
                    </div>
                </div>
            </div>
            
            
        </div>
	</div>
</div>

<div class="clear miniseparator"></div>

<div class="servicios_boxes">
	<div class="container">
		<div class="row">
        	
            
            <?php $shome = get_pages(array('include' => '199,361,425,453'))?>
            <?php //var_dump($shome)?>
            <?php $scount = 0?>
            <?php foreach($shome as $sh):?>
            <?php $scount++?>
            <div class="col-md-6 col-esp <?php if($scount % 2 == 0){echo 'col-esp-b';}else{echo 'col-esp-a';}?>">
            	<div class="base"><a href="<?php echo get_permalink($sh)?>"><?php echo get_the_post_thumbnail($sh->ID , 'col-6')?></a></div>
                <div class="boxcontent">
                	<div class="box col-md-8">
                    	<h3><?php echo $sh->post_title?></h3>
                        <p><?php echo get_field('descripcion_home' , $sh->ID) ?></p>
                    </div>
                    <div class="link">
                    	<a href="<?php echo get_permalink($sh)?>">+</a>
                    </div>
                </div>
            </div>
            <?php endforeach?>
                        
        </div>
	</div>
</div>

<div id="undermain">
	<div class="container">
		<div class="row">
        
        	<div class="col-md-4 col-esp col-esp-a">
            	<figure>
                	<a href="<?php echo get_page_link(531)?>"><?php echo get_the_post_thumbnail(531 , 'square')?></a>
                    <figcaption>
                    	<h4><a href="<?php echo get_page_link(531)?>">Filiales &raquo;</a></h4>
                    	<p><?php echo get_field('descripcion_home' , 531) ?></p>
                    </figcaption>
                </figure>
            </div>
            
        	<div class="col-md-4 col-esp col-esp-c noticias-slide">
            	
                <ul class="bxnews">
					<?php $noticias = get_posts(array('post_type' => 'post' , 'category' => '3' , 'numberposts' => 5))?>
                    <?php foreach ( $noticias as $noticia):?>
                        <li>
                        	<h2><?php echo get_the_title($noticia->ID)?></h2>
							<p><?php echo $noticia->post_excerpt?></p>
                        </li>
                    <?php endforeach?>
            	</ul>
            
            
                
            </div>
            
        	<div class="col-md-4 col-esp col-esp-b">
            	<figure>
                	<a href="<?php echo get_page_link(797)?>"><?php echo get_the_post_thumbnail(797 , 'square')?></a>
                    <figcaption>
                    	<h4><a href="<?php echo get_page_link(797)?>">Inversionistas &raquo;</a></h4>
                    	<p><?php echo get_field('descripcion_home' , 797) ?></p>
                    </figcaption>
                </figure>
            </div>
        
        </div>
	</div>
</div>

<?php get_footer()?>