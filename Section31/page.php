<div class="blog-area">
<?php get_header(); ?>

<div class="main-content">
	<div class="jumbotron animated bounceInLeft">
		<?php if(have_posts()): while(have_posts()): the_post() ?>
		<h3><?php the_title(); ?></h3>
		<?php the_post_thumbnail('post-thumbnail', array('class' => 'post-image')); ?>
		<?php the_content();?>
		<?php  endwhile;?>
		<?php get_404_template(); endif;?>
	</div>

</div>
<?php get_sidebar();?>

<?php get_footer(); ?>
</div>