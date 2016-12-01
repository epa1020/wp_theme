<div id="main" class="group col-xs-6 centro">
		<div id="blog">
			<?php if (have_posts()):while(have_posts()):the_post();?>
			<div id="post" class="bordesolido">
				<h2><a href="<?php the_permalink();?>">	<?php the_title();?></a></h2>
				<div class="byline">
				<?php //the_author_posts_link();?>	<!--a href="<?php //the_permalink();?>"-->	<?php //the_time("l F d, Y");?><!--/a-->
				</div>

				<?php //the_content("Read More..."); ?>


				<div class="container-fluid">
				<div class="row">
					<div  class="col-xs-4">
					<?php
					if ( has_post_thumbnail() ) { the_post_thumbnail( array(50,50) );} 
					?>
					</div>

					<div  class="col-xs-6">
					<?php the_excerpt(); ?>
					</div>

				</div>
				</div>


				<?php //the_excerpt("Read More..."); ?>
				</div><!--end post-->
				
				<?php endwhile;else:?>
				<p> <?php _e("no hay post.Lo sentimos");?></p>
				<?php endif;?>
				<div class="navi">
				<div class="right">
				<?php 
				previous_posts_link('Anterior');?> / <?php
				next_posts_link('Siguiente');
				?>
				</div><!--end right-->
				</div><!--end navi-->


				
				

		
		</div><!--fin de seccion blocg-->
</div><!--fin de la columna-->


<div id="main" class="group col-xs-12 centro-small">
		<div id="blog">
			<?php if (have_posts()):while(have_posts()):the_post();?>
			<div id="post" class="bordesolido">
				<h2><a href="<?php the_permalink();?>">	<?php the_title();?></a></h2>
				<!--div class="byline">
				<?php //the_author_posts_link();?>	<a href="<?php the_permalink();?>">	<?php //the_time("l F d, Y");?></a>
				</div-->

				<?php //the_content("Read More..."); ?>


				<div class="container-fluid">
				<div class="row">
					<div  class="col-xs-4">
					<?php
					if ( has_post_thumbnail() ) { the_post_thumbnail( array(100,100) );} 
					?>
					</div>

					<div  class="col-xs-6">
					<?php the_excerpt("Read More..."); ?>
					</div>
				</div>
				</div>


				<?php //the_excerpt("Read More..."); ?>
				</div><!--end post-->
				
				<?php endwhile;else:?>
				<p> <?php _e("no hay post.Lo sentimos");?></p>
				<?php endif;?>
				<div class="navi">
				<div class="right">
				<?php 
				previous_posts_link('Anterior');?> / <?php
				next_posts_link('Siguiente');
				?>
				</div><!--end right-->
				</div><!--end navi-->


				
				

		
		</div><!--fin de seccion blocg-->
</div><!--fin de la columna-->