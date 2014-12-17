<div class="searchandsocial navbar-fixed-top">
	<div class="container">
		<div class="row">
			
            <?php if(is_home()){?>
            <div class="col-xs-12 col-md-4 col-md-offset-8">
            <?php }else{?>
            
            <div class="col-xs-12 col-md-8 bred">
            	<div class="breadcrumb">
                	<!--<span><strong>Usted está en:</strong></span> -->
                    <?php if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('<p id="breadcrumbs">','</p>');
					} ?>
                </div>
            </div>
            
            <div class="col-xs-12 col-md-4">
            <?php }?>
				<div class="searchh izq">
					<form method="get" id="searchform" action="<?php bloginfo('url')?>">
						<label class="hidden" for="s"></label>
                        <a onclick="document.getElementById('searchform').submit();"><span class="fa fa-search"></span></a>
						<input type="text" placeholder="¿Qué buscas?..." value="" name="s" id="s">
						<!--<input type="submit" id="searchsubmit" value="" class="fa fa-search"> -->
					</form>
				</div>
                <div class="idiomas der">
                    <div class="izq"><a href="#"><img src="<?php bloginfo('template_directory')?>/images/eng.png" alt="" /></a></div>
                </div>
			
			</div>
		</div>
	</div>
</div>