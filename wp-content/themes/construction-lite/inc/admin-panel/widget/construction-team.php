<?php
/**
 *
 * @package construction
 */
 if(!function_exists('construction_team_widget')){
add_action('widgets_init', 'construction_team_widget');

function construction_team_widget() {
    register_widget('construction_team');
}
}
if(!class_exists('construction_team')){
class construction_team extends WP_Widget {
    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        parent::__construct(
            'construction_team', 'Construction : Team',
             array(
                'description' => __('Team Members', 'construction')
                )
            );
    }

    /**
     * Helper function that holds widget fields
     * Array is used in update and form functions
     */
    private function widget_fields() {
        $construction_post_list = Construction_Posts_List();
        $fields = array(
            'construction_team_member_post' => array(
                'construction_widgets_name' => 'construction_team_member_post',
                'construction_widgets_title' => __('Team Member Post', 'construction'),
                'construction_widgets_field_type' => 'select',
                'construction_widgets_field_options' => $construction_post_list,
            ),
            'construction_team_member_designation' => array(
                'construction_widgets_name' => 'construction_team_member_designation',
                'construction_widgets_title' => __('Member Designation', 'construction'),
                'construction_widgets_field_type' => 'text',
            ),
            'construction_team_member_facebook' => array(
                'construction_widgets_name' => 'construction_team_member_facebook',
                'construction_widgets_title' => __('Facebook Link', 'construction'),
                'construction_widgets_field_type' => 'url',
            ),
            'construction_team_member_twitter' => array(
                'construction_widgets_name' => 'construction_team_member_twitter',
                'construction_widgets_title' => __('Twitter Link', 'construction'),
                'construction_widgets_field_type' => 'url',
            ),
            'construction_team_member_google' => array(
                'construction_widgets_name' => 'construction_team_member_google',
                'construction_widgets_title' => __('Google Plus Link', 'construction'),
                'construction_widgets_field_type' => 'url',
            ),
            'construction_team_member_youtube' => array(
                'construction_widgets_name' => 'construction_team_member_youtube',
                'construction_widgets_title' => __('Youtube Link', 'construction'),
                'construction_widgets_field_type' => 'url',
            ),
            'construction_team_member_instagram' => array(
                'construction_widgets_name' => 'construction_team_member_instagram',
                'construction_widgets_title' => __('Instagram Link', 'construction'),
                'construction_widgets_field_type' => 'url',
            ),
            'construction_team_member_linkedin' => array(
                'construction_widgets_name' => 'construction_team_member_linkedin',
                'construction_widgets_title' => __('LinkedIn', 'construction'),
                'construction_widgets_field_type' => 'url',
            ),
        );

        return $fields;
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance) {
        extract($args);
        $construction_team_member_post = $instance['construction_team_member_post'];
        $construction_member_designatoin = $instance['construction_team_member_designation'];
        
        $construction_facebook_link = $instance['construction_team_member_facebook'];
        $construction_twitter_link = $instance['construction_team_member_twitter'];
        $construction_google_link = $instance['construction_team_member_google'];
        $construction_youtube_link = $instance['construction_team_member_youtube'];
        $construction_instagram_link = $instance['construction_team_member_instagram'];
        $construction_linkedin_link = $instance['construction_team_member_linkedin'];
        
        echo $before_widget;
        if($construction_team_member_post || 
        $construction_member_designatoin || 
        $construction_google_link || 
        $construction_twitter_link || 
        $construction_facebook_link || 
        $construction_youtube_link || 
        $construction_instagram_link || 
        $construction_linkedin_link){
            
            $construction_team_posts = new WP_Query(array('post_type' => 'post', 'post__in' => array($construction_team_member_post)));
            if($construction_team_posts->have_posts()){
                while($construction_team_posts->have_posts()){
                    $construction_team_posts->the_post();
                    $construction_image_src = wp_get_attachment_image_src(get_post_thumbnail_id(),'construction-team-image');
                ?>
                    <div class="team-members wow fadeInUp">
                        <?php if($construction_image_src[0]){ ?><div class="member-image"><img src="<?php echo esc_url($construction_image_src[0]); ?>" title="<?php the_title_attribute();?>" alt="<?php the_title_attribute();?>" /></div><?php } ?>
                        <div class="team-sub-wrap">
                            <div class="member-name-designation-social">
                                <?php if(get_the_title()){ ?><div class="member-name"><h5><?php the_title(); ?></h5></div><?php } ?>
                                <?php if($construction_member_designatoin){ ?><div class="member-designation"><?php echo esc_attr($construction_member_designatoin); ?></div><?php } ?>
                                <?php if($construction_google_link || 
                                        $construction_twitter_link || 
                                        $construction_facebook_link || 
                                        $construction_youtube_link || 
                                        $construction_instagram_link || 
                                        $construction_linkedin_link){ ?>
                                            <div class="member-social-profile">
                                                <?php if($construction_facebook_link){ ?><a target="_blank" href="<?php echo esc_url($construction_facebook_link); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a><?php } ?>
                                                <?php if($construction_twitter_link){ ?><a target="_blank" href="<?php echo esc_url($construction_twitter_link); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a><?php } ?>
                                                <?php if($construction_google_link){ ?><a target="_blank" href="<?php echo esc_url($construction_google_link); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a><?php } ?>
                                                <?php if($construction_youtube_link){ ?><a target="_blank" href="<?php echo esc_url($construction_youtube_link); ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a><?php } ?>
                                                <?php if($construction_instagram_link){ ?><a target="_blank" href="<?php echo esc_url($construction_instagram_link); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a><?php } ?>
                                                <?php if($construction_linkedin_link){ ?><a target="_blank" href="<?php echo esc_url($construction_linkedin_link); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a><?php } ?>
                                            </div>
                                <?php } ?>
                            </div>
                            <?php if(get_the_content()){ ?><div class="member-description"><?php echo esc_attr(wp_trim_words(get_the_content(),'20','...')); ?></div><?php } ?>
                        </div>
                    </div>
            <?php
                }
            }
        }
        
        echo $after_widget;
    }

    public function update($new_instance, $old_instance) {
        $instance = $old_instance;

        $widget_fields = $this->widget_fields();

        // Loop through fields
        foreach ($widget_fields as $widget_field) {

            extract($widget_field);

            // Use helper function to get updated field values
            $instance[$construction_widgets_name] = construction_widgets_updated_field_value($widget_field, $new_instance[$construction_widgets_name]);
        }

        return $instance;
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param	array $instance Previously saved values from database.
     *
     * @uses	construction_widgets_show_widget_field()		defined in widget-fields.php
     */
    public function form($instance) {
        $widget_fields = $this->widget_fields();

        // Loop through fields
        foreach ($widget_fields as $widget_field) {

            // Make array elements available as variables
            extract($widget_field);
            $construction_widgets_field_value = !empty($instance[$construction_widgets_name]) ? esc_attr($instance[$construction_widgets_name]) : '';
            construction_widgets_show_widget_field($this, $widget_field, $construction_widgets_field_value);
        }
    }

}
}