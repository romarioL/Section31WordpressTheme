<?php
 if(is_single()):
 ?>
 <div class="jumbotron animated bounceInLeft">
 <h3><?php the_title();?></h3>
 <?php the_post_thumbnail('post-thumbnail', array('class' => 'post-image')); ?>
 <?php  the_content();?>
 </div>

 <?php else: ?>

 	<div class="jumbotron animated bounceInLeft">
 		<h3><?php the_title(); ?></h3>
 		<?php the_excerpt();?>
 		<a href="<?php the_permalink();?>" class="button-primary">Leia mais</a>
 	</div>

 <?php endif; ?>