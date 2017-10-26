jQuery(document).ready(function($){
        
    wp.customize( 'construction_about_title', function( value ) {
		value.bind( function( newval ) {
			$( '#construct_about_section .section-title h5' ).html( newval );
		} );
	} );
    wp.customize( 'construction_about_sub_title', function( value ) {
		value.bind( function( newval ) {
			$( '#construct_about_section .section-sub-title h2' ).html( newval );
		} );
	} );
    wp.customize( 'construction_feature_title', function( value ) {
		value.bind( function( newval ) {
			$( '#construct_feature_section .section-title h5' ).html( newval );
		} );
	} );
    wp.customize( 'construction_feature_sub_title', function( value ) {
		value.bind( function( newval ) {
			$( '#construct_feature_section .section-sub-title h2' ).html( newval );
		} );
	} );
    wp.customize( 'construction_team_title', function( value ) {
		value.bind( function( newval ) {
			$( '#construct_team_section .section-title h5' ).html( newval );
		} );
	} );
    wp.customize( 'construction_team_sub_title', function( value ) {
		value.bind( function( newval ) {
			$( '#construct_team_section .section-sub-title h2' ).html( newval );
		} );
	} );
    wp.customize( 'construction_portfolio_title', function( value ) {
		value.bind( function( newval ) {
			$( '#construct_portfolio_section .section-title h5' ).html( newval );
		} );
	} );
    wp.customize( 'construction_portfolio_sub_title', function( value ) {
		value.bind( function( newval ) {
			$( '#construct_portfolio_section .section-sub-title h2' ).html( newval );
		} );
	} );
    wp.customize( 'construction_blog_title', function( value ) {
		value.bind( function( newval ) {
			$( '#construct_blog_section .section-title h5' ).html( newval );
		} );
	} );
    wp.customize( 'construction_blog_sub_title', function( value ) {
		value.bind( function( newval ) {
			$( '#construct_blog_section .section-sub-title h2' ).html( newval );
		} );
	} );
    wp.customize( 'construction_shop_title', function( value ) {
		value.bind( function( newval ) {
			$( '#construct_shop_section .section-title h5' ).html( newval );
		} );
	} );
    wp.customize( 'construction_shop_sub_title', function( value ) {
		value.bind( function( newval ) {
			$( '#construct_shop_section .section-sub-title h2' ).html( newval );
		} );
	} );
     wp.customize( 'construction_testimonial_title', function( value ) {
		value.bind( function( newval ) {
			$( '#construct_testimonial_section .section-title h5' ).html( newval );
		} );
	} );
    wp.customize( 'construction_testimonial_sub_title', function( value ) {
		value.bind( function( newval ) {
			$( '#construct_testimonial_section .section-sub-title h2' ).html( newval );
		} );
	} );
    wp.customize( 'construction_top_footer_description', function( value ) {
		value.bind( function( newval ) {
			$( '.top-footer-desc' ).html( newval );
		} );
	} );
     wp.customize( 'construction_footer_text', function( value ) {
		value.bind( function( newval ) {
			$( 'span.text-input' ).html( newval );
		} );
	} );
    wp.customize( 'construction_cta_title', function( value ) {
		value.bind( function( newval ) {
			$( '.title-cta' ).html( newval );
		} );
	} );
    wp.customize( 'construction_cta_section_description', function( value ) {
		value.bind( function( newval ) {
			$( '.desc-cta' ).html( newval );
		} );
	} );
    wp.customize( 'construction_cta_button_text', function( value ) {
		value.bind( function( newval ) {
			$( '.cta-button a' ).html( newval );
		} );
	} );
    wp.customize( 'construction_body_font_size', function( value ) {
		value.bind( function( newval ) {
			$( 'body, .about-post-content, .feature-post .feature-content, .member-description, .blog_section .blogs-loop .blog-content, .testimonial_section .test-desc, .top-footer-desc' ).attr( 'style','font-size:'+newval+'px !important' );
		} );
	} );
    wp.customize( 'construction_h1_font_size', function( value ) {
		value.bind( function( newval ) {
			$( 'h1' ).attr( 'style','font-size:'+newval+'px !important' );
		} );
	} );
    wp.customize( 'construction_h2_font_size', function( value ) {
		value.bind( function( newval ) {
			$( 'h2' ).attr( 'style','font-size:'+newval+'px !important' );
		} );
	} );
    wp.customize( 'construction_h3_font_size', function( value ) {
		value.bind( function( newval ) {
			$( 'h3' ).attr( 'style','font-size:'+newval+'px !important' );
		} );
	} );
    wp.customize( 'construction_h4_font_size', function( value ) {
		value.bind( function( newval ) {
			$( 'h4' ).attr( 'style','font-size:'+newval+'px !important' );
		} );
	} );
    wp.customize( 'construction_h5_font_size', function( value ) {
		value.bind( function( newval ) {
			$( 'h5' ).attr( 'style','font-size:'+newval+'px !important' );
		} );
	} );
    wp.customize( 'construction_h6_font_size', function( value ) {
		value.bind( function( newval ) {
			$( 'h6' ).attr( 'style','font-size:'+newval+'px !important' );
		} );
	} );
    wp.customize( 'construction_body_font', function( value ) {
		value.bind( function( font ) {
			$( 'body' ).attr( 'style', 'font-family: '+font+' !important' );
                WebFont.load({
                    google: {
                      families: [font]
                    }
              });
		} );
	} );
    wp.customize( 'construction_h1_font', function( value ) {
		value.bind( function( font ) {
			$( 'h1' ).attr( 'style', 'font-family: '+font+' !important' );
                WebFont.load({
                    google: {
                      families: [font]
                    }
              });
		} );
	} );
    wp.customize( 'construction_h2_font', function( value ) {
		value.bind( function( font ) {
			$( 'h2' ).attr( 'style', 'font-family: '+font+' !important' );
                WebFont.load({
                    google: {
                      families: [font]
                    }
              });
		} );
	} );
    wp.customize( 'construction_h3_font', function( value ) {
		value.bind( function( font ) {
			$( 'h3' ).attr( 'style', 'font-family: '+font+' !important' );
                WebFont.load({
                    google: {
                      families: [font]
                    }
              });
		} );
	} );
    wp.customize( 'construction_h4_font', function( value ) {
		value.bind( function( font ) {
			$( 'h4' ).attr( 'style', 'font-family: '+font+' !important' );
                WebFont.load({
                    google: {
                      families: [font]
                    }
              });
		} );
	} );
    wp.customize( 'construction_h5_font', function( value ) {
		value.bind( function( font ) {
			$( 'h5' ).attr( 'style', 'font-family: '+font+' !important' );
                WebFont.load({
                    google: {
                      families: [font]
                    }
              });
		} );
	} );
    wp.customize( 'construction_h6_font', function( value ) {
		value.bind( function( font ) {
			$( 'h6' ).attr( 'style', 'font-family: '+font+' !important' );
                WebFont.load({
                    google: {
                      families: [font]
                    }
              });
		} );
	} );
    wp.customize('construction_skin_color',function(value){
         value.bind( function( newval ) {
			var cssadd = '<style>'+
                            '.main-navigation .current-menu-item > a, .main-navigation a:hover, .main-navigation li:hover > a, .site-header .search-icon:hover, .header-cart-search:hover .cart-fa-icon, .woocommerce a.remove, .woocommerce.widget_shopping_cart ul.cart_list li a.remove, ul.cart_list li a:hover, .woocommerce.widget_shopping_cart, .member-social-profile a:hover, .blog_section .blogs-loop a:hover, .item-wrap .pric, .woocommerce .star-rating, .woocommerce .product-rating, .top-footer .social-icons .fa_link_wrap a:hover .fa_wrap, .bottom-footer a:hover, .bottom-footer .widget_construction_recent_post .recent-posts-content a:hover, .widget_aptf_widget .aptf-tweet-content .aptf-tweet-name, a:active, .item-wrap .price, .woocommerce .star-rating, .widget_aptf_widget .aptf-tweet-content .aptf-tweet-name, .site-footer .site-info a, .item-wrap a.product-name h5:hover{color:'+newval+'! important;}'+
                            '.cart-count, .woocommerce a.remove:hover, .woocommerce.widget_shopping_cart ul.cart_list li a.remove:hover, .mail-slider-header-wrap .owl-prev:hover, .slider-content a:hover, .section-sub-title h2:before, .member-name-designation-social .member-designation:after, .about-button a:hover, .feature_section .posts-feature, .woocommerce a.button, .blog_section .blogs-loop .blog-title:after, .blog_section .blog-left .blog-date, .title-cta:after, .cta-button a, .test-psots-wrap .owl-controls .owl-dot:hover, .test-psots-wrap .owl-controls .owl-dot.active, .bottom-footer .widget-title:after{background:'+newval+'! important;}'+
                            '.about-button a:hover, .slider-content a:hover, .top-footer .social-icons .fa_link_wrap a:hover .fa_wrap, .cta-button a{border-color:'+newval+'! important;}'+
                            '.woocommerce a.button:hover{background:#dad8da! important;}'+
                            //'.cta-button a{background:2px solid '+newval+';! important;}'+
                            '.cta-button a:hover{background:transparent! important;}'+
                         '</style>';
            $('#css-add').html(cssadd);
		} );
    });
});