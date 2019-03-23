<?php 
function bs4wp_customizer_register($wp_customize) {
    //Rodapé
    $wp_customize -> add_section('footer', array(
    	'title' => __('Rodapé', 'BS4WP'),
    	'description' => sprintf(__('Opções para o rodapé', 'BS4WP')),
    	'priority' => 20
    ));
    $wp_customize -> add_setting('footer_title', array(
        'default' => _x('Sobre mim', 'BS4WP'),
        'type' => 'theme_mod'
    ));
    $wp_customize -> add_control('footer_title', array(
    	'label' => __('Titulo do rodapé'),
    	'section' => 'footer',
    	'priority' => 1
    ));
    $wp_customize -> add_setting('footer_text', array(
        'default' => _x('Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 'BS4WP'),
        'type' => 'theme_mod'
    ));
    $wp_customize -> add_control('footer_text', array(
    	'label' => __('Texto do rodapé'),
    	'section' => 'footer',
    	'priority' => 2
    ));

}
add_action('customize_register', 'bs4wp_customizer_register');
?>