<?php
add_action('customize_register','Construction_Customizer_Control');
function Construction_Customizer_Control($wp_customize){
    require get_template_directory() . '/inc/admin-panel/construction-customizer-option.php';
    require get_template_directory() . '/inc/admin-panel/cunstruction-sanitize.php';
    $wp_customize->get_section( 'title_tagline' )->panel = 'construction_header_panel';  
    $wp_customize->get_section( 'background_image' )->panel = 'construction_general_panel';
    $wp_customize->get_section( 'header_image' )->panel = 'construction_header_panel';  
    $wp_customize->get_section( 'colors' )->panel = 'construction_general_panel';
}