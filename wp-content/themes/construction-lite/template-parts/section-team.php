<?php
/**
 * Team section
 */
 $construction_team_section_title = get_theme_mod('construction_team_title');
 $construction_team_section_sub_title = get_theme_mod('construction_team_sub_title');
 if($construction_team_section_title || $construction_team_section_sub_title || is_active_sidebar('construction-team-member')){
 ?>
 <div class="ak-container">
     <?php if($construction_team_section_title || $construction_team_section_sub_title){ ?>
        <div class="section-title-sub-wrap wow fadeInUp">
            <?php if($construction_team_section_title){ ?><div class="section-title"><h5><?php echo esc_attr($construction_team_section_title); ?></h5></div><?php } ?>
            <?php if($construction_team_section_sub_title) { ?><div class="section-sub-title"><h2><?php echo esc_attr($construction_team_section_sub_title); ?></h2></div><?php } ?>
        </div>
    <?php } ?>
    <?php if(is_active_sidebar('construction-team-member')){ ?>
            <div class="team-members-contents  clearfix">
                <?php
                    dynamic_sidebar('construction-team-member');
                ?>
            </div>
    <?php } ?>
 </div>
 <?php
 }