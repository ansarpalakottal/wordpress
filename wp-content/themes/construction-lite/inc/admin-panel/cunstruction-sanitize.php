<?php
function construction_sanitize_post_cat_list($input){
    $construction_cat_list = Construction_Category_list();
    if(array_key_exists($input,$construction_cat_list)){
        return $input;
    }
    else{
        return '';
    }
}
function construction_sanitize_checkbox($input){
    if($input == 1){
        return 1;
    }
    else{
        return '';
    }
}
function construction_sanitize_post_select($input){
    $construction_posts_list = Construction_Posts_List();
    if(array_key_exists($input,$construction_posts_list)){
        return $input;
    }
    else{
        return  '';
    }
}
function construction_sanitize_font_size($input){
    $construction_font_size = construction_font_size();
    if(array_key_exists($input,$construction_font_size)){
        return $input;
    }
    else{
        return  '';
    }
}
function construction_sanitize_textarea($input){
    return wp_kses_post(force_balance_tags($input));
}
function construction_sanitize_iframe($input){
    $construction_iframe = array(
            'iframe' => array(
                'src' => array(),
                'width' => array(),
                'height' => array(),
                'frameborder' => array(),
                'style' => array(),
                'allowfullscreen' => array(),
            )
        );
        return wp_kses($input,$construction_iframe);
}