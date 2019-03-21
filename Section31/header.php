<html lang="<?php language_attributes(); ?>">
  <head>
	  <meta charset="<?php bloginfo('charset'); ?>">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" >
	  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	 <link rel="stylesheet" href="<?bloginfo('template_url') ?>/css/animate.css" >
	 <title> <?php echo bloginfo('name');?> </title>
	  <?php wp_head(); ?>
  </head>
  <body>
	  <div class="header animated bounceInLeft">
	  	<?php wp_nav_menu(array('menu' => 'Nome do Menu', 'container' => 'nav', 'container_class' => 'menu', 'menu_class' => 'menu-links')); ?>
	  </div>