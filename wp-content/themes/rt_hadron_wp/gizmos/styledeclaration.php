<?php
/**
 * @version   1.0 August 19, 2014
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2014 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */

defined( 'GANTRY_VERSION' ) or die();

gantry_import( 'core.gantrygizmo' );

/**
 * @package     gantry
 * @subpackage  features
 */
class GantryGizmoStyleDeclaration extends GantryGizmo {

	var $_name = 'styledeclaration';
	
	function isEnabled(){
		global $gantry;
		$menu_enabled = $this->get('enabled');

		if (1 == (int)$menu_enabled) return true;
		return false;
	}

	function query_parsed_init() {
		global $gantry;
		$browser = $gantry->browser;

		// Logo
		$css = $this->buildLogo();

		// Less Variables
		$lessVariables = array(
			'accent-color1'             => $gantry->get('accent-color1',            '#86DBC8'),
			'accent-color2'             => $gantry->get('accent-color2',            '#34AE93'),

			'button-text-color'         => $gantry->get('button-textcolor',        	'#314F49'),
			'button-background'         => $gantry->get('button-background',        '#86DBC8'),          

			'border-style'              => $gantry->get('border-style',             'semirounded'),

			'header-overlay'            => $gantry->get('header-overlay',           'dark'),
			'header-text-color'         => $gantry->get('header-textcolor',       	'#BBBBBB'),
			'header-background'         => $gantry->get('header-background',        '#191A1C'),

			'navigation-overlay'        => $gantry->get('navigation-overlay',       'dark'),
			'navigation-text-color'     => $gantry->get('navigation-textcolor',    	'#BBBBBB'),
			'navigation-background'     => $gantry->get('navigation-background',    '#191A1C'),            

			'showcase-overlay'          => $gantry->get('showcase-overlay',         'dark'),
			'showcase-text-color'       => $gantry->get('showcase-textcolor',      	'#BBBBBB'),
			'showcase-background'       => $gantry->get('showcase-background',      '#191A1C'), 

			'utility-overlay'           => $gantry->get('utility-overlay',          'dark'),
			'utility-text-color'        => $gantry->get('utility-textcolor',       	'#BBBBBB'),
			'utility-background'        => $gantry->get('utility-background',       '#1F2022'),             

			'feature-overlay'           => $gantry->get('feature-overlay',          'dark'),
			'feature-text-color'        => $gantry->get('feature-textcolor',       	'#BBBBBB'),
			'feature-background'        => $gantry->get('feature-background',       '#191A1C'), 

			'maintop-overlay'           => $gantry->get('maintop-overlay',          'dark'),
			'maintop-text-color'        => $gantry->get('maintop-textcolor',       	'#BBBBBB'),
			'maintop-background'        => $gantry->get('maintop-background',       '#131315'),             

			'mainbody-overlay'          => $gantry->get('mainbody-overlay',         'dark'),
			'mainbody-text-color'       => $gantry->get('mainbody-textcolor',      	'#BBBBBB'),
			'mainbody-background'       => $gantry->get('mainbody-background',      '#27292B'),            

			'bottom-overlay'            => $gantry->get('bottom-overlay',           'dark'),
			'bottom-text-color'         => $gantry->get('bottom-textcolor',        	'#BBBBBB'),
			'bottom-background'         => $gantry->get('bottom-background',        '#191A1C'),   

			'footer-overlay'            => $gantry->get('footer-overlay',           'dark'),
			'footer-text-color'         => $gantry->get('footer-textcolor',       	'#BBBBBB'),
			'footer-background'         => $gantry->get('footer-background',        '#191A1C'),

			'copyright-overlay'         => $gantry->get('copyright-overlay',        'dark'),
			'copyright-text-color'      => $gantry->get('copyright-textcolor',     	'#BBBBBB'),
			'copyright-background'      => $gantry->get('copyright-background',     '#191A1C')            
		);

		$gantry->addInlineStyle($css);   

		$gantry->addLess('global.less', 'master.css', 7, $lessVariables);

		$this->_disableRokBoxForiPhone();

		if ($gantry->get('layout-mode')=="responsive") $gantry->addLess('mediaqueries.less');
		if ($gantry->get('layout-mode')=="960fixed") $gantry->addLess('960fixed.less');
		if ($gantry->get('layout-mode')=="1200fixed") $gantry->addLess('1200fixed.less');

		// RTL
		if ($gantry->get('rtl-enabled') && is_rtl()) $gantry->addLess('rtl.less', 'rtl.css', 8, $lessVariables);

		// Demo Styling
		if ($gantry->get('demo')) $gantry->addLess('demo.less', 'demo.css', 9, $lessVariables);

		// Chart Script
		if ($gantry->get('chart-enabled')) $gantry->addScript('chart.js');

		// Add inline css from the Custom CSS field
		$gantry->addInlineStyle($gantry->get('customcss'));

	}

	function buildLogo(){
		global $gantry;

		if ($gantry->get('logo-type')!="custom") return "";

		$source = $width = $height = "";

		$logo = str_replace("&quot;", '"', str_replace("'", '"', $gantry->get('logo-custom-image')));
		$data = json_decode($logo);

		if (!$data){
			if (strlen($logo)) $source = $logo;
			else return "";
		} else {
			$source = $data->path;
		}

		$baseUrl = trailingslashit(get_bloginfo('wpurl'));

		if (substr($baseUrl, 0, strlen($baseUrl)) == substr($source, 0, strlen($baseUrl))){
			$file = trailingslashit(ABSPATH) . substr($source, strlen($baseUrl));
		} else {
			$file = trailingslashit(ABSPATH) . $source;
		}

		if (isset($data->width) && isset($data->height)){
			$width = $data->width;
			$height = $data->height;
		} else {
			$size = @getimagesize($file);
			$width = $size[0];
			$height = $size[1];
		}

		$source = str_replace(' ', '%20', $source);

		$output = "";
		$output .= "#rt-logo {background: url(".$source.") 50% 0 no-repeat !important;}"."\n";
		$output .= "#rt-logo {width: ".$width."px;height: ".$height."px;}"."\n";

		$file = preg_replace('/\//i', DIRECTORY_SEPARATOR, $file);

		return (file_exists($file)) ? $output : '';
	}

	function _disableRokBoxForiPhone() {
		global $gantry;

		if ($gantry->browser->platform == 'iphone' || $gantry->browser->platform == 'android') {
			$gantry->addInlineScript("window.addEvent('domready', function() {\$\$('a[rel^=rokbox]').removeEvents('click');});");
		}
	}
}