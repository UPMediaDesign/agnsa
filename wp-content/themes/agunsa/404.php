<?php get_header()?>
<?php get_template_part('searchbar')?>


<div class="clear miniseparator"></div>

<div id="main">
	<div class="container">
		<div class="row">
        	<div class="">
            	<h1>404</h1>
            </div>
            
            <div class="clear miniseparator"></div>
            	<img src="<?php bloginfo('template_directory')?>/images/404.jpg" alt="" width="100%" />
                <div class="lay">	
                    <h1>Lo sentímos</h1>
                    <p>El contenido que usted busca no existe o fue movido a otro lugar, intenta buscar nuevamente</p>
                    <div class="clear"></div>
                    
                    <form method="get" action="<?php bloginfo('url')?>">
						<label class="hidden" for="s"></label>
                        <a onclick="document.getElementById('searchform').submit();"><span class="fa fa-search"></span></a>
						<input type="text" placeholder="¿Qué buscas?..." value="" name="s" id="s">
						<!--<input type="submit" id="searchsubmit" value="" class="fa fa-search"> -->
					</form>
                </div>    
            
            <div class="clear separator"></div>
            
      </div>            
	</div>
</div>


<?php get_footer()?>