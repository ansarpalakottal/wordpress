<?php
/**
 *
 * @package construction
 */
 if(!function_exists('construction_info_widget')){
add_action('widgets_init', 'construction_info_widget');

function construction_info_widget() {
    register_widget('construction_info');
}
}
if(!class_exists('construction_info')){
class construction_info extends WP_Widget {
    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        parent::__construct(
                'construction_info', 'Construction : Info', array(
            'description' => __('Footer Info', 'construction')
                )
        );
    }

    /**
     * Helper function that holds widget fields
     * Array is used in update and form functions
     */
    private function widget_fields() {
        $fields = array(
            'construction_info_title' => array(
                'construction_widgets_name' => 'construction_info_title',
                'construction_widgets_title' => __('Info Title', 'construction'),
                'construction_widgets_field_type' => 'text',
            ),
            'construction_info_title_1' => array(
                'construction_widgets_name' => 'construction_info_title_1',
                'construction_widgets_title' => __('Info Title One', 'construction'),
                'construction_widgets_field_type' => 'text',
            ),
            'construction_info_1' => array(
                'construction_widgets_name' => 'construction_info_1',
                'construction_widgets_title' => __('Info One', 'construction'),
                'construction_widgets_field_type' => 'textarea',
            ),
            'construction_info_title_2' => array(
                'construction_widgets_name' => 'construction_info_title_2',
                'construction_widgets_title' => __('Info Title Two', 'construction'),
                'construction_widgets_field_type' => 'text',
            ),
            'construction_info_2' => array(
                'construction_widgets_name' => 'construction_info_2',
                'construction_widgets_title' => __('Info Two', 'construction'),
                'construction_widgets_field_type' => 'textarea',
            ),
            'construction_info_title_3' => array(
                'construction_widgets_name' => 'construction_info_title_3',
                'construction_widgets_title' => __('Info Title Three', 'construction'),
                'construction_widgets_field_type' => 'text',
            ),
            'construction_info_3' => array(
                'construction_widgets_name' => 'construction_info_3',
                'construction_widgets_title' => __('Info Three', 'construction'),
                'construction_widgets_field_type' => 'textarea',
            ),
            'construction_info_title_4' => array(
                'construction_widgets_name' => 'construction_info_title_4',
                'construction_widgets_title' => __('Info Title Four', 'construction'),
                'construction_widgets_field_type' => 'text',
            ),
            'construction_info_4' => array(
                'construction_widgets_name' => 'construction_info_4',
                'construction_widgets_title' => __('Info Four', 'construction'),
                'construction_widgets_field_type' => 'textarea',
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
        $construction_info_title = $instance['construction_info_title'];
        $construction_info_title_1 = $instance['construction_info_title_1'];
        $construction_info_1 = $instance['construction_info_1'];
        $construction_info_title_2 = $instance['construction_info_title_2'];
        $construction_info_2 = $instance['construction_info_2'];
        $construction_info_title_3 = $instance['construction_info_title_3'];
        $construction_info_3 = $instance['construction_info_3'];
        $construction_info_title_4 = $instance['construction_info_title_4'];
        $construction_info_4 = $instance['construction_info_4'];
        echo $before_widget;
            if($construction_info_title){ ?><h2 class="widget-title"><?php echo esc_attr($construction_info_title); ?></h2><?php }
            ?>
                <div class="footer-info-widget">
                <?php if($construction_info_title_1 || $construction_info_1){ ?>
                    <div class="title-info">
                        <?php if($construction_info_title_1){ ?><span class="info-footer-title"><?php echo esc_attr($construction_info_title_1); ?></span><?php } ?>
                        <?php if($construction_info_1){ ?><span class="footer-info"><?php echo esc_attr($construction_info_1); ?></span><?php } ?>
                    </div>
                <?php } ?>
                <?php if($construction_info_title_2 || $construction_info_2){ ?>
                    <div class="title-info">
                        <?php if($construction_info_title_2){ ?><span class="info-footer-title"><?php echo esc_attr($construction_info_title_2); ?></span><?php } ?>
                        <?php if($construction_info_2){ ?><span class="footer-info"><?php echo esc_attr($construction_info_2); ?></span><?php } ?>
                    </div>
                <?php } ?>
                <?php if($construction_info_title_3 || $construction_info_3){ ?>
                    <div class="title-info">
                        <?php if($construction_info_title_3){ ?><span class="info-footer-title"><?php echo esc_attr($construction_info_title_3); ?></span><?php } ?>
                        <?php if($construction_info_3){ ?><span class="footer-info"><?php echo esc_attr($construction_info_3); ?></span><?php } ?>
                    </div>
                <?php } ?>
                <?php if($construction_info_title_4 || $construction_info_4){ ?>
                    <div class="title-info">
                        <?php if($construction_info_title_4){ ?><span class="info-footer-title"><?php echo esc_attr($construction_info_title_4); ?></span><?php } ?>
                        <?php if($construction_info_4){ ?><span class="footer-info"><?php echo esc_attr($construction_info_4); ?></span><?php } ?>
                    </div>
                <?php } ?>
                </div>
            <?php
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