<?php
/**
 * Template Name: Construction Home
 */
 get_header();
    $construction_enable_sections = construction_enable_disable_section();
    if($construction_enable_sections){
        foreach($construction_enable_sections as $construction_enable_section){
            ?>
                <section id="<?php echo esc_attr($construction_enable_section['id']); ?>" class="<?php echo esc_attr($construction_enable_section['section']).'_section'; ?>">
                    <?php
                        get_template_part('template-parts/section',$construction_enable_section['section']);
                    ?>                
                </section>
            <?php
        }
    }
 get_footer();