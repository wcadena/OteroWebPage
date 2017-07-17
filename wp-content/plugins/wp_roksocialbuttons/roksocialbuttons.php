<?php
/**
 * @version   1.1 November 14, 2013
 * @author    RocketTheme, LLC http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2013 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */
/*
Plugin Name: RokSocialButtons
Plugin URI: http://www.rockettheme.com
Description: RocketTheme Social Buttons Plugin
Author: RocketTheme, LLC
Version: 1.1
Author URI: http://www.rockettheme.com
License: http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
*/
// no direct access
defined('ABSPATH') or die('Restricted access');

// Define Directory Separator
if (!defined('DS')) {
	define('DS', DIRECTORY_SEPARATOR);
}

// Globals
global $roksocialbuttons_plugin_path, $roksocialbuttons_plugin_url;
if(!is_multisite()) {
	$roksocialbuttons_plugin_path = dirname($plugin);
} else {
	if(!empty($network_plugin)) {
		$roksocialbuttons_plugin_path = dirname($network_plugin);
	} else {
		$roksocialbuttons_plugin_path = dirname($plugin);
	}
}
$roksocialbuttons_plugin_url = WP_PLUGIN_URL . '/' . basename($roksocialbuttons_plugin_path);

class RokSocialButtons {

	// Init
	static function init() {
		global $roksocialbuttons_plugin_path;

		// Load Language
		if(is_admin()) {
			load_plugin_textdomain('roksocialbuttons', false, basename($roksocialbuttons_plugin_path) . '/languages/');
		}

		// Add Admin
		add_action('admin_menu', array(__CLASS__, 'roksocialbuttons_menu'), 9);
		add_action('admin_enqueue_scripts', array(__CLASS__, 'roksocialbuttons_adminscripts'));
		add_action('admin_init', array(__CLASS__, 'roksocialbuttons_register_settings'));

		// Setup initial options
		$defaults = array(
			'addthis_id' => '',
			'enable_twitter' => '1',
			'enable_facebook' => '1',
			'enable_google' => '1',
			'prepend_text' => '',
			'extra_class' => '',
			'display_position' => '0',
			'add_method' => '2',
			'catid' => ''
		);

		add_option('roksocialbuttons', $defaults);

		add_filter('the_content', array(__CLASS__, 'process_content'));

		// Add Scripts
		add_action('wp_enqueue_scripts', array(__CLASS__, 'roksocialbuttons_scripts'));
	}

	// Admin menu
	function roksocialbuttons_menu() {
		add_plugins_page('RokSocialButtons', 'RokSocialButtons', 'activate_plugins', 'roksocialbuttons-settings', array(__CLASS__, 'roksocialbuttons_settings'));  
	}

	// Admin Scripts
	function roksocialbuttons_adminscripts() {
		global $roksocialbuttons_plugin_url, $pagenow;
		
		if($pagenow == 'plugins.php' && $_GET['page'] == 'roksocialbuttons-settings') {
			wp_enqueue_style('roksocialbuttons_admin_css', $roksocialbuttons_plugin_url . '/admin/admin.css');
		}
	}

	// Admin Register Settings
	function roksocialbuttons_register_settings() {
		register_setting('roksocialbuttons_registered', 'roksocialbuttons');
	}

