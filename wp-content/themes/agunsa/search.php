<?php get_header()?>
<?php get_template_part('searchbar')?>


<div class="clear miniseparator"></div>

<div id="main">
	<div class="container">
		<div class="row">
        	<div class="">
            	<h1>Usted buscó por: <?php echo $_GET['s']?></h1>
            </div>
            
            <div class="clear miniseparator"></div>
      	</div>
    	    
		<div class="row">
        	
            <?php foreach($posts as $post):?>
            <div class="sresult">
            	<div class="col-md-10">
                    <h2><a href="<?php echo get_permalink($post->ID)?>"><?php echo $post->post_title?></a></h2>
                    <p><?php echo get_permalink($post->ID)?></p>
                </div>
                <div class="col-md-2">
                	<h2>&nbsp;</h2>
                    <a href="<?php echo get_permalink($post->ID)?>" class="btn btn-danger">Ver resultado</a>
                </div>
                <div class="clear miniseparator border"></div>
            </div>
            <?php endforeach;?>
            <?php wp_paginate();?>
        </div>     
            
	</div>
</div>


<?php get_footer()?>