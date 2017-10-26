<?php
/**
 * Template Name: Contact Page
 */
 get_header();
 do_action('construction_header_banner');?>
 <div class="ak-container">
    	<div id="primary" class="content-area">
    		<main id="main" class="site-main" role="main">
            <?php
                $construction_map_iframe_post = get_theme_mod('construction_mape_iframe_page');
                $construction_form_title = get_theme_mod('construction_contact_form_title');
                $construction_form_description = get_theme_mod('construction_contact_form_description');
                $construction_form_post = get_theme_mod('construction_contact_page');
                if($construction_map_iframe_post 
                || $construction_form_title 
                || $construction_form_description 
                || $construction_form_post){
                    if($construction_form_title || $construction_form_description || $construction_form_post){
             ?>
                <div class="contact-area">
                <?php if($construction_form_title || $construction_form_description){ ?>
                    <div class="form-title-desc">
                        <?php if($construction_form_title){ ?><div class="contact-titl"><?php echo esc_attr($construction_form_title); ?></div><?php } ?>
                        <?php if($construction_form_description){ ?><div class="contact-desc"><?php echo wp_kses_post($construction_form_description); ?> </div><?php } ?>
                    </div>
                <?php }
                $construction_contact_form_post = new WP_Query(array('post_type' => 'post', 'post__in' => array($construction_form_post)));
                if($construction_contact_form_post->have_posts()){
                    while($construction_contact_form_post->have_posts()){
                        $construction_contact_form_post->the_post();?>
                        <div class="contact-form-post">
                            <?php the_content(); ?>
                        </div>
                    <?php }
                } ?>
                </div>
             <?php } ?>
                <?php if($construction_map_iframe_post){
                        $construction_contact_map_post = new WP_Query(array('post_type' => 'post', 'post__in' => array($construction_map_iframe_post)));
                        if($construction_contact_map_post->have_posts()):?>
                            <div class="map-area">
                            <?php while($construction_contact_map_post->have_posts()): 
                            $construction_contact_map_post->the_post();?>
                                <div class="iframe-wrap">
                                    <?php the_content(); ?>
                                </div>
                            <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                <?php } ?>
             <?php } ?>
            </main>
        </div>
 </div>
 <?php
 get_footer();