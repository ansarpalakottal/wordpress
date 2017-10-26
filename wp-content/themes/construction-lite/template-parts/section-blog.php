<?php
/**
 * Blog Section
 */
 $construction_blog_section_title = get_theme_mod('construction_blog_title');
 $construction_blog_section_sub_title = get_theme_mod('construction_blog_sub_title');
 $construction_blog_cat = get_theme_mod('construction_blog_cat');
 if($construction_blog_section_title || $construction_blog_section_sub_title || $construction_blog_cat){
    ?>
    <div class="ak-container">
        <div class="blog-wrap-contents">
            <?php if($construction_blog_section_title || $construction_blog_section_sub_title){ ?>
                
                    <div class="section-title-sub-wrap wow fadeInUp">
                        <?php if($construction_blog_section_title){ ?><div class="section-title"><h5><?php echo esc_attr($construction_blog_section_title); ?></h5></div><?php } ?>
                        <?php if($construction_blog_section_sub_title) { ?><div class="section-sub-title"><h2><?php echo esc_attr($construction_blog_section_sub_title); ?></h2></div><?php } ?>
                    </div>
                
            <?php } ?>
            <?php
            if($construction_blog_cat){
                $construction_blog_args = array(
                    'poat_type' => 'post',
                    'order' => 'DESC',
                    'posts_per_page' => 6,
                    'post_status' => 'publish',
                    'category_name' => $construction_blog_cat
                );
                $construction_blog_query = new WP_Query($construction_blog_args);
                if($construction_blog_query->have_posts()):
                    ?>
                        <div class="blogs-contents clearfix">
                            <div id="blog-content-wrap">
                                <?php while($construction_blog_query->have_posts()):
                                        $construction_blog_query->the_post();
                                        $construction_blog_image_src = wp_get_attachment_image_src(get_post_thumbnail_id(),'construction-blog-image');
                                        $construction_blog_image_url = $construction_blog_image_src[0]; 
                                        if($construction_blog_image_url || get_the_title() || get_the_content()){?>
                                            <div class="blogs-loop wow fadeInUp">
                                                <?php if($construction_blog_image_url){ ?>
                                                    <div class="blog-left">
                                                        <div class="image-date">
                                                            <a href="<?php the_permalink() ?>"><img src="<?php echo esc_url($construction_blog_image_url); ?>" title="<?php the_title_attribute() ?>" alt="<?php the_title_attribute() ?>" /></a>
                                                            <div class="blog-date">
                                                                <span class="blog-day"><?php echo absint(get_the_date('d')); ?></span>
                                                                <span class="blog-month"><?php echo esc_attr(get_the_date('M')); ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                                <?php if(get_the_title() || get_the_content()){ ?>
                                                    <div class="blog-right">
                                                            <?php if(get_the_title()){ ?><div class="blog-title"><a href="<?php the_permalink() ?>"><h5><?php the_title(); ?></h5></a></div><?php } ?>
                                                        <div class="author-comment">
                                                            <span class="blog-author"><?php echo esc_url(the_author_posts_link()); ?></span>
                                                            <span class="blog-comment"><?php echo get_comments_number(); _e(' comment','construction'); ?></span>
                                                        </div>
                                                        <?php if(get_the_content()){ ?>
                                                            <div class="blog-content">
                                                                <?php echo esc_attr(wp_trim_words(get_the_content(),'20','...')); ?>
                                                                <a href="<?php the_permalink(); ?>"><?php _e('Read More','construction') ?></a>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        <?php } ?>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    <?php
                endif;
            }
            ?>
        </div>
    </div>
    <?php
 }