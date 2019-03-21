<div class="blog-area">
<?php get_header(); ?>

<div class="main-content">
	<?php if(have_posts()): while(have_posts()): the_post() ?>
	<?php get_template_part('content', get_post_format()); ?>
<?php  endwhile;?>
<?php get_404_template(); endif;?>

<div class="jumbotron">
             <?php next_posts_link(' Mais antigos'); ?><?php previous_posts_link('Mais novos')?>
</div>


</div>
<?php get_sidebar();?>

<?php get_footer(); ?>
</div>