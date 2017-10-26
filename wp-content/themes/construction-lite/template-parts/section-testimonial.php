<?php
/**
 * Testimonial Section
 */
 $construction_test_title = get_theme_mod('construction_testimonial_title');
 $construction_test_sub_title = get_theme_mod('construction_testimonial_sub_title');
 $construction_test_cat = get_theme_mod('construction_testimonial_cat');
 if($construction_test_title || $construction_test_sub_title || $construction_test_cat){ ?>
    <div class="ak-container">
        <?php if($construction_test_title || $construction_test_sub_title){ ?>
            <div class="section-title-sub-wrap wow fadeInUp">
                <?php if($construction_test_title){ ?><div class="section-title"><h5><?php echo esc_attr($construction_test_title); ?></h5></div><?php } ?>
                <?php if($construction_test_sub_title) { ?><div class="section-sub-title"><h2><?php echo esc_attr($construction_test_sub_title); ?></h2></div><?php } ?>
            </div>
        <?php } ?>
        <?php if($construction_test_cat){ ?>
            <div class="test-psots-wrap">
                <div class="test-post-loop-wrap">
                    <?php $construction_test_args = array(
                            'post_type' => 'post',
                            'order' => 'DESC',
                            'posts_per_page' => -1,
                            'post_status' => 'publish',
                            'category_name' => $construction_test_cat
                        );
                        wp_reset_postdata();
                        $construction_test_query = new WP_Query($construction_test_args);
                        if($construction_test_query->have_posts()): 
                            while($construction_test_query->have_posts()): $construction_test_query->the_post();
                                $construction_test_image_src = wp_get_attachment_image_src(get_post_thumbnail_id(),'construction-testimonial-image');
                                $construction_test_image_url = $construction_test_image_src[0];
                                if($construction_test_image_url || get_the_title() || get_the_content()){?>
                                    <div class="test-content wow fadeInUp">
                                        <?php if($construction_test_image_url){ ?><div class="image-test"><img src="<?php echo esc_url($construction_test_image_url) ?>" alt="<?php the_title_attribute() ?>" title="<?php the_title_attribute() ?>" /></div><?php } ?>
                                        <?php if(get_the_title() || get_the_content()){ ?>
                                            <div class="title-desc-test">
                                                <?php if(get_the_content()){ ?><div class="test-desc"><span class="top-quote"></span><p><?php echo  esc_attr(wp_trim_words(get_the_content(),'30','...')); ?></p><span class="bottom-quote"></span></div><?php } ?>
                                                <?php if(get_the_title()){ ?><div class="test-title"><?php echo construction_escape_test_title(get_the_title()); ?></div><?php } ?>
                                            </div>
                                        <?php } ?>
                                    </div>
                                <?php }
                            endwhile;
                        endif; ?>
                </div>
            </div>
        <?php } ?>
    </div>
 <?php } ?>