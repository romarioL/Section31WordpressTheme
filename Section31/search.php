<div class="blog-area">
  <?php get_header(); ?>
  <div class="main-content">
   <?php if(is_search()):
        $total_results = $wp_query->found_posts;
        echo '<h3 class="jumbotron">'. sprintf(__('%s resultado(s) para o termo %s', 'BS4WP'), $total_results, get_search_query()) . '</h3>';
       endif;
       ?>

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