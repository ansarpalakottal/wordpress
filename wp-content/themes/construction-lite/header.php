<?php
$construction_post_lists = get_posts(array('posts_per_page' => -1));
/**
 * The header for our theme.
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package construction
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<input type="hidden" id="ajax-url" url="<?php echo admin_url('admin-ajax.php'); ?>" />
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'construction' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
        <div class="ak-container clearfix">
    		<div class="site-branding">
            <?php if(get_header_image()){ ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" alt="Header Logo" /></a>
    			<?php }
                else{
        			?>
        				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
        			<?php
                    $description = get_bloginfo( 'description','display' );
        			if ( $description || is_customize_preview() ) : ?>
        				<p class="site-description"><?php echo esc_attr($description); /* WPCS: xss ok. */ ?></p>
        			<?php
        			endif;
                } ?>
    		</div><!-- .site-branding -->
    
    		<nav id="site-navigation" class="main-navigation" role="navigation">
                <div id="toggle" class="">
                    <div class="one"></div>
                    <div class="two"></div>
                    <div class="three"></div>
                </div>
    			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
    		</nav><!-- #site-navigation -->
            <?php $construction_header_search_enable = get_theme_mod('construction_search_enable');
             if($construction_header_search_enable){ ?>
             <div class="search-toggle">
                <a href="javascript:void(0)" class="search-icon"><i class="fa fa-search"></i></a>
				<div class="ak-search">
				    <?php get_search_form(); ?>
				</div>
            </div>
            <?php }
            $construction_header_cart_enable = get_theme_mod('construction_cart_enable'); 
            if($construction_header_cart_enable){?>
                <div class="header-cart-search">
                
                    <?php
                        if(is_active_sidebar('construction-cart-list')){?>
                            <div class="cart-list-wrap">
                                <span class="cart-fa-icon">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span class="cart-count"><?php echo absint(WC()->cart->get_cart_contents_count()); ?></span>
                                </span><?php
                                    dynamic_sidebar('construction-cart-list');?>
                            </div>
                     <?php } ?>
                </div>
            <?php } ?>
        </div>
	</header><!-- #masthead -->
    <?php
    if(is_home() || is_front_page()){
        if(get_theme_mod('construction_slider_enable')){
            do_action('construction_slider_action');
        }
    }
    ?>
	<div id="content" class="site-content">
