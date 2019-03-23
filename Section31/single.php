<div class="blog-area">
<?php get_header(); ?>

<div class="main-content">
	<?php if(have_posts()): while(have_posts()): the_post() ?>
	<?php get_template_part('content', get_post_format()); ?>
<?php  endwhile;?>
<?php get_404_template(); endif;?>

</div>
<?php get_sidebar();?>

<?php get_footer(); ?>
</div>