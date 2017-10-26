<?php
/**
 *
 * @package construction
 */
 if(!function_exists('construction_recent_post_widget')){
add_action('widgets_init', 'construction_recent_post_widget');

function construction_recent_post_widget() {
    register_widget('construction_recent_post');
}
}
if(!class_exists('construction_recent_post')){
class construction_recent_post extends WP_Widget {
    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        parent::__construct(
                'construction_recent_post', 'Construction : Recent Post', array(
            'description' => __('Recent Posts', 'construction')
                )
        );
    }

    /**
     * Helper function that holds widget fields
     * Array is used in update and form functions
     */
    private function widget_fields() {
        $construction_cat_list = Construction_Category_list();
        $fields = array(
            'construction_recent_post_title' => array(
                'construction_widgets_name' => 'construction_recent_post_title',
                'construction_widgets_title' => __('Title', 'construction'),
                'construction_widgets_field_type' => 'text',
            ),
            'construction_recent_post_cat' => array(
                'construction_widgets_name' => 'construction_recent_post_cat',
                'construction_widgets_title' => __('Recent Post Category', 'construction'),
                'construction_widgets_field_type' => 'select',
                'construction_widgets_field_options' => $construction_cat_list,
            ),
            'construction_recent_post_per_page' => array(
                'construction_widgets_name' => 'construction_recent_post_per_page',
                'construction_widgets_title' => __('Posts Per Page', 'construction'),
                'construction_widgets_field_type' => 'number',
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
        $construction_recent_post_title = $instance['construction_recent_post_title'];
        $construction_recent_post_cat = $instance['construction_recent_post_cat'];
        $construction_recent_post_per_page = $instance['construction_recent_post_per_page'];
        if($construction_recent_post_per_page == ''){
            $construction_recent_post_per_page = '-1';
        }
        
        echo $before_widget;
            if($construction_recent_post_title || $construction_recent_post_cat){
                if($construction_recent_post_title){
                    ?>
                        <h2 class="widget-title"><?php echo esc_attr($construction_recent_post_title); ?></h2>
                    <?php
                }
                $construction_recent_post_args = array(
                        'post_type' => 'post',
                        'order' => 'DESC',
                        'posts_per_page' => $construction_recent_post_per_page,
                        'post_status' => 'publish',
                        'category_name' => $construction_recent_post_cat
                    );
                $construction_recent_post_query = new WP_Query($construction_recent_post_args);
                if($construction_recent_post_query->have_posts()):
                    ?>
                    <div class="recent-post-widget">
                        <?php
                        while($construction_recent_post_query->have_posts()):
                            $construction_recent_post_query->the_post();
                            $construction_recent_post_image = wp_get_attachment_image_src(get_post_thumbnail_id(),'construction-recent-post-image');
                            $construction_recent_post_image_url = $construction_recent_post_image[0];
                            if($construction_recent_post_image_url || get_the_title){
                                ?>
                                    <div class="recent-posts-content clearfix">
                                        <?php if($construction_recent_post_image_url){ ?><div class="image-recent-post"><img src="<?php echo esc_url($construction_recent_post_image_url) ?>" alt="<?php the_title_attribute() ?>" title="<?php the_title_attribute() ?>" /></div><?php } ?>
                                        <div class="date-title-recent-post">
                                            <?php if(get_the_title()){ ?><span class="recent-post-title"><a href="<?php the_permalink(); ?>"><?php echo esc_attr(wp_trim_words(get_the_title(),'5','...')); ?></a></span><?php } ?>
                                            <span class="recent-post-date"><?php echo esc_attr(get_the_date('d,F,Y')); ?></span>
                                        </div>
                                    </div>
                                <?php
                            }
                        endwhile;
                        ?>
                    </div>
                    <?php
                endif;
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