<?php
function construction_dynamic_css(){
    $construction_breadcrumb_bg_image = get_theme_mod('construction_page_bg_image');
    if($construction_breadcrumb_bg_image){
        ?>
        <style>
            .header-banner-container{
                background: url('<?php echo esc_url($construction_breadcrumb_bg_image) ?>') no-repeat center fixed;
            }
        </style>
        <?php
    }
    $construction_cta_bg_image = get_theme_mod('construction_cta_bg_image');
    if($construction_cta_bg_image){
        ?>
        <style>
            .cta_section{
                background: url('<?php echo esc_url($construction_cta_bg_image) ?>') no-repeat center fixed;
            }
        </style>
        <?php
    }
    $construction_body_font_size = get_theme_mod('construction_body_font_size');
    $construction_h1_font_size = get_theme_mod('construction_h1_font_size');
    $construction_h2_font_size = get_theme_mod('construction_h2_font_size');
    $construction_h3_font_size = get_theme_mod('construction_h3_font_size');
    $construction_h4_font_size = get_theme_mod('construction_h4_font_size');
    $construction_h5_font_size = get_theme_mod('construction_h5_font_size');
    $construction_h6_font_size = get_theme_mod('construction_h6_font_size');
    if($construction_body_font_size){
        ?>
        <style>
            body, .about-post-content, .feature-post .feature-content, 
            .member-description, .blog_section .blogs-loop .blog-content, 
            .testimonial_section .test-desc, .top-footer-desc{
                font-size: <?php echo absint($construction_body_font_size).'px !important' ?>;
            }
        </style>
        <?php
    }
    if($construction_h1_font_size){
        ?>
        <style>
            h1{
                font-size: <?php echo absint($construction_h1_font_size).'px !important' ?>;
            }
        </style>
        <?php
    }
    if($construction_h2_font_size){
        ?>
        <style>
            h2{
                font-size: <?php echo absint($construction_h2_font_size).'px !important' ?>;
            }
        </style>
        <?php
    }
    if($construction_h3_font_size){
        ?>
        <style>
            h3{
                font-size: <?php echo absint($construction_h3_font_size).'px !important' ?>;
            }
        </style>
        <?php
    }
    if($construction_h4_font_size){
        ?>
        <style>
            h4{
                font-size: <?php echo absint($construction_h4_font_size).'px !important' ?>;
            }
        </style>
        <?php
    }
    if($construction_h5_font_size){
        ?>
        <style>
            h5{
                font-size: <?php echo absint($construction_h5_font_size).'px !important' ?>;
            }
        </style>
        <?php
    }
    if($construction_h6_font_size){
        ?>
        <style>
            h6{
                font-size: <?php echo absint($construction_h6_font_size).'px !important' ?>;
            }
        </style>
        <?php
    }
    $construction_body_font = get_theme_mod('construction_body_font');
    $construction_h1_font = get_theme_mod('construction_h1_font');
    $construction_h2_font = get_theme_mod('construction_h2_font');
    $construction_h3_font = get_theme_mod('construction_h3_font');
    $construction_h4_font = get_theme_mod('construction_h4_font');
    $construction_h5_font = get_theme_mod('construction_h5_font');
    $construction_h6_font = get_theme_mod('construction_h6_font');
    if($construction_body_font){
        wp_register_style('construction-body-font', '//fonts.googleapis.com/css?family='.esc_attr($construction_body_font));
               wp_enqueue_style( 'construction-body-font');
               ?>
                <style>
                    body{
                        font-family:<?php echo esc_attr($construction_body_font).'!important' ?>;
                    }
                </style>
               <?php
    }
    if($construction_h1_font){
        wp_register_style('construction-h1-font', '//fonts.googleapis.com/css?family='.esc_attr($construction_h1_font));
               wp_enqueue_style( 'construction-h1-font');
               ?>
                <style>
                    h1{
                        font-family:<?php echo esc_attr($construction_h1_font).'!important' ?>;
                    }
                </style>
               <?php
    }
    if($construction_h2_font){
        wp_register_style('construction-h2-font', '//fonts.googleapis.com/css?family='.esc_attr($construction_h2_font));
               wp_enqueue_style( 'construction-h2-font');
               ?>
                <style>
                    h2{
                        font-family:<?php echo esc_attr($construction_h2_font).'!important' ?>;
                    }
                </style>
               <?php
    }
    if($construction_h3_font){
        wp_register_style('construction-h3-font', '//fonts.googleapis.com/css?family='.esc_attr($construction_h3_font));
               wp_enqueue_style( 'construction-h3-font');
               ?>
                <style>
                    h3{
                        font-family:<?php echo esc_attr($construction_h3_font).'!important' ?>;
                    }
                </style>
               <?php
    }
    if($construction_h4_font){
        wp_register_style('construction-h4-font', '//fonts.googleapis.com/css?family='.esc_attr($construction_h4_font));
               wp_enqueue_style( 'construction-h4-font');
               ?>
                <style>
                    h4{
                        font-family:<?php echo esc_attr($construction_h4_font).'!important' ?>;
                    }
                </style>
               <?php
    }
    if($construction_h5_font){
        wp_register_style('construction-h5-font', '//fonts.googleapis.com/css?family='.esc_attr($construction_h1_font));
               wp_enqueue_style( 'construction-h5-font');
               ?>
                <style>
                    h5{
                        font-family:<?php echo esc_attr($construction_h5_font).'!important' ?>;
                    }
                </style>
               <?php
    }
    if($construction_h6_font){
        wp_register_style('construction-h6-font', '//fonts.googleapis.com/css?family='.esc_attr($construction_h6_font));
               wp_enqueue_style( 'construction-h6-font');
               ?>
                <style>
                    h6{
                        font-family:<?php echo esc_attr($construction_h6_font).'!important' ?>;
                    }
                </style>
               <?php
    }
    $construction_disable_about_image_frame = get_theme_mod('construction_disable_feature_image_frame');
    if($construction_disable_about_image_frame){
        ?>
            <style>
                .about-content-wrap .right-about-content:before{
                    border: none!important;
                }
            </style>
        <?php
    }
    $construction_skin_color = get_theme_mod('construction_skin_color');
    if($construction_skin_color){
        ?>
            <style>
                .main-navigation .current_page_item > a, 
                .main-navigation .current-menu-item > a, .main-navigation a:hover, 
                .main-navigation li:hover > a, .main-navigation li.focus > a, 
                .header-cart-search:hover .cart-fa-icon, a:focus, a:active, .member-social-profile a:hover, 
                .site-header .search-icon:hover, .blog_section .blogs-loop a:hover, 
                .woocommerce .star-rating, .woocommerce .star-rating::before, .item-wrap a.product-name h5:hover, 
                .item-wrap .price, .woocommerce ul.products li.product .price, 
                .site-footer .site-info a:hover, .bottom-footer a:hover, 
                .bottom-footer .widget_construction_recent_post .recent-posts-content a:hover, 
                .woocommerce .product-rating, .woocommerce ul.products li.product .star-rating, .widget a:hover, 
                .woocommerce-info::before, .comment-author-date a:hover, .entry-title a:hover, 
                .comments-area .reply .comment-reply-link, .woocommerce.widget_shopping_cart ul.cart_list li a:hover, 
                .product-name a:hover, .product-name a:focus, .product-name a:active, .about-post-title a:hover, 
                .edit-link a:hover, .edit-link a:focus, .edit-link a:active, 
                .top-footer .social-icons .fa_link_wrap a:hover .fa_wrap,
                #construction-breadcrumb a, .portfolio_section .owl-controls .owl-nav .owl-prev:hover:before, .portfolio_section .owl-controls .owl-nav .owl-next:hover:before {
                    color: <?php echo esc_attr($construction_skin_color) ?>;
                }
                .widget_aptf_widget .aptf-tweet-content .aptf-tweet-name, .site-footer .site-info a{
                    color: <?php echo esc_attr($construction_skin_color) ?> !important;
                }
                .woocommerce a.remove, .woocommerce.widget_shopping_cart ul.cart_list li a.remove{
                    color: <?php echo esc_attr($construction_skin_color) ?>!important;
                }
                .cart-count, .woocommerce a.remove:hover, 
                .woocommerce.widget_shopping_cart ul.cart_list li a.remove:hover, 
                .site-header .ak-search input[type="submit"], .slider-content a:hover, 
                .section-sub-title h2::before, .about-button a:hover, .feature_section .posts-feature, 
                .member-name-designation-social .member-designation::after, .blog_section .blog-left .blog-date, 
                .item-wrap .add-to-cart-shop a:hover, .blog_section .blogs-loop .blog-title::after, 
                .title-cta::after, .cta-button a, 
                .test-psots-wrap .owl-controls .owl-dot:hover, .test-psots-wrap .owl-controls .owl-dot.active, 
                .bottom-footer .widget-title::after, 
                .mail-slider-header-wrap .owl-prev:hover, .mail-slider-header-wrap .owl-next:hover,
                .archive.woocommerce a.button, .woocommerce nav.woocommerce-pagination ul li a:hover, 
                .widget-title::after, .comments-area .comment-reply-title::after, 
                .comments-area .comments-title::after, .widget_tag_cloud .tagcloud a:hover, 
                .woocommerce-MyAccount-navigation ul li::before, 
                .woocommerce .cart .button, .woocommerce .cart input.button, 
                .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, 
                .woocommerce input.button, article.post .entry-title::after, article.post a.read-more, 
                .nav-links .page-numbers.current, .nav-links a.page-numbers:hover, .navigation a, 
                .comments-area .reply .comment-reply-link:hover, .comments-area input[type="submit"], 
                .page-content .search-form input[type="submit"], 
                .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, 
                .contact-area .contact-form-post input[type="submit"], 
                .woocommerce a.button, .woocommerce a.added_to_cart,
                .calendar_wrap caption {
                    background-color: <?php echo esc_attr($construction_skin_color) ?>;
                }
                .woocommerce-MyAccount-navigation ul li{
                    border-left: 3px solid <?php echo esc_attr($construction_skin_color) ?>;
                }
                .woocommerce-info {
                    border-top-color: <?php echo esc_attr($construction_skin_color) ?>;
                }
                .navigation a{
                    border: 2px solid <?php echo esc_attr($construction_skin_color) ?>;
                }
                .site-header .ak-search input[type="submit"], .slider-content a:hover, .about-button a:hover, 
                .cta-button a, .woocommerce nav.woocommerce-pagination ul li a:hover, 
                .nav-links .page-numbers.current, .nav-links a.page-numbers:hover, 
                .comments-area .reply .comment-reply-link:hover, .comments-area input[type="submit"], 
                .page-content .search-form input[type="submit"], 
                .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, 
                .contact-area .contact-form-post input[type="submit"], 
                .top-footer .social-icons .fa_link_wrap a:hover .fa_wrap {
                    border-color: <?php echo esc_attr($construction_skin_color) ?>;
                }
            </style>
        <?php
    }
}

add_action('wp_head', 'construction_dynamic_css',100);