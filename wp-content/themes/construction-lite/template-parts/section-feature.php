<?php
/**
 * Feature Section
 */
 $construciton_feature_section_title = get_theme_mod('construction_feature_title');
 $construciton_feature_section_sub_title = get_theme_mod('construction_feature_sub_title');
 $construction_feature_section_image = get_theme_mod('construction_feature_image');
 ?>
 
<?php if($construciton_feature_section_title || $construciton_feature_section_sub_title){ ?>
    <div class="section-title-sub-wrap wow fadeInUp">
        <div class="ak-container">
            <?php if($construciton_feature_section_title){ ?><div class="section-title"><h5><?php echo esc_attr($construciton_feature_section_title); ?></h5></div><?php } ?>
            <?php if($construciton_feature_section_sub_title) { ?><div class="section-sub-title"><h2><?php echo esc_attr($construciton_feature_section_sub_title); ?></h2></div><?php } ?>
        </div>
    </div>
<?php } ?>
<?php
    $construction_feature_category = get_theme_mod('construction_feature_cat');
    if($construction_feature_category){
        wp_reset_postdata();
        $construction_feature_args = array(
            'poat_type' => 'post',
            'order' => 'DESC',
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'category_name' => $construction_feature_category
        );
        $construction_feature_query = new WP_Query($construction_feature_args);
        if($construction_feature_query->have_posts() || $construction_feature_section_image):
        ?>
            <div class="posts-feature wow fadeInUp">
                <div class="ak-container clearfix">
                    <?php while($construction_feature_query->have_posts()): $construction_feature_query->the_post();
                    $construction_feature_image_src = wp_get_attachment_image_src(get_post_thumbnail_id(),'construction-feature-image');
                    $construction_feature_image_url = $construction_feature_image_src[0];
                        if(get_the_title() || get_the_content() || $construction_feature_image_url || $construction_feature_section_image){ ?>
                            <div class="feature-post">
                                <?php if(get_the_title() || get_the_content()){ ?>
                                    <div class="title-content-feature">
                                        <?php if(get_the_title()){ ?><div class="feature-title"><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></div><?php } ?>
                                        <?php if(get_the_content()){ ?><div class="feature-content"><?php echo esc_attr(wp_trim_words(get_the_content(),'15','...')); ?></div><?php } ?>
                                    </div>
                                <?php } ?>
                                <?php if($construction_feature_image_url){ ?>
                                    <div class="feature-image">
                                        <img src="<?php echo esc_url($construction_feature_image_url); ?>" alt="<?php the_title_attribute() ?>" title="<?php the_title_attribute() ?>" />
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    <?php endwhile; ?>
                    <?php if($construction_feature_section_image){
                        ?>
                            <div class="section-feature-image">
                                <div class="feature-section-image">
                                    <img src="<?php echo esc_url($construction_feature_section_image); ?>" alt="Feature Image" title="Feature Image" />
                                </div>
                            </div>
                        <?php
                    } ?>
                </div>
            </div>
        <?php 
        endif;
        } ?>