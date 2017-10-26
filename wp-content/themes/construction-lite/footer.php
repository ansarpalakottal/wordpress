<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package construction
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
    <?php 
    $construction_top_footer_enable = get_theme_mod('construction_top_footer_enable');
    $construction_top_footer_logo = get_theme_mod('construction_top_footer_logo');
    $construction_top_footer_desc = get_theme_mod('construction_top_footer_description');
    if($construction_top_footer_enable || $construction_top_footer_logo || $construction_top_footer_desc){ ?>
        <div class="ak-container">
            <div class="top-footer wow fadeInUp">
                <?php if($construction_top_footer_logo){ ?><div class="footer-logo"><img src="<?php echo esc_url($construction_top_footer_logo); ?>" alt="<?php _e('Footer Logo','construction'); ?>" title="<?php _e('Footer Logo','construction'); ?>" /></div><?php } ?>
                <?php if($construction_top_footer_desc) { ?><div class="top-footer-desc"><?php echo esc_attr($construction_top_footer_desc); ?></div><?php } ?>
                <div class="social-icons">
                    <?php do_action('construction_header_social_link_acrion'); ?>
                </div>
            </div>
        </div>
    <?php } ?>
    <?php if(is_active_sidebar('construction-footer-1') || is_active_sidebar('construction-footer-2') || is_active_sidebar('construction-footer-3')){ ?>
        <div class="bottom-footer wow fadeInUp">
            <div class="ak-container">
                <div class="bottom-footer-wrapper clearfix">
                    <?php if(is_active_sidebar('construction-footer-1')){
                        ?>
                            <div class="footer-1">
                                <?php dynamic_sidebar('construction-footer-1'); ?>
                            </div>
                        <?php
                    } ?>
                    <?php if(is_active_sidebar('construction-footer-2')){
                        ?>
                            <div class="footer-2">
                                <?php dynamic_sidebar('construction-footer-2'); ?>
                            </div>
                        <?php
                    } ?>
                    <?php if(is_active_sidebar('construction-footer-3')){
                        ?>
                            <div class="footer-3">
                                <?php dynamic_sidebar('construction-footer-3'); ?>
                            </div>
                        <?php
                    } ?>
                </div>
            </div>
        </div>
    <?php } ?>
    
		<div class="site-info">
            <div class="ak-container">
            <?php $construction_footer_text = get_theme_mod('construction_footer_text'); ?>
    			<span class="footer-text"><?php if($construction_footer_text){ ?><span class="text-input"><?php echo esc_attr($construction_footer_text); ?><span class="sep"> | </span></span><?php } ?>  <?php _e('WordPress Theme','construction');?> : <a target="_blank" href="<?php echo esc_url('http://demo.accesspressthemes.com/construction'); ?>"><?php _e('Construction','construction'); ?></a> <?php _e('by','construction');?> <a target="_blank" href="<?php echo esc_url('http://accesspressthemes.com/') ?>"><?php _e('AccessPress Themes','construction');?></a></span>
            </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
    <div id="css-add"></div>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>