	// Admin Page
	function roksocialbuttons_settings() {
		global $roksocialbuttons_plugin_url;
	
		$option = get_option('roksocialbuttons');

		if(isset($_GET['settings-updated']) && $_GET['settings-updated'] == 'true') echo '<div id="message" class="updated fade"><p>' . __('RokSocialButtons settings saved.', 'roksocialbuttons') . '</p></div>';
		
		?>

		<div class="wrap" id="roksocialbuttons-settings">
		
			<div id="icon-options-roksocialbuttons" class="icon32"></div>
			<h2><?php _e('RokSocialButtons Settings', 'roksocialbuttons'); ?></h2>
			<div class="clear"></div>
			
			<form method="post" action="options.php">
				<?php settings_fields('roksocialbuttons_registered'); ?>
				<table class="widefat fixed rokplugin" cellspacing="0">
					<thead>
						<tr>
							<th class="manage-column column-title desc" scope="col">
								<?php _e('Option Name', 'roksocialbuttons'); ?>
							</th>
							<th class="manage-column column-title desc" scope="col">
								<?php _e('Value', 'roksocialbuttons'); ?>
							</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>
								<a href="http://rockettheme.com" target="_blank" id="rtlogo"></a>				
							</th>
							<th>
								<input type="submit" class="button-primary" value="<?php _e('Save Changes', 'roksocialbuttons'); ?>" />
							</th>
						</tr>
					</tfoot>
					<tbody>
						<tr>
							<td>
								<strong><?php _e('AddThis ID', 'roksocialbuttons'); ?></strong><br />
								<?php _e('Insert your AddThis ID to enable tracking and analytics. Sign-up for a free account at http://www.addthis.com', 'roksocialbuttons'); ?>
							</td>
							<td>
								<input id="addthis_id" type="text" size="50" maxlength="255" name="roksocialbuttons[addthis_id]" value="<?php echo $option['addthis_id']; ?>" />
							</td>
						</tr>
						<tr class="alternate">
							<td>
								<strong><?php _e('Enable Twitter', 'roksocialbuttons'); ?></strong>
							</td>
							<td>
								<input id="enable_twitter1" type="radio" <?php if ($option['enable_twitter'] == '1') : ?>checked="checked"<?php endif; ?> value="1" name="roksocialbuttons[enable_twitter]"/>
								<label for="enable_twitter1"><?php _e('Enabled', 'roksocialbuttons'); ?></label>
								<input id="enable_twitter0" type="radio" <?php if ($option['enable_twitter'] == '0') : ?>checked="checked"<?php endif; ?> value="0" name="roksocialbuttons[enable_twitter]"/>
								<label for="enable_twitter0"><?php _e('Disabled', 'roksocialbuttons'); ?></label>
							</td>
						</tr>
						<tr>
							<td>
								<strong><?php _e('Enable Facebook', 'roksocialbuttons'); ?></strong>
							</td>
							<td>
								<input id="enable_facebook1" type="radio" <?php if ($option['enable_facebook'] == '1') : ?>checked="checked"<?php endif; ?> value="1" name="roksocialbuttons[enable_facebook]"/>
								<label for="enable_facebook1"><?php _e('Enabled', 'roksocialbuttons'); ?></label>
								<input id="enable_facebook0" type="radio" <?php if ($option['enable_facebook'] == '0') : ?>checked="checked"<?php endif; ?> value="0" name="roksocialbuttons[enable_facebook]"/>
								<label for="enable_facebook0"><?php _e('Disabled', 'roksocialbuttons'); ?></label>
							</td>
						</tr>
						<tr class="alternate">
							<td>
								<strong><?php _e('Enable Google', 'roksocialbuttons'); ?></strong>
							</td>
							<td>
								<input id="enable_google1" type="radio" <?php if ($option['enable_google'] == '1') : ?>checked="checked"<?php endif; ?> value="1" name="roksocialbuttons[enable_google]"/>
								<label for="enable_google1"><?php _e('Enabled', 'roksocialbuttons'); ?></label>
								<input id="enable_google0" type="radio" <?php if ($option['enable_google'] == '0') : ?>checked="checked"<?php endif; ?> value="0" name="roksocialbuttons[enable_google]"/>
								<label for="enable_google0"><?php _e('Disabled', 'roksocialbuttons'); ?></label>
							</td>
						</tr>
						<tr>
							<td>
								<strong><?php _e('Prepend Text', 'roksocialbuttons'); ?></strong>
							</td>
							<td>
								<input id="prepend_text" type="text" size="50" maxlength="255" name="roksocialbuttons[prepend_text]" value="<?php echo $option['prepend_text']; ?>" />
							</td>
						</tr>
						<tr class="alternate">
							<td>
								<strong><?php _e('Extra CSS Class', 'roksocialbuttons'); ?></strong>
							</td>
							<td>
								<input id="extra_class" type="text" size="50" maxlength="255" name="roksocialbuttons[extra_class]" value="<?php echo $option['extra_class']; ?>" />
							</td>
						</tr>
						<tr>
							<td>
								<strong><?php _e('Display Position', 'roksocialbuttons'); ?></strong>
							</td>
							<td>
								<select id="display_position" name="roksocialbuttons[display_position]">
									<option value="0" <?php if ($option['display_position'] == "0") : ?>selected="selected"<?php endif; ?>><?php _e('Before Post Content', 'roksocialbuttons'); ?></option>
									<option value="1" <?php if ($option['display_position'] == "1") : ?>selected="selected"<?php endif; ?>><?php _e('After Post Content', 'roksocialbuttons'); ?></option>
								</select>
							</td>
						</tr>
						<tr class="alternate">
							<td>
								<strong><?php _e('Add Method', 'roksocialbuttons'); ?></strong>
							</td>
							<td>
								<select id="add_method" name="roksocialbuttons[add_method]">
									<option value="0" <?php if ($option['add_method'] == "0") : ?>selected="selected"<?php endif; ?>><?php _e('Only add to Selected Categories', 'roksocialbuttons'); ?></option>
									<option value="1" <?php if ($option['add_method'] == "1") : ?>selected="selected"<?php endif; ?>><?php _e('Shortcode Method [socialbuttons]', 'roksocialbuttons'); ?></option>
									<option value="2" <?php if ($option['add_method'] == "2") : ?>selected="selected"<?php endif; ?>><?php _e('Both Shortcode and Selected Categories', 'roksocialbuttons'); ?></option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								<strong><?php _e('Category', 'roksocialbuttons'); ?></strong>
							</td>
							<td>
								<select id="catid" name="roksocialbuttons[catid][]" multiple="multiple" size="10">
									<option value="" <?php if (in_array('', $option['catid'])) : ?>selected="selected"<?php endif; ?>><?php _e('- All Categories -', 'roksocialbuttons'); ?></option>
									<?php
									$categories = get_categories('hide_empty=0');
									$cats_selected = $option['catid'];
									foreach ($categories as $category) {
										($cats_selected && in_array($category->cat_ID, $cats_selected)) ? $selected = 'selected="selected"' : $selected = '';
										echo '<option value="' . $category->cat_ID . '" ' . $selected . '>' . $category->name . '</option>';
									}
									?>
								</select>
							</td>
						</tr>
					</tbody>
				</table>
			</form>
			
		</div>

		<?php
	}

