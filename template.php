<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } ?>

<?php include_once('inc/top.php'); ?>	
			<div class="wrapper wrapper-content">
				<!-- The Index Card -->
				<div class="card card-single" id="main-card">
					<div class="card-image-holder"></div>
					<hgroup>
						<h1><?php get_page_title(); ?></h1>
						<h2>Subtitle here</h2>
					</hgroup>
					
					<div class="card-text-conent">
						<?php get_custom_field('description'); ?> 
					</div>
					
					<div class="card-mini-gallery clearfix">
						<div id="content">
							<?php get_custom_field('gallery-content'); ?> 
						</div>
						
						<ul></ul>							
					</div>

					<div class="card-text-conent">
							<?php get_page_content(); ?>
						
					</div>
				
					
				</div>						
			</div>
			
		</div>
	</body>
</html>