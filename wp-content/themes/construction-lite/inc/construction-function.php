<?php
function construction_esc_slider_content($input){
    $construction_slider_content = array(
        'a' => array(
            'class' => array(),
            'href' => array(),
            'targer' => array(),
        ),
        'div'=>array(
            'class' => array(),
            'id' => array(),
        ),
        'span'=>array(
            'class' => array(),
            'id' => array(),
        )
    );
    return wp_kses($input,$construction_slider_content);
}
function Construction_Slider_Control(){
    $construct_slider_cat = get_theme_mod('construction_slider_cat');
    if($construct_slider_cat){
        $construct_slider_args = array(
            'post_type' => 'post',
            'order' => 'DESC',
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'category_name' => $construct_slider_cat
        );
        $construct_slider_query = new WP_Query($construct_slider_args);
        if($construct_slider_query->have_posts()):
            ?>
            <div class="mail-slider-header-wrap">
                <div id="header-slider-wrap">
                    <?php
                        while($construct_slider_query->have_posts()):
                            $construct_slider_query->the_post();
                            $construction_slider_image_src = wp_get_attachment_image_src(get_post_thumbnail_id(),'construction-slider-image');
                            $construction_image_url = $construction_slider_image_src[0];
                            if($construction_image_url || get_the_title() || get_the_content()){
                                ?>
                                    <div class="content-slider">
                                        <?php if($construction_image_url){ ?>
                                            <div class="slider-image"><img src="<?php echo esc_url($construction_image_url); ?>" alt="<?php the_title_attribute(); ?>" title="<?php the_title_attribute(); ?>" /></div>
                                        <?php } ?>
                                        <?php if(get_the_title() || get_the_content()){ ?>
                                                <div class="slider-text-content">
                                                    <div class="ak-container">
                                                        <?php if(get_the_title()){ ?><div class="slider-title"><?php the_title(); ?></div><?php } ?>
                                                        <?php if(get_the_content()){ ?><div class="slider-content"> <?php echo construction_esc_slider_content(get_the_content()); ?></div><?php } ?>
                                                    </div>
                                                </div>
                                        <?php } ?>
                                    </div>
                                <?php
                            }
                        endwhile;
                    ?>
                </div>
            </div>
            <?php
        endif;
    }
}
add_action('construction_slider_action','Construction_Slider_Control');