	// Add Scripts
	static function roksocialbuttons_scripts() {
		global $roksocialbuttons_plugin_path, $roksocialbuttons_plugin_url;

		if (!defined("ROKSOCIALBUTTONS")) {
			define("ROKSOCIALBUTTONS", 1);

			$option = get_option('roksocialbuttons');

			$baseurl = (!empty($_SERVER['HTTPS'])) ? "https://" : "http://";
			$script = $baseurl . 's7.addthis.com/js/250/addthis_widget.js#pubid='.$option['addthis_id'];

			// use template stylesheet if it exists
			$builtin_path = '/assets/roksocialbuttons.css';
			$template_path = '/html/plugins/wp_roksocialbuttons/roksocialbuttons.css';
			$template_stylesheet = get_template_directory() . $template_path;

			if (file_exists($template_stylesheet)) $stylesheet = get_template_directory_uri() . $template_path;
			else $stylesheet = $roksocialbuttons_plugin_url . $builtin_path;

			// get css from theme or plugin
			wp_enqueue_style('roksocialbuttons.css', $stylesheet);
			wp_enqueue_script('addthis_widget.js', $script);
		}
		
	}

	static function process_content($content) {
		global $post;

		$option = get_option('roksocialbuttons');

		$add_method = $option['add_method'];
		$category_id = $option['catid'];
		$display_position = $option['display_position'];
		
		//if match method is on
		if($add_method == '1' || $add_method == '2') {

			// simple performance check to determine whether bot should process further
			if (strpos($content, 'socialbuttons') !== false) {

				$matches = array();
				$regex = '/\[socialbuttons(.*)\]/i';
				preg_match_all($regex, $content, $matches, PREG_SET_ORDER);

				if(sizeof($matches) > 0) {

					foreach ($matches as $match) {

						$passed_param = $match[1];
						$module_params = array();

						if (isset($passed_param)) {
							$param_match = array();
							preg_match_all('/((\w+)\="(.*)")/i', $passed_param, $param_match, PREG_SET_ORDER);
							foreach ($param_match as $pmatch) {
								$module_params[$pmatch[2]] = $pmatch[3];
							}
						}

					   $content = preg_replace($regex, RokSocialButtons::roksocialbuttons_shortcode(), $content, 1);
					}
				}
			}
		}

		//if category method is on
		if(($add_method == '0' || $add_method == '2') && isset($post->ID)){
			$in_array = false;
			foreach((get_the_category()) as $category) {
				$categories[] = $category->cat_ID;
			}
			foreach($categories as $single) {
				if(in_array($single, $category_id)) {
					$in_array = true;
					break;
				}
			}
			if(in_array("",$category_id) || $in_array){
				if((int)$display_position){
					$content = $content . RokSocialButtons::roksocialbuttons_shortcode();
				} else {
					$content = RokSocialButtons::roksocialbuttons_shortcode() . $content;
				}
			}
		}

		return $content;
	}

	// Define the shortcode
	static function roksocialbuttons_shortcode() {
		$option = get_option('roksocialbuttons');

		$extra_class = isset($option['extra_class']) ? $option['extra_class'] : '';

		$code = '
			<div class="roksocialbuttons addthis_toolbox '.$extra_class.'"
			   addthis:url="'.get_permalink().'"
			   addthis:title="'.get_the_title().'">
			<div class="custom_images">';
		if (trim($option['prepend_text']) != "") {
			$code .= '<h4>'.$option['prepend_text'].'</h4>';
		}
		if ($option['enable_twitter'] == '1') {
			$code .= '<a class="addthis_button_twitter"><span></span></a>';
		}
		if ($option['enable_facebook'] == '1') {
			$code .= '<a class="addthis_button_facebook"><span></span></a>';
		}
		if ($option['enable_google'] == '1') {
			$code .= '<a class="addthis_button_google"><span></span></a>';
		}
		$code .= '
			</div>
			</div>';

		return $code;
	}
}

// Init the plugin
RokSocialButtons::init();