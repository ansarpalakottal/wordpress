<?php
/**
 * CTA Section
 */
 $construction_cta_title = get_theme_mod('construction_cta_title');
 $construction_cta_description = get_theme_mod('construction_cta_section_description');
 $construction_cta_button_text = get_theme_mod('construction_cta_button_text');
 $construction_cta_button_link = get_theme_mod('construction_cta_button_link');
 if($construction_cta_title || $construction_cta_description || $construction_cta_button_text || $construction_cta_button_link){
    ?>
        <div class="ak-container">
            <div class="cta-weap wow fadeInUp">
                <?php if($construction_cta_title){ ?><div class="title-cta"><?php echo esc_attr($construction_cta_title); ?></div><?php } ?>
                <?php if($construction_cta_description){ ?><div class="desc-cta"><?php echo esc_attr($construction_cta_description); ?></div><?php } ?>
                <?php if($construction_cta_button_link){ ?><div class="cta-button"><a href="<?php echo esc_url($construction_cta_button_link); ?>"><?php echo esc_attr($construction_cta_button_text); ?></a></div><?php } ?>
            </div>
        </div>
    <?php
 }