function Construction_Category_list(){
    $construction_cat_lists = get_categories(
        array(
            'hide_empty' => '0',
            'exclude' => '1',
        )
    );
    $construction_cat_array = array();
    $construction_cat_array[''] = __('--Choose--','construction');
    foreach($construction_cat_lists as $construction_cat_list){
        $construction_cat_array[$construction_cat_list->slug] = $construction_cat_list->name;
    }
    return $construction_cat_array;
}
function Construction_Posts_List(){
    wp_reset_postdata();
    $construction_post_lists = get_posts(array('posts_per_page' => -1));
    $construction_post_list_array = array();
    $construction_post_list_array[''] = __('--Choose--','construction');
    foreach($construction_post_lists as $construction_post_list){
        $construction_post_list_array[$construction_post_list->ID] = $construction_post_list->post_title;
    }
    return $construction_post_list_array;
}
function construction_enable_disable_section(){
    $construction_sections = array('about','feature','team','portfolio','blog','cta','shop','testimonial','client');
    $construction_enable_sections = array();
    foreach($construction_sections as $construction_section){
        if(get_theme_mod('construction_'.$construction_section.'_enable')){
            $construction_enable_sections[] = array(
                'id' => 'construct_'.$construction_section.'_section',
                'section' => $construction_section,
            );
        }
    }
    return $construction_enable_sections;
}
function construction_escape_test_title($input){
    $pass_array = array(
            'span' => array(
                'class' => array(),
            ),
        );
        return wp_kses($input,$pass_array);
}
function construction_header_social_link(){
                $social_link = array('facebook','twitter','youtube','pinterest','instagram','linkedin','googleplus','flickr');
                foreach($social_link as $social_links){
                    
                    $social_links_val = get_theme_mod('construction_'.$social_links.'_link');
                    if($social_links == 'googleplus'){
                        if($social_links_val){
                            echo '<div class="fa_link_wrap">';
                            ?> <a target="_blank" href="<?php echo esc_url($social_links_val); ?>"> <?php
                                echo '<span class="fa_wrap">';
                                    echo '<i class="fa fa-google-plus" aria-hidden="true"></i>';
                                echo '</span>';
                                echo '<div class="link_wrap">';
                                    ?>
                                        <?php echo esc_attr($social_links); ?>  
                                    <?php
                                echo '</div>';
                                ?></a>   <?php
                            echo '</div>';
                        }
                    }
                    elseif($social_links == 'pinterest'){
                        if($social_links_val){
                            echo '<div class="fa_link_wrap">';
                            ?><a target="_blank" href="<?php echo esc_url($social_links_val); ?>"><?php
                                echo '<span class="fa_wrap">';
                                echo '<i class="fa fa-pinterest-p" aria-hidden="true"></i>';
                                echo '</span>';
                                echo '<div class="link_wrap">';
                                    ?>
                                        <?php echo esc_attr($social_links); ?>   
                                    <?php
                                echo '</div>';
                                ?> </a> <?php
                            echo '</div>';
                        }
                    }
                    else{
                            if($social_links_val){
                            echo '<div class="fa_link_wrap">';
                            ?> <a target="_blank" href="<?php echo esc_url($social_links_val) ?>"> <?php
                                echo '<span class="fa_wrap">';
                                    ?>
                                        <i class="fa fa-<?php echo esc_attr($social_links); ?>"></i>
                                    <?php
                                echo '</span>';
                                echo '<div class="link_wrap">';
                                    ?>
                                        <?php echo esc_attr($social_links); ?>    
                                    <?php
                                echo '</div>';
                                ?> </a> <?php
                            echo '</div>';
                        }
                    }
                }
}
add_action('construction_header_social_link_acrion','construction_header_social_link');
function construction_header_banner_x() {
	if(is_page_template( 'template-home.php' ) || is_home() || is_front_page()) :
	else :
		?>
			<div class="header-banner-container">
                <div class="ak-container">
    				<div class="page-title-wrap">
    					<?php
    						if(is_archive()) {
    							the_archive_title( '<h1 class="page-title">', '</h1>' );
    							the_archive_description( '<div class="taxonomy-description">', '</div>' );
    						} elseif(is_single() || is_singular('page')) {
    							wp_reset_postdata();
    							the_title('<h1 class="page-title">', '</h1>');
    						} elseif(is_search()) {
                                ?>
                                <h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'construction' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                                <?php
                            } elseif(is_404()) {
                                ?>
                                <h1 class="page-title"><?php esc_html_e( '404 Error', 'construction' ); ?></h1>
                                <?php
                            }
    					?>
    					<?php construction_breadcrumbs(); ?>
    				</div>
                </div>
			</div>
		<?php
	endif;
}
add_action('construction_header_banner', 'construction_header_banner_x');
function construction_sanitize_bradcrumb($input){
    $all_tags = array(
        'a'=>array(
            'href'=>array()
        )
     );
    return wp_kses($input,$all_tags);
    
}
function construction_breadcrumbs() {
    global $post;
    $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show

    $delimiter = '&gt;';

    $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
    $homeLink = esc_url( home_url() );

    if (is_home() || is_front_page()) {

        if ($showOnHome == 1)
            echo '<div id="construction-breadcrumb"><a href="' . $homeLink . '">' . __('Home', 'construction') . '</a></div></div>';
    } else {

        echo '<div id="construction-breadcrumb"><a href="' . $homeLink . '">' . __('Home', 'construction') . '</a> ' . esc_attr($delimiter) . ' ';

        if (is_category()) {
            $thisCat = get_category(get_query_var('cat'), false);
            if ($thisCat->parent != 0)
                echo get_category_parents($thisCat->parent, TRUE, ' ' . esc_attr($delimiter) . ' ');
            echo '<span class="current">' . __('Archive by category','construction').' "' . single_cat_title('', false) . '"' . '</span>';
        } elseif (is_search()) {
            echo '<span class="current">' . __('Search results for','construction'). '"' . get_search_query() . '"' . '</span>';
        } elseif (is_day()) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . esc_attr($delimiter) . ' ';
            echo '<a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . esc_attr($delimiter) . ' ';
            echo '<span class="current">' . get_the_time('d') . '</span>';
        } elseif (is_month()) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . esc_attr($delimiter) . ' ';
            echo '<span class="current">' . get_the_time('F') . '</span>';
        } elseif (is_year()) {
            echo '<span class="current">' . get_the_time('Y') . '</span>';
        } elseif (is_single() && !is_attachment()) {
            if (get_post_type() != 'post') {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                echo '<a href="' . esc_url($homeLink) . '/' . esc_attr($slug['slug']) . '/">' . esc_attr($post_type->labels->singular_name) . '</a>';
                if ($showCurrent == 1)
                    echo ' ' . esc_attr($delimiter) . ' ' . '<span class="current">' . get_the_title() . '</span>';
            } else {
                $cat = get_the_category();
                $cat = $cat[0];
                $cats = get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
                if ($showCurrent == 0)
                    $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
                echo construction_sanitize_bradcrumb($cats);
                if ($showCurrent == 1)
                    echo '<span class="current">' . get_the_title() . '</span>';
            }
        } elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
            $post_type = get_post_type_object(get_post_type());
            echo '<span class="current">' . esc_attr($post_type->labels->singular_name) . '</span>';
        } elseif (is_attachment()) {
            if ($showCurrent == 1) echo ' ' . '<span class="current">' . get_the_title() . '</span>';
        } elseif (is_page() && !$post->post_parent) {
            if ($showCurrent == 1)
                echo '<span class="current">' . get_the_title() . '</span>';
        } elseif (is_page() && $post->post_parent) {
            $parent_id = $post->post_parent;
            $breadcrumbs = array();
            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
                $parent_id = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            for ($i = 0; $i < count($breadcrumbs); $i++) {
                echo construction_sanitize_bradcrumb($breadcrumbs[$i]);
                if ($i != count($breadcrumbs) - 1)
                    echo ' ' . esc_attr($delimiter). ' ';
            }
            if ($showCurrent == 1)
                echo ' ' . esc_attr($delimiter) . ' ' . '<span class="current">' . get_the_title() . '</span>';
        } elseif (is_tag()) {
            echo '<span class="current">' . __('Posts tagged','construction').' "' . single_tag_title('', false) . '"' . '</span>';
        } elseif (is_author()) {
            global $author;
            $userdata = get_userdata($author);
            echo '<span class="current">' . __('Articles posted by ','construction'). esc_attr($userdata->display_name) . '</span>';
        } elseif (is_404()) {
            echo '<span class="current">' . 'Error 404' . '</span>';
        }

        if (get_query_var('paged')) {
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author())
                echo ' (';
            echo __('Page', 'construction') . ' ' . get_query_var('paged');
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author())
                echo ')';
        }

        echo '</div>';
    }
}
function construction_font_size(){
     $font_size[''] = 'Default';
    for($i=12;$i<=70;$i++)
    {
        $font_size[$i] = $i;
    }
   
    return $font_size;
}
function construction_fonts()
{
    return $fonts = array(
        ''=>'Default',
        'Raleway'=>'Raleway',
        'Source Sans Pro'=>'Source Sans Pro',
        'Josefin Sans'=>'Josefin Sans'
    );
}