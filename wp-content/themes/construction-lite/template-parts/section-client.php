<?php
/**
 * Section Client
 */
 $construction_client_cat = get_theme_mod('construction_client_cat');
 if($construction_client_cat){
  $construction_client_args = array(
        'post_type' => 'post',
        'order' => 'DESC',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'category_name' => $construction_client_cat
      );
      $construction_client_query = new WP_Query($construction_client_args);
  if($construction_client_query->have_posts()):
    ?>
    <div class="ak-container">
        <div class="client-logos">
            <div class="client-logo-wrap">
                <?php
                    while($construction_client_query->have_posts()):
                        $construction_client_query->the_post();
                        $construction_client_logo_src = wp_get_attachment_image_src(get_post_thumbnail_id(),'construction-client-logo');
                        $construction_client_logo_url = $construction_client_logo_src[0];
                        if($construction_client_logo_url){
                            ?>
                                <div class="client-contents wow fadeInUp">
                                    <div class="client-logo-image">
                                        <img src="<?php echo esc_url($construction_client_logo_url); ?>" alt="<?php the_title_attribute() ?>" title="<?php the_title_attribute() ?>" />
                                    </div>
                                </div>
                            <?php
                        }
                    endwhile;
                ?>
            </div>
        </div>
    </div>
    <?php
  endif;
 }