<?php
/**
 * @version   1.0 August 19, 2014
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2014 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */

defined( 'GANTRY_VERSION' ) or die();

gantry_import( 'core.gantrywidget' );

class GantryWidgetBranding extends GantryWidget {
    var $short_name = 'branding';
    var $wp_name = 'gantry_branding';
    var $long_name = 'Gantry Branding';
    var $description = 'Gantry Branding Widget';
    var $css_classname = 'widget_gantry_branding';
    var $width = 200;
    var $height = 400;

    function init() {
        register_widget( 'GantryWidgetBranding' );
    }
    
    function render_widget_open( $args, $instance ) {
    }
    
    function render_widget_close( $args, $instance ) {
    }
    
    function pre_render( $args, $instance ) {
    }
    
    function post_render( $args, $instance ) {
    }

    function render( $args, $instance ) {
        global $gantry;
	    ob_start();
	    ?>
	    <div id="<?php echo $this->id; ?>" class="rt-block rt-branding <?php echo $this->css_classname; ?> widget">
        	<a href="<?php echo site_url(); ?>" title="<?php bloginfo('name'); ?>" class="rt-powered-by"></a>
        </div>
	    <?php
	    echo ob_get_clean();
	}
}