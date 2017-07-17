<?php
        function replace_token_url($var){
        $out = $var;
        if (is_string($var)){
            $out = str_replace("@RT_SITE_URL@", get_bloginfo("wpurl"), $var);
        }
        return $out;
    }

    function filter_token_url($value, $oldvalue) {
        if (is_array($value)){
            return multidimensionalArrayMap("replace_token_url", $value);
        }
        else if (is_string($value))
            return replace_token_url($value);
        else
            return $value;
    }

    function multidimensionalArrayMap( $func, $arr )
    {
    $newArr = array();
    foreach( $arr as $key => $value )
        {
        $newArr[ $key ] = ( is_array( $value ) ? multidimensionalArrayMap( $func, $value ) : $func( $value ) );
        }
    return $newArr;
   }

    // unpublish hellow world
     $hello_world = array();
     $hello_world["ID"] = 1;
     $hello_world["post_status"] = "draft";
     wp_update_post( $hello_world );
      
    
        add_filter('pre_update_option_rt_hadron_wp-template-options', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options',array (
  'template_full_name' => 'Hadron',
  'template_author' => 'RocketTheme',
  'grid_system' => '12',
  'template_prefix' => 'hadron-',
  'cookie_time' => '31536000',
  'name' => 'Preset1',
  'copy_lang_files_if_diff' => '1',
  'custom_widget_variations' => '1',
  'blog' => 
  array (
    'cat' => '',
    'post' => 
    array (
      'lead-items' => '1',
      'intro-items' => '3',
      'columns' => '3',
    ),
    'query' => 
    array (
      'type' => 'post',
      'order' => 'date',
      'custom' => '',
    ),
    'content' => 'content',
    'page-heading' => 
    array (
      'enabled' => '0',
      'text' => '',
    ),
    'post-title' => 
    array (
      'enabled' => '1',
      'link' => '0',
    ),
    'meta-author' => 
    array (
      'enabled' => '1',
      'link' => '1',
      'prefix' => 'Written by',
    ),
    'meta-date' => 
    array (
      'enabled' => '1',
      'prefix' => '',
      'format' => 'M j, Y g:i a',
    ),
    'meta-modified' => 
    array (
      'enabled' => '0',
      'prefix' => 'Last Updated on',
      'format' => 'l, d F Y H:i',
    ),
    'meta-comments' => 
    array (
      'enabled' => '1',
      'link' => '0',
    ),
    'meta-category' => 
    array (
      'enabled' => '0',
      'link' => '0',
      'prefix' => '',
    ),
    'meta-category-parent' => 
    array (
      'enabled' => '0',
      'link' => '0',
      'prefix' => '',
    ),
    'readmore' => 
    array (
      'text' => 'Read more ...',
      'show' => 'auto',
    ),
  ),
  'page' => 
  array (
    'page-heading' => 
    array (
      'enabled' => '0',
      'text' => '',
    ),
    'title' => 
    array (
      'enabled' => '1',
      'link' => '1',
    ),
    'meta-author' => 
    array (
      'enabled' => '0',
      'link' => '1',
      'prefix' => 'Written by',
    ),
    'meta-date' => 
    array (
      'enabled' => '0',
      'prefix' => '',
      'format' => 'l, d F Y H:i',
    ),
    'meta-modified' => 
    array (
      'enabled' => '0',
      'prefix' => 'Last Updated on',
      'format' => 'l, d F Y H:i',
    ),
    'meta-comments' => 
    array (
      'enabled' => '0',
      'link' => '0',
    ),
    'featured-image' => '0',
    'comments-form' => 
    array (
      'enabled' => '0',
      'html-tags' => '1',
    ),
  ),
  'single' => 
  array (
    'page-heading' => 
    array (
      'enabled' => '0',
      'text' => '',
    ),
    'title' => 
    array (
      'enabled' => '1',
      'link' => '0',
    ),
    'meta-author' => 
    array (
      'enabled' => '1',
      'link' => '1',
      'prefix' => 'Written by',
    ),
    'meta-date' => 
    array (
      'enabled' => '1',
      'prefix' => '',
      'format' => 'l, d F Y H:i',
    ),
    'meta-modified' => 
    array (
      'enabled' => '0',
      'prefix' => 'Last Updated on',
      'format' => 'l, d F Y H:i',
    ),
    'meta-comments' => 
    array (
      'enabled' => '1',
      'link' => '0',
    ),
    'meta-category' => 
    array (
      'enabled' => '0',
      'link' => '0',
      'prefix' => '',
    ),
    'meta-category-parent' => 
    array (
      'enabled' => '0',
      'link' => '0',
      'prefix' => '',
    ),
    'featured-image' => '0',
    'tags' => '1',
    'footer' => '1',
    'comments-form' => 
    array (
      'enabled' => '1',
      'html-tags' => '1',
    ),
  ),
  'category' => 
  array (
    'count' => '5',
    'content' => 'content',
    'page-heading' => 
    array (
      'enabled' => '1',
      'text' => '',
    ),
    'post-title' => 
    array (
      'enabled' => '1',
      'link' => '0',
    ),
    'meta-author' => 
    array (
      'enabled' => '1',
      'link' => '1',
      'prefix' => 'Written by',
    ),
    'meta-date' => 
    array (
      'enabled' => '1',
      'prefix' => '',
      'format' => 'l, d F Y H:i',
    ),
    'meta-modified' => 
    array (
      'enabled' => '0',
      'prefix' => 'Last Updated on',
      'format' => 'l, d F Y H:i',
    ),
    'meta-comments' => 
    array (
      'enabled' => '1',
      'link' => '0',
    ),
    'meta-category' => 
    array (
      'enabled' => '0',
      'link' => '0',
      'prefix' => '',
    ),
    'meta-category-parent' => 
    array (
      'enabled' => '0',
      'link' => '0',
      'prefix' => '',
    ),
    'readmore' => 
    array (
      'text' => 'Read more ...',
      'show' => 'auto',
    ),
  ),
  'archive' => 
  array (
    'count' => '5',
    'content' => 'content',
    'page-heading' => 
    array (
      'enabled' => '1',
      'text' => '',
    ),
    'post-title' => 
    array (
      'enabled' => '1',
      'link' => '0',
    ),
    'meta-author' => 
    array (
      'enabled' => '1',
      'link' => '1',
      'prefix' => 'Written by',
    ),
    'meta-date' => 
    array (
      'enabled' => '1',
      'prefix' => '',
      'format' => 'l, d F Y H:i',
    ),
    'meta-modified' => 
    array (
      'enabled' => '0',
      'prefix' => 'Last Updated on',
      'format' => 'l, d F Y H:i',
    ),
    'meta-comments' => 
    array (
      'enabled' => '1',
      'link' => '0',
    ),
    'meta-category' => 
    array (
      'enabled' => '0',
      'link' => '0',
      'prefix' => '',
    ),
    'meta-category-parent' => 
    array (
      'enabled' => '0',
      'link' => '0',
      'prefix' => '',
    ),
    'readmore' => 
    array (
      'text' => 'Read more ...',
      'show' => 'auto',
    ),
  ),
  'tag' => 
  array (
    'count' => '5',
    'content' => 'content',
    'page-heading' => 
    array (
      'enabled' => '1',
      'text' => '',
    ),
    'post-title' => 
    array (
      'enabled' => '1',
      'link' => '0',
    ),
    'meta-author' => 
    array (
      'enabled' => '1',
      'link' => '1',
      'prefix' => 'Written by',
    ),
    'meta-date' => 
    array (
      'enabled' => '1',
      'prefix' => '',
      'format' => 'l, d F Y H:i',
    ),
    'meta-modified' => 
    array (
      'enabled' => '0',
      'prefix' => 'Last Updated on',
      'format' => 'l, d F Y H:i',
    ),
    'meta-comments' => 
    array (
      'enabled' => '1',
      'link' => '0',
    ),
    'meta-category' => 
    array (
      'enabled' => '0',
      'link' => '0',
      'prefix' => '',
    ),
    'meta-category-parent' => 
    array (
      'enabled' => '0',
      'link' => '0',
      'prefix' => '',
    ),
    'readmore' => 
    array (
      'text' => 'Read more ...',
      'show' => 'auto',
    ),
  ),
  'search' => 
  array (
    'count' => '5',
    'content' => 'content',
    'page-heading' => 
    array (
      'enabled' => '1',
      'text' => '',
    ),
    'post-title' => 
    array (
      'enabled' => '1',
      'link' => '0',
    ),
    'meta-author' => 
    array (
      'enabled' => '1',
      'link' => '1',
      'prefix' => 'Written by',
    ),
    'meta-date' => 
    array (
      'enabled' => '1',
      'prefix' => '',
      'format' => 'l, d F Y H:i',
    ),
    'meta-modified' => 
    array (
      'enabled' => '0',
      'prefix' => 'Last Updated on',
      'format' => 'l, d F Y H:i',
    ),
    'meta-comments' => 
    array (
      'enabled' => '1',
      'link' => '0',
    ),
    'meta-category' => 
    array (
      'enabled' => '0',
      'link' => '0',
      'prefix' => '',
    ),
    'meta-category-parent' => 
    array (
      'enabled' => '0',
      'link' => '0',
      'prefix' => '',
    ),
    'readmore' => 
    array (
      'text' => 'Read more ...',
      'show' => 'auto',
    ),
  ),
  'thumbnails-enabled' => '1',
  'logo' => 
  array (
    'type' => 'preset1',
    'custom' => 
    array (
      'image' => '',
    ),
  ),
  'accent' => 
  array (
    'color1' => '#86DBC8',
    'color2' => '#34AE93',
  ),
  'button' => 
  array (
    'textcolor' => '#314F49',
    'background' => '#86DBC8',
  ),
  'border' => 
  array (
    'style' => 'semirounded',
  ),
  'header' => 
  array (
    'overlay' => 'dark',
    'textcolor' => '#BBBBBB',
    'background' => '#191A1C',
    'layout' => 'a:1:{i:12;a:2:{i:2;a:2:{i:0;i:3;i:1;i:9;}i:3;a:3:{i:0;i:4;i:1;i:4;i:2;i:4;}}}',
    'showall' => '0',
    'showmax' => '6',
  ),
  'navigation' => 
  array (
    'overlay' => 'dark',
    'textcolor' => '#BBBBBB',
    'background' => '#191A1C',
    'layout' => 'a:1:{i:12;a:2:{i:1;a:1:{i:0;i:12;}i:3;a:3:{i:0;i:8;i:1;i:2;i:2;i:2;}}}',
    'showall' => '0',
    'showmax' => '6',
  ),
  'showcase' => 
  array (
    'overlay' => 'dark',
    'textcolor' => '#BBBBBB',
    'background' => '#191A1C',
    'layout' => '3,3,3,3',
    'showall' => '0',
    'showmax' => '6',
  ),
  'utility' => 
  array (
    'overlay' => 'dark',
    'textcolor' => '#BBBBBB',
    'background' => '#1F2022',
    'layout' => '3,3,3,3',
    'showall' => '0',
    'showmax' => '6',
  ),
  'feature' => 
  array (
    'overlay' => 'dark',
    'textcolor' => '#BBBBBB',
    'background' => '#191A1C',
    'layout' => '3,3,3,3',
    'showall' => '0',
    'showmax' => '6',
  ),
  'maintop' => 
  array (
    'overlay' => 'dark',
    'textcolor' => '#BBBBBB',
    'background' => '#131315',
    'layout' => '3,3,3,3',
    'showall' => '0',
    'showmax' => '6',
  ),
  'mainbody' => 
  array (
    'overlay' => 'dark',
    'textcolor' => '#BBBBBB',
    'background' => '#27292B',
  ),
  'bottom' => 
  array (
    'overlay' => 'dark',
    'textcolor' => '#BBBBBB',
    'background' => '#191A1C',
    'layout' => '3,3,3,3',
    'showall' => '0',
    'showmax' => '6',
  ),
  'footer' => 
  array (
    'overlay' => 'dark',
    'textcolor' => '#BBBBBB',
    'background' => '#191A1C',
    'layout' => 'a:1:{i:12;a:1:{i:2;a:2:{i:0;i:6;i:1;i:6;}}}',
    'showall' => '0',
    'showmax' => '6',
  ),
  'copyright' => 
  array (
    'overlay' => 'dark',
    'textcolor' => '#BBBBBB',
    'background' => '#191A1C',
    'layout' => 'a:1:{i:12;a:2:{i:2;a:2:{i:0;i:4;i:1;i:8;}i:3;a:3:{i:0;i:4;i:1;i:6;i:2;i:2;}}}',
    'showall' => '0',
    'showmax' => '6',
  ),
  'responsive-menu' => 'panel',
  'thumb' => 
  array (
    'width' => '750',
    'height' => '280',
    'position' => '',
  ),
  'font' => 
  array (
    'family' => 's:hadron',
    'size' => 'default',
    'size-is' => 'default',
  ),
  'pagination' => 
  array (
    'enabled' => '1',
    'show-results' => '1',
    'count' => '8',
  ),
  'wordpress-comments' => '1',
  'customcss' => '',
  'rtl-priority' => '7',
  'childcss-priority' => '100',
  'thumbnails-priority' => '1',
  'styledeclaration-enabled' => '1',
  'chart-enabled' => '1',
  'comingsoon' => 
  array (
    'enabled' => '0',
    'date' => '1',
    'month' => '0',
    'year' => '2020',
  ),
  'email-subscription' => 
  array (
    'enabled' => '1',
  ),
  'feedburner-uri' => '',
  'pagesuffix' => 
  array (
    'enabled' => '0',
    'class' => '',
    'priority' => '2',
  ),
  'feedlinks' => 
  array (
    'enabled' => '1',
    'priority' => '1',
  ),
  'title' => 
  array (
    'format' => '',
    'priority' => '5',
  ),
  'widgetshortcodes' => 
  array (
    'enabled' => '1',
    'priority' => '2',
  ),
  'rokstyle' => 
  array (
    'enabled' => '1',
    'priority' => '5',
  ),
  'analytics' => 
  array (
    'enabled' => '0',
    'code' => '',
    'priority' => '3',
  ),
  'top' => 
  array (
    'layout' => '3,3,3,3',
    'showall' => '0',
    'showmax' => '6',
  ),
  'expandedtop' => 
  array (
    'layout' => '3,3,3,3',
    'showall' => '0',
    'showmax' => '6',
  ),
  'mainbodyPosition' => 'a:1:{i:12;a:2:{i:1;a:1:{s:2:"mb";i:12;}i:2;a:2:{s:2:"mb";i:8;s:2:"sa";i:4;}}}',
  'mainbottom' => 
  array (
    'layout' => '3,3,3,3',
    'showall' => '0',
    'showmax' => '6',
  ),
  'expandedbottom' => 
  array (
    'layout' => '3,3,3,3',
    'showall' => '0',
    'showmax' => '6',
  ),
  'extension' => 
  array (
    'layout' => '3,3,3,3',
    'showall' => '0',
    'showmax' => '6',
  ),
  'loadposition-enabled' => '1',
  'layout-mode' => 'responsive',
  'maintenancemode' => 
  array (
    'enabled' => '0',
    'message' => 'This site is down for maintenance. Please check back again soon.',
  ),
  'loadtransition' => '0',
  'component-enabled' => '1',
  'mainbody-enabled' => '1',
  'rtl-enabled' => '0',
  'autoparagraphs' => 
  array (
    'enabled' => '1',
    'type' => 'both',
    'priority' => '5',
  ),
  'texturize-enabled' => '0',
  'selectivizr-enabled' => '0',
  'less' => 
  array (
    'compression' => '1',
    'compilewait' => '2',
    'debugheader' => '0',
  ),
  'ie7splash-enabled' => '1',
  'demo' => '1',
  'contact' => 
  array (
    'header' => 'Send an email. All fields with an * are required.',
    'email' => '',
    'recaptcha' => 
    array (
      'enabled' => '0',
      'publickey' => '',
      'privatekey' => '',
    ),
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-1', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-1',array (
  'pagesuffix' => 
  array (
    'enabled' => '1',
    'class' => '-mar14-home menu-home',
    'priority' => '2',
  ),
  'maintop' => 
  array (
    'overlay' => 'dark',
    'textcolor' => '#BBBBBB',
    'background' => '#131315',
    'layout' => 'a:1:{i:12;a:2:{i:2;a:2:{i:0;i:8;i:1;i:4;}i:4;a:4:{i:0;i:3;i:1;i:3;i:2;i:3;i:3;i:3;}}}',
    'showall' => '0',
    'showmax' => '6',
  ),
  'bottom' => 
  array (
    'overlay' => 'dark',
    'textcolor' => '#BBBBBB',
    'background' => '#191A1C',
    'layout' => 'a:1:{i:12;a:2:{i:2;a:2:{i:0;i:10;i:1;i:2;}i:4;a:4:{i:0;i:3;i:1;i:3;i:2;i:3;i:3;i:3;}}}',
    'showall' => '0',
    'showmax' => '6',
  ),
  'component-enabled' => '0',
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-1', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-10', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-10',array (
  'page' => 
  array (
    'title' => 
    array (
      'enabled' => '0',
      'link' => '1',
    ),
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-10', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-11', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-11',array (
  'page' => 
  array (
    'title' => 
    array (
      'enabled' => '0',
      'link' => '1',
    ),
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-11', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-12', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-12',array (
  'page' => 
  array (
    'title' => 
    array (
      'enabled' => '0',
      'link' => '1',
    ),
  ),
  'pagesuffix' => 
  array (
    'enabled' => '1',
    'class' => 'menu-services',
    'priority' => '2',
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-12', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-13', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-13',array (
  'component-enabled' => '0',
  'mainbody-enabled' => '0',
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-13', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-14', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-14',array (
  'page' => 
  array (
    'title' => 
    array (
      'enabled' => '0',
      'link' => '1',
    ),
  ),
  'pagesuffix' => 
  array (
    'enabled' => '1',
    'class' => 'menu-pricing',
    'priority' => '2',
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-14', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-15', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-15',array (
  'page' => 
  array (
    'title' => 
    array (
      'enabled' => '0',
      'link' => '1',
    ),
  ),
  'pagesuffix' => 
  array (
    'enabled' => '1',
    'class' => 'menu-portfolio',
    'priority' => '2',
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-15', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-16', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-16',array (
  'category' => 
  array (
    'count' => '4',
    'page-heading' => 
    array (
      'enabled' => '0',
      'text' => '',
    ),
    'post-title' => 
    array (
      'enabled' => '1',
      'link' => '1',
    ),
    'meta-author' => 
    array (
      'enabled' => '1',
      'link' => '0',
      'prefix' => 'Written by',
    ),
    'meta-comments' => 
    array (
      'enabled' => '0',
      'link' => '0',
    ),
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-16', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-2', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-2',array (
  'page' => 
  array (
    'title' => 
    array (
      'enabled' => '0',
      'link' => '0',
    ),
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-2', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-5', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-5',array (
  'texturize-enabled' => '1',
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-5', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-6', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-6',array (
  'pagesuffix' => 
  array (
    'enabled' => '1',
    'class' => 'menu-menu-options',
    'priority' => '2',
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-6', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-7', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-7',array (
  'page' => 
  array (
    'title' => 
    array (
      'enabled' => '0',
      'link' => '1',
    ),
  ),
  'pagesuffix' => 
  array (
    'enabled' => '1',
    'class' => 'menu-pages',
    'priority' => '2',
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-7', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-8', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-8',array (
  'page' => 
  array (
    'title' => 
    array (
      'enabled' => '0',
      'link' => '1',
    ),
  ),
  'pagesuffix' => 
  array (
    'enabled' => '1',
    'class' => 'menu-about-us',
    'priority' => '2',
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-8', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-9', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-9',array (
  'pagesuffix' => 
  array (
    'enabled' => '1',
    'class' => 'menu-faq',
    'priority' => '2',
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-9', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-assignments-1', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-assignments-1',array (
  'templatepage' => 
  array (
    'home' => true,
    'front_page' => true,
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-assignments-1', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-assignments-10', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-assignments-10',array (
  'post_type' => 
  array (
    'page' => 
    array (
      0 => 1778,
    ),
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-assignments-10', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-assignments-11', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-assignments-11',array (
  'post_type' => 
  array (
    'page' => 
    array (
      0 => 1780,
    ),
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-assignments-11', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-assignments-12', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-assignments-12',array (
  'post_type' => 
  array (
    'page' => 
    array (
      0 => 1782,
    ),
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-assignments-12', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-assignments-13', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-assignments-13',array (
  'post_type' => 
  array (
    'page' => 
    array (
      0 => 1784,
    ),
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-assignments-13', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-assignments-14', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-assignments-14',array (
  'post_type' => 
  array (
    'page' => 
    array (
      0 => 1787,
    ),
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-assignments-14', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-assignments-15', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-assignments-15',array (
  'post_type' => 
  array (
    'page' => 
    array (
      0 => 1791,
    ),
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-assignments-15', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-assignments-16', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-assignments-16',array (
  'archive' => 
  array (
    'category' => 
    array (
      0 => 2,
    ),
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-assignments-16', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-assignments-17', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-assignments-17',array (
  'post_type' => 
  array (
    'page' => 
    array (
      0 => 9,
    ),
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-assignments-17', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-assignments-18', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-assignments-18',array (
  'post_type' => 
  array (
    'page' => 
    array (
      0 => 1778,
      1 => 1782,
      2 => 1787,
      3 => 1791,
      4 => 1776,
      5 => 1780,
      6 => 1774,
    ),
  ),
  'archive' => 
  array (
    'category' => 
    array (
      0 => 2,
    ),
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-assignments-18', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-assignments-2', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-assignments-2',array (
  'post_type' => 
  array (
    'page' => 
    array (
      0 => 6,
    ),
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-assignments-2', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-assignments-3', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-assignments-3',array (
  'post_type' => 
  array (
    'page' => 
    array (
      0 => 14,
    ),
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-assignments-3', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-assignments-4', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-assignments-4',array (
  'post_type' => 
  array (
    'page' => 
    array (
      0 => 17,
    ),
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-assignments-4', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-assignments-5', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-assignments-5',array (
  'post_type' => 
  array (
    'page' => 
    array (
      0 => 18,
    ),
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-assignments-5', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-assignments-6', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-assignments-6',array (
  'post_type' => 
  array (
    'page' => 
    array (
      0 => 1793,
    ),
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-assignments-6', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-assignments-7', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-assignments-7',array (
  'post_type' => 
  array (
    'page' => 
    array (
      0 => 1772,
    ),
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-assignments-7', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-assignments-8', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-assignments-8',array (
  'post_type' => 
  array (
    'page' => 
    array (
      0 => 1774,
    ),
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-assignments-8', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-assignments-9', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-assignments-9',array (
  'post_type' => 
  array (
    'page' => 
    array (
      0 => 1776,
    ),
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-assignments-9', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-sidebar-1', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-sidebar-1',array (
  'wp_inactive_widgets' => 
  array (
  ),
  'showcase' => 
  array (
    0 => 'roksprocket_options-10004',
  ),
  'utility' => 
  array (
    0 => 'text-10002',
  ),
  'feature' => 
  array (
    0 => 'text-10003',
    1 => 'roksprocket_options-10005',
  ),
  'maintop' => 
  array (
    0 => 'roksprocket_options-10007',
    1 => 'gantrydivider-10011',
    2 => 'roksprocket_options-10006',
  ),
  'sidebar' => 
  array (
  ),
  'bottom' => 
  array (
    0 => 'text-10004',
    1 => 'gantrydivider-10012',
    2 => 'gantry_totop-10002',
  ),
  'footer' => 
  array (
    0 => 'text-10005',
  ),
  'copyright' => 
  array (
    0 => 'gantry_branding-10002',
    1 => 'gantry_copyright-10502',
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-sidebar-1', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-sidebar-10', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-sidebar-10',array (
  'wp_inactive_widgets' => 
  array (
  ),
  'showcase' => 
  array (
    0 => 'text-100006',
  ),
  'utility' => 
  array (
    0 => 'text-100007',
  ),
  'sidebar' => 
  array (
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-sidebar-10', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-sidebar-11', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-sidebar-11',array (
  'wp_inactive_widgets' => 
  array (
  ),
  'showcase' => 
  array (
    0 => 'text-110008',
  ),
  'sidebar' => 
  array (
    0 => 'text-110007',
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-sidebar-11', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-sidebar-12', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-sidebar-12',array (
  'wp_inactive_widgets' => 
  array (
  ),
  'showcase' => 
  array (
    0 => 'text-120011',
  ),
  'maintop' => 
  array (
    0 => 'text-120012',
    1 => 'text-120015',
    2 => 'gantrydivider-120008',
    3 => 'text-120013',
    4 => 'text-120016',
    5 => 'gantrydivider-120009',
    6 => 'text-120014',
    7 => 'text-120017',
  ),
  'sidebar' => 
  array (
    0 => 'text-120006',
    1 => 'text-120007',
    2 => 'text-120008',
  ),
  'mainbottom' => 
  array (
    0 => 'text-120010',
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-sidebar-12', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-sidebar-13', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-sidebar-13',array (
  'wp_inactive_widgets' => 
  array (
  ),
  'showcase' => 
  array (
    0 => 'text-130006',
  ),
  'bottom' => 
  array (
  ),
  'footer' => 
  array (
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-sidebar-13', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-sidebar-14', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-sidebar-14',array (
  'wp_inactive_widgets' => 
  array (
  ),
  'showcase' => 
  array (
    0 => 'text-140006',
  ),
  'maintop' => 
  array (
    0 => 'text-140008',
  ),
  'sidebar' => 
  array (
  ),
  'mainbottom' => 
  array (
    0 => 'text-140009',
  ),
  'extension' => 
  array (
    0 => 'text-140010',
    1 => 'gantrydivider-140006',
    2 => 'text-140011',
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-sidebar-14', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-sidebar-15', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-sidebar-15',array (
  'wp_inactive_widgets' => 
  array (
  ),
  'showcase' => 
  array (
    0 => 'text-150006',
  ),
  'maintop' => 
  array (
    0 => 'roksprocket_options-150002',
  ),
  'sidebar' => 
  array (
  ),
  'extension' => 
  array (
    0 => 'roksprocket_options-150005',
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-sidebar-15', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-sidebar-16', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-sidebar-16',array (
  'wp_inactive_widgets' => 
  array (
  ),
  'breadcrumb' => 
  array (
    0 => 'gantry_breakcrumbs-160002',
  ),
  'sidebar' => 
  array (
    0 => 'rokajaxsearch-160003',
    1 => 'text-160007',
    2 => 'gantry_menu-160503',
    3 => 'text-160006',
    4 => 'gantry_loginform-160502',
    5 => 'gantry_meta-160502',
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-sidebar-16', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-sidebar-17', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-sidebar-17',array (
  'wp_inactive_widgets' => 
  array (
  ),
  'showcase' => 
  array (
    0 => 'text-170006',
  ),
  'sidebar' => 
  array (
  ),
  'bottom' => 
  array (
  ),
  'footer' => 
  array (
    0 => 'text-170007',
    1 => 'gantrydivider-170006',
    2 => 'text-170008',
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-sidebar-17', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-sidebar-18', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-sidebar-18',array (
  'bottom' => 
  array (
    0 => 'text-180002',
  ),
  'footer' => 
  array (
    0 => 'text-180003',
    1 => 'gantrydivider-180008',
    2 => 'text-180004',
  ),
  'wp_inactive_widgets' => 
  array (
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-sidebar-18', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-sidebar-2', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-sidebar-2',array (
  'wp_inactive_widgets' => 
  array (
  ),
  'showcase' => 
  array (
    0 => 'text-20006',
  ),
  'maintop' => 
  array (
    0 => 'text-20007',
    1 => 'gantrydivider-20006',
    2 => 'text-20008',
  ),
  'sidebar' => 
  array (
  ),
  'mainbottom' => 
  array (
    0 => 'text-20009',
    1 => 'gantrydivider-20007',
    2 => 'text-20010',
  ),
  'bottom' => 
  array (
  ),
  'footer' => 
  array (
    0 => 'text-20011',
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-sidebar-2', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-sidebar-3', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-sidebar-3',array (
  'sidebar' => 
  array (
    0 => 'text-30006',
    1 => 'text-30007',
    2 => 'text-30008',
    3 => 'text-30009',
    4 => 'text-30010',
  ),
  'extension' => 
  array (
    0 => 'text-30011',
  ),
  'bottom' => 
  array (
  ),
  'footer' => 
  array (
    0 => 'text-30012',
    1 => 'gantrydivider-30006',
    2 => 'text-30013',
  ),
  'wp_inactive_widgets' => 
  array (
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-sidebar-3', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-sidebar-4', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-sidebar-4',array (
  'sidebar' => 
  array (
    0 => 'text-40014',
    1 => 'text-40015',
    2 => 'text-40016',
    3 => 'text-40017',
  ),
  'content-bottom' => 
  array (
    0 => 'text-40006',
    1 => 'text-40007',
    2 => 'text-40008',
    3 => 'text-40009',
    4 => 'gantrydivider-40006',
    5 => 'text-40010',
    6 => 'text-40011',
    7 => 'text-40012',
    8 => 'text-40013',
  ),
  'bottom' => 
  array (
  ),
  'footer' => 
  array (
    0 => 'text-40018',
  ),
  'wp_inactive_widgets' => 
  array (
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-sidebar-4', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-sidebar-5', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-sidebar-5',array (
  'sidebar' => 
  array (
  ),
  'wp_inactive_widgets' => 
  array (
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-sidebar-5', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-sidebar-6', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-sidebar-6',array (
  'wp_inactive_widgets' => 
  array (
  ),
  'showcase' => 
  array (
    0 => 'text-60006',
  ),
  'sidebar' => 
  array (
    0 => 'text-60007',
    1 => 'text-60008',
    2 => 'text-60009',
    3 => 'gantry_menu-60503',
    4 => 'gantry_loginform-60502',
    5 => 'gantry_meta-60502',
  ),
  'bottom' => 
  array (
  ),
  'footer' => 
  array (
    0 => 'text-60010',
    1 => 'gantrydivider-60006',
    2 => 'text-60011',
    3 => 'gantrydivider-60007',
    4 => 'text-60012',
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-sidebar-6', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-sidebar-7', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-sidebar-7',array (
  'wp_inactive_widgets' => 
  array (
  ),
  'showcase' => 
  array (
    0 => 'text-70006',
  ),
  'feature' => 
  array (
    0 => 'text-70007',
    1 => 'gantrydivider-70006',
    2 => 'text-70008',
  ),
  'maintop' => 
  array (
    0 => 'text-70009',
  ),
  'sidebar' => 
  array (
  ),
  'bottom' => 
  array (
  ),
  'footer' => 
  array (
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-sidebar-7', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-sidebar-8', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-sidebar-8',array (
  'wp_inactive_widgets' => 
  array (
  ),
  'showcase' => 
  array (
    0 => 'text-80010',
  ),
  'utility' => 
  array (
    0 => 'text-80011',
  ),
  'feature' => 
  array (
    0 => 'text-80006',
  ),
  'maintop' => 
  array (
    0 => 'text-80007',
    1 => 'gantrydivider-80006',
    2 => 'text-80012',
    3 => 'roksprocket_options-80003',
  ),
  'sidebar' => 
  array (
  ),
  'content-top' => 
  array (
    0 => 'text-80009',
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-sidebar-8', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-sidebar-9', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-sidebar-9',array (
  'wp_inactive_widgets' => 
  array (
  ),
  'showcase' => 
  array (
    0 => 'text-90006',
    1 => 'gantrydivider-90006',
    2 => 'text-90007',
    3 => 'gantrydivider-90007',
    4 => 'text-90008',
  ),
  'sidebar' => 
  array (
    0 => 'gantry_menu-90503',
    1 => 'gantry_meta-90502',
  ),
  'content-bottom' => 
  array (
    0 => 'roksprocket_options-90002',
  ),
  'mainbottom' => 
  array (
    0 => 'text-90009',
  ),
  'extension' => 
  array (
    0 => 'text-90010',
    1 => 'text-90011',
    2 => 'text-90012',
    3 => 'gantrydivider-90008',
    4 => 'text-90013',
    5 => 'text-90014',
    6 => 'text-90015',
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-sidebar-9', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-widgets-1', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-widgets-1',array (
  'widget_roksprocket_options' => 
  array (
    '_multiwidget' => 1,
    10004 => 
    array (
      'title' => '',
      'module_id' => '75',
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'widget_chrome' => '',
      'custom-variations' => 'fp-roksprocket-showcase',
    ),
    10005 => 
    array (
      'title' => '',
      'module_id' => '76',
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'widget_chrome' => '',
      'custom-variations' => 'fp-roksprocket-strips',
    ),
    10006 => 
    array (
      'title' => 'Gantry Extras',
      'module_id' => '64',
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'widget_chrome' => '',
      'custom-variations' => 'fp-roksprocket-lists',
    ),
    10007 => 
    array (
      'title' => '',
      'module_id' => '77',
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'widget_chrome' => '',
      'custom-variations' => 'fp-roksprocket-tabs',
    ),
  ),
  'widget_gantrydivider' => 
  array (
    10010 => 
    array (
    ),
    10011 => 
    array (
    ),
    10012 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_text' => 
  array (
    10002 => 
    array (
      'title' => 'A contemporary and flat design approach with rich animations',
      'text' => '<p>Flat visuals are the central design feature of Hadron, providing a modern, corporate approach to template construction.</p>

<div class="rt-readon-group">
    <a href="@RT_SITE_URL@/features/" class="readon">Purchase Now</a>
	<a href="@RT_SITE_URL@/features/" class="readon2">Read Features</a>
</div>
',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => 'rt-center',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    10003 => 
    array (
      'title' => 'Latest Featured Works',
      'text' => '<p class="fp-feature-content">The template also supports a simple coming soon or offline style page with a time counter.</p>
<p class="fp-feature-content">It has been specifically styled to match Hadron.</p>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => 'nomarginbottom',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    10004 => 
    array (
      'title' => 'Get in Touch',
      'text' => '<p>All demo content is for sample purpose only, intended to show a live site.</p>
<p>Use the Hadron RocketLauncher to install an equivalent of the demo onto your site.</p>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => 'rt-center',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => 'fp-bottom',
      'widget_chrome' => '',
    ),
    10005 => 
    array (
      'title' => '',
      'text' => '<p class="rt-small-text">Hadron is available as part of the Club Subscription</p>
<form class="fp-newsletter-form" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open(\'http://feedburner.google.com/fb/a/mailverify?uri=rocketthemeblog\', \'popupwindow\', \'scrollbars=yes,width=550,height=520\');return true">
    <input type="text" placeholder="Your email address here ..." class="inputbox" name="email">
	<input type="hidden" value="rocketthemeblog" name="uri" />
	<input type="hidden" name="loc" value="en_US" />
	<input type="submit" name="Submit" class="readon" value="Subscribe" />
</form>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => 'rt-center',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => 'fp-newsletter',
      'widget_chrome' => '',
    ),
    '_multiwidget' => 1,
  ),
  'widget_rokajaxsearch' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_gantry_menu' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_gantry_loginform' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_gantry_meta' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_gantry_newsflash' => 
  array (
    10002 => 
    array (
      'title' => 'Latest From the Blog',
      'cat' => 'front-page',
      'item_title' => '1',
      'link_titles' => '0',
      'item_heading' => 'h1',
      'post_content' => 'content',
      'readmore' => '1',
      'readmore_label' => 'Read More ...',
      'count' => '1',
      'order' => 'date',
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => 'title2',
      'align-variations' => 'rt-center',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'widget_chrome' => '',
      'custom-variations' => 'fp-newsflash icon-list-alt',
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_branding' => 
  array (
    10002 => 
    array (
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'widget_chrome' => '',
      'custom-variations' => '',
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_copyright' => 
  array (
    10502 => 
    array (
      'text' => 'Copyright 2014. Powered by RocketTheme.',
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'widget_chrome' => '',
      'custom-variations' => '',
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_totop' => 
  array (
    10002 => 
    array (
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'widget_chrome' => '',
      'custom-variations' => '',
    ),
    '_multiwidget' => 1,
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-widgets-1', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-widgets-10', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-widgets-10',array (
  'widget_gantry_menu' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_gantry_loginform' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_gantry_meta' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_gantry_breakcrumbs' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_text' => 
  array (
    100006 => 
    array (
      'title' => 'Our Team [span class="rt-title-tag"]Meet the People Behind Hadron[/span]',
      'text' => '&nbsp;',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => 'rt-center',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => 'rt-big-title',
      'widget_chrome' => '',
    ),
    100007 => 
    array (
      'title' => '',
      'text' => '<p class="promo2"><span class="icon-quote-left"></span> Hadron is a theme designed and inspired by recent visual trends, blending subtle backgrounds and overlays, with text set by custom fonts, to create an alluring experience for your visitors, whilst maintaining a professional and functional look <span class="icon-quote-right"></span> </p>

<p>- <em><a href="#">Greetings from Our CEO, Robert Smith</a></em> -</p>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => 'rt-center',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => 'rt-big-title',
      'widget_chrome' => '',
    ),
    '_multiwidget' => 1,
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-widgets-10', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-widgets-11', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-widgets-11',array (
  'widget_gantry_menu' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_gantry_loginform' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_gantry_meta' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_gantry_breakcrumbs' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_text' => 
  array (
    110007 => 
    array (
      'title' => 'Contact Info',
      'text' => '<p>All demo content is for sample purpose only, intended to show a live site. Use the Hadron RocketLauncher to install an equivalent of the demo onto your site.</p>

<div class="rt-contact-info">
	<div class="rt-contact-detail">
		<div class="rt-contact-icon"><span class="icon-phone"></span></div>
		<div class="rt-contact-item">
			<h4 class="smallmarginbottom">Telephone</h4>
			<p>+1-(678)-123-6789</p>
		</div>				
	</div>
	<hr>
<div class="rt-contact-detail">
		<div class="rt-contact-icon"><span class="icon-map-marker"></span></div>
		<div class="rt-contact-item">
			<h4 class="smallmarginbottom">Address</h4>
			<p>123 WordPress! Boulevard<br>Seattle, WA 00000, USA</p>
		</div>				
	</div>
	<hr>
<div class="rt-contact-detail">
		<div class="rt-contact-icon nomarginbottom"><span class="icon-envelope"></span></div>
		<div class="rt-contact-item">
			<h4 class="smallmarginbottom">Email</h4>
			<p>noreply@domain.com</p>
		</div>					
	</div>
</div>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => 'box4',
      'title-variations' => 'title2',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    110008 => 
    array (
      'title' => '',
      'text' => '<div class="module-title">
    <h2 class="title">Contact Us<span class="rt-title-tag">Shoot Us an Email. We\'d Love to Hear From You</span>
	</h2>			
</div>

<br />',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => 'rt-center',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => 'rt-big-title',
      'widget_chrome' => '',
    ),
    '_multiwidget' => 1,
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-widgets-11', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-widgets-12', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-widgets-12',array (
  'widget_gantry_menu' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_gantry_loginform' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_gantry_meta' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_gantry_breakcrumbs' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_gantrydivider' => 
  array (
    120008 => 
    array (
    ),
    120009 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_text' => 
  array (
    120006 => 
    array (
      'title' => 'Cloud Services',
      'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptate pariatur officia accusantium sapiente expedita eius fugiat</p>
<a href="#" class="readon">Learn More</a>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => 'box3',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => 'nomarginbottom',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => 'icon-cloud-download',
      'widget_chrome' => '',
    ),
    120007 => 
    array (
      'title' => 'Secured Data',
      'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptate pariatur officia accusantium sapiente expedita eius fugiat</p>
<a href="#" class="readon2">Learn More</a>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => 'box3',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => 'nomarginbottom',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => 'icon-shield',
      'widget_chrome' => '',
    ),
    120008 => 
    array (
      'title' => '24/7 Support',
      'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptate pariatur officia accusantium sapiente expedita eius fugiat</p>
<a href="#" class="readon">Learn More</a>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => 'box3',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => 'icon-road',
      'widget_chrome' => '',
    ),
    120010 => 
    array (
      'title' => 'Want to Work With Us?',
      'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptate pariatur officia accusantium sapiente expedita eius fugiat ea distinctio et rem sed quo amet atque dignissimos autem quos asperiores dolorum!</p>

<div class="rt-readon-row">
    <a href="#" class="readon rt-large-button"><span class="icon-file-text"></span> Contact Us</a>
</div>	',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => 'rt-center',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => 'rt-big-title',
      'widget_chrome' => '',
    ),
    120011 => 
    array (
      'title' => 'Services [span class="rt-title-tag"]What We Can Do For You[/span]',
      'text' => '',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => 'rt-center',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => 'rt-big-title',
      'widget_chrome' => '',
    ),
    120012 => 
    array (
      'title' => '',
      'text' => '<span class="rt-icon"><span class="icon-gears title"></span></span>
<h1 class="title rt-capitalize">Web Development</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<a class="readon" href="#">Read More</a>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => 'rt-center',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    120013 => 
    array (
      'title' => '',
      'text' => '<span class="rt-icon"><span class="icon-bar-chart title"></span></span>
<h1 class="title rt-capitalize">Graphic Design</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<a class="readon" href="#">Read More</a>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => 'rt-center',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    120014 => 
    array (
      'title' => '',
      'text' => '<span class="rt-icon"><span class="icon-cloud title"></span></span>
<h1 class="title rt-capitalize">Web Hosting</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<a class="readon" href="#">Read More</a>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => 'rt-center',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    120015 => 
    array (
      'title' => '',
      'text' => '<span class="rt-icon"><span class="icon-film title"></span></span>
<h1 class="title rt-capitalize">Movie Maker</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<a class="readon" href="#">Read More</a>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => 'rt-center',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    120016 => 
    array (
      'title' => '',
      'text' => '<span class="rt-icon"><span class="icon-music title"></span></span>
<h1 class="title rt-capitalize">Music Studio</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<a class="readon" href="#">Read More</a>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => 'rt-center',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    120017 => 
    array (
      'title' => '',
      'text' => '<span class="rt-icon"><span class="icon-comments title"></span></span>
<h1 class="title rt-capitalize">Web Translator</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<a class="readon" href="#">Read More</a>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => 'rt-center',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    '_multiwidget' => 1,
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-widgets-12', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-widgets-13', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-widgets-13',array (
  'widget_text' => 
  array (
    130006 => 
    array (
      'title' => 'Offline Page [span class="rt-title-tag"]Website temporarily offline[/span]',
      'text' => '<h3 class="rt-center largemarginall largepaddingall">Sorry, our site is temporarily down for maintenance. Please check back again soon.</h3>

<p>There may be occasions when you will make your WordPress website completely unavailable to visitors for a short time. There is a simple switch in the Theme Settings that enables you to take your website offline very quickly. It can be returned to service at a later time just as easily.</p>

<h3>To take your WordPress website temporarily offline</h3>

<p>To make your WordPress website unavailable to visitors, replacing it with a simple message, do this:</p>

<ol><li> Log in to the Administrator dashboard.</li>
  <li> Click on the <strong>Hadron Theme</strong> button in the left sidebar.</li>
  <li> There are so many configuration options that they need to be divided into separate groups or tabs.  The <strong>Advanced</strong> tab should be last but one.</li>
  <li> Find where it says <strong>Maintenance Mode</strong> and click the toggle button to <strong>Enable</strong> it.</li>
  <li><strong>Optional:</strong> Change the <strong>Message</strong> to give your visitors some explanation about why your website is unavailable.</li>
  <li> Click the <strong>Save</strong> button in the top right corner to implement the new settings:
    <ul>
      <li> The <strong>Save</strong> button will save your changes and but leave you in the theme settings.</li>
    </ul>
  </li>
  <li>You should see a message confirming the settings have been saved.</li>
</ol>

<p><strong>Hadron</strong> comes with it\'s own customized <strong>Site Offline</strong> page which is displayed when the site is set to <strong>Maintenace Mode</strong> within the Theme Administration. This page, <strong>/wp-content/themes/rt_hadron_wp/maintenance.php</strong> can be easily customised with your own layout, logo and colours, so it represents a message which relates to your project.</p>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => 'rt-big-title rt-title-center',
      'widget_chrome' => '',
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantrydivider' => 
  array (
    '_multiwidget' => 1,
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-widgets-13', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-widgets-14', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-widgets-14',array (
  'widget_gantry_menu' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_gantry_loginform' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_gantry_meta' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_gantry_breakcrumbs' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_text' => 
  array (
    140006 => 
    array (
      'title' => 'Pricing [span class="rt-title-tag"]Maximize the Bang for Your Buck[/span]',
      'text' => '',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => 'rt-center',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => 'rt-big-title',
      'widget_chrome' => '',
    ),
    140008 => 
    array (
      'title' => '',
      'text' => '<div class="module-title">
    <h2 class="title">Try it Out for 10 Days Free<span class="rt-title-tag">Pick a Plan that Fits You and Try Us Out</span></h2>
</div>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => 'rt-center',
      'margin-variations' => 'nomarginbottom',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => 'rt-big-title',
      'widget_chrome' => '',
    ),
    140009 => 
    array (
      'title' => '',
      'text' => '<div class="module-title">
    <h2 class="title">Frequently Asked Questions</h2>
</div>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => 'rt-center',
      'margin-variations' => 'nomargintop',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => 'rt-big-title nomarginbottom',
      'widget_chrome' => '',
    ),
    140010 => 
    array (
      'title' => '',
      'text' => '<h3>What prices are our services?</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, suscipit, tempora tenetur nisi quo dignissimos et quidem quam blanditiis hic exercitationem explicabo a beatae. Dicta, quia cupiditate incidunt reiciendis eveniet.</p>

<br />

<h3>What is our refund policy?</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, suscipit, tempora tenetur nisi quo dignissimos et quidem quam blanditiis hic exercitationem explicabo a beatae. Dicta, quia cupiditate incidunt reiciendis eveniet.</p>

<br />

<h3>What payments methods do we accept?</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, suscipit, tempora tenetur nisi quo dignissimos et quidem quam blanditiis hic exercitationem explicabo a beatae. Dicta, quia cupiditate incidunt reiciendis eveniet.</p>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => 'nomargintop',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    140011 => 
    array (
      'title' => '',
      'text' => '<h3>What delivery options do we offer?</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, suscipit, tempora tenetur nisi quo dignissimos et quidem quam blanditiis hic exercitationem explicabo a beatae. Dicta, quia cupiditate incidunt reiciendis eveniet.</p>

<br />

<h3>What support options are available?</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, suscipit, tempora tenetur nisi quo dignissimos et quidem quam blanditiis hic exercitationem explicabo a beatae. Dicta, quia cupiditate incidunt reiciendis eveniet.</p>

<br />

<h3>What additional services are available?</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, suscipit, tempora tenetur nisi quo dignissimos et quidem quam blanditiis hic exercitationem explicabo a beatae. Dicta, quia cupiditate incidunt reiciendis eveniet.</p>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => 'nomargintop',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantrydivider' => 
  array (
    140006 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-widgets-14', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-widgets-15', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-widgets-15',array (
  'widget_gantry_menu' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_gantry_loginform' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_gantry_meta' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_gantry_breakcrumbs' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_text' => 
  array (
    150006 => 
    array (
      'title' => 'Portfolio [span class="rt-title-tag"]What We Have Already Done[/span]',
      'text' => '&nbsp;',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => 'rt-center',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => 'rt-big-title',
      'widget_chrome' => '',
    ),
    '_multiwidget' => 1,
  ),
  'widget_roksprocket_options' => 
  array (
    150002 => 
    array (
      'title' => '',
      'module_id' => '65',
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => 'title1',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'widget_chrome' => '',
      'custom-variations' => 'rt-demo-portfolio',
    ),
    '_multiwidget' => 1,
    150005 => 
    array (
      'title' => 'Our Clients [span class="rt-title-tag"]Review Our Previous Work[/span]',
      'module_id' => '66',
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'widget_chrome' => '',
      'custom-variations' => 'rt-demo-clients rt-big-title rt-title-center',
    ),
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-widgets-15', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-widgets-16', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-widgets-16',array (
  'widget_gantry_breakcrumbs' => 
  array (
    160002 => 
    array (
      'prefix' => '',
      'category' => '1',
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'widget_chrome' => '',
      'custom-variations' => '',
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_menu' => 
  array (
    160503 => 
    array (
      'title' => 'Main Menu',
      'nav_menu' => 'main-menu',
      'theme' => 'gantry_splitmenu',
      'style' => '',
      'limit_levels' => '1',
      'startLevel' => '0',
      'endLevel' => '1',
      'showAllChildren' => '0',
      'show_empty_menu' => '0',
      'maxdepth' => '10',
      'widget-style-variations' => '',
      'box-variations' => 'box3',
      'title-variations' => 'title2',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'widget_chrome' => '',
      'custom-variations' => '',
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_loginform' => 
  array (
    160502 => 
    array (
      'title' => 'Login Form',
      'user_greeting' => 'Hi,',
      'pretext' => '',
      'posttext' => '',
      'widget-style-variations' => '',
      'box-variations' => 'box4',
      'title-variations' => 'title1',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'widget_chrome' => '',
      'custom-variations' => 'icon-lock',
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_meta' => 
  array (
    160502 => 
    array (
      'title' => 'Meta',
      'menu_class' => 'menu',
      'widget-style-variations' => '',
      'box-variations' => 'box2',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'widget_chrome' => '',
      'custom-variations' => 'icon-user',
    ),
    '_multiwidget' => 1,
  ),
  'widget_text' => 
  array (
    160006 => 
    array (
      'title' => 'Video Docs',
      'text' => '<ul>
  <li><a class="nobold" href="http://youtube.com/embed/W1GmZB2dgNE" data-rokbox data-rokbox-size="1280 720" title="Video Tutorial :: Gantry Installation"><span class="visible-large">How to </span>Install Gantry</a></li>
  <li><a class="nobold" href="http://youtube.com/embed/oQmpE_0OVro" data-rokbox data-rokbox-size="1280 720" title="Video Tutorial :: Gantry Gizmos"><span class="visible-large">Find Out </span>Gantry Gizmos</a></li>
  <li><a class="nobold" href="http://youtube.com/embed/8uiWjekdjfE" data-rokbox data-rokbox-size="1280 720" title="Video Tutorial :: Template Overrides"><span class="visible-large">How to Do </span>Template Overrides</a></li>
  <li><a class="nobold" href="http://youtube.com/embed/xYsB2VKmkFU" data-rokbox data-rokbox-size="1280 720" title="Video Tutorial :: Widget Positions"><span class="visible-large">Check Gantry </span>Widget Positions</a></li>  
  <li><a class="nobold" href="http://youtube.com/embed/g0iEalGwdJY" data-rokbox data-rokbox-size="1280 720" title="Video Tutorial :: Widget Width"><span class="visible-large">How to Adjust </span>Widget Width</a></li>
  <li><a class="nobold" href="http://youtube.com/embed/xt0KiJjFF3w" data-rokbox data-rokbox-size="1280 720" title="Video Tutorial :: Widget Variations"><span class="visible-large">View Gantry </span>Widget Variations</a></li>
  <li><a class="nobold" href="http://youtube.com/embed/ulsy2fkpyfA" data-rokbox data-rokbox-size="1280 720" title="Video Tutorial :: Force Widget Positions"><span class="visible-large">How to </span>Force Widget Positions</a></li>
  <li><a class="nobold" href="http://youtube.com/embed/_bU95HLptUs" data-rokbox data-rokbox-size="1280 720" title="Video Tutorial :: Custom Presets"><span class="visible-large">Learn </span>Custom Presets</a></li>
</ul>
<a href="http://www.gantry-framework.org/documentation" target="_blank" class="readon largemargintop smallmarginbottom"><span>View All</span></a>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => 'box1',
      'title-variations' => 'title2',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    160007 => 
    array (
      'title' => '[span class="hidden-tablet hidden-phone"]Join Our [/span]Newsletter',
      'text' => '<p><span>Updates, upcoming themes, and <span class="visible-large">great </span>deals!</span></p>
<form class="rt-blog-form" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open(\'http://feedburner.google.com/fb/a/mailverify?uri=rocketthemeblog\', \'popupwindow\', \'scrollbars=yes,width=550,height=520\');return true">
    <input type="text" placeholder="Your Email" class="inputbox" name="email">
	<input type="hidden" value="rocketthemeblog" name="uri" />
	<input type="hidden" name="loc" value="en_US" />
	<input type="submit" name="Submit" class="readon" value="Join" />
</form>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => 'box1',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    '_multiwidget' => 1,
  ),
  'widget_rokajaxsearch' => 
  array (
    '_multiwidget' => 1,
    160003 => 
    array (
      'title' => 'Search the Blog',
      'widget-style-variations' => '',
      'box-variations' => 'box2',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'widget_chrome' => '',
      'custom-variations' => 'rt-blog-search icon-search hidden-phone',
    ),
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-widgets-16', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-widgets-17', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-widgets-17',array (
  'widget_gantry_menu' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_gantry_loginform' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_gantry_meta' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_text' => 
  array (
    170006 => 
    array (
      'title' => '8 Preset Styles [span class="rt-title-tag"]Live Preview[/span]',
      'text' => '<div>
    <p class="warning">View all styles live by appending <strong>?presets=preset#</strong> or <strong>&amp;presets=preset#</strong> to the end of your URL such as <strong><a href="#">http://yoursite.com/index.php?presets=preset4</a></strong>.</p>

    <p>In sequential order, <strong>Preset 1 - Preset 8</strong>. Please click on the image to load a live example of each style variation.</p>
</div>

<div class="gantry-width-25 gantry-width-block rt-center">
  <div class="gantry-width-spacer">
    <a href="@RT_SITE_URL@/preset-styles/?presets=preset1">
      <span class="rt-image">
        <img alt="Preset 1" src="@RT_SITE_URL@/wp-content/rockettheme/rt_hadron_wp/styles/ss1.jpg" />
      </span>
    </a>
  </div>
</div>
<div class="gantry-width-25 gantry-width-block rt-center">
  <div class="gantry-width-spacer">
    <a href="@RT_SITE_URL@/preset-styles/?presets=preset2">
      <span class="rt-image">
        <img alt="Preset 2" src="@RT_SITE_URL@/wp-content/rockettheme/rt_hadron_wp/styles/ss2.jpg" />
      </span>
    </a>
  </div>
</div>
<div class="gantry-width-25 gantry-width-block rt-center">
  <div class="gantry-width-spacer">
    <a href="@RT_SITE_URL@/preset-styles/?presets=preset3">
      <span class="rt-image">
        <img alt="Preset 3" src="@RT_SITE_URL@/wp-content/rockettheme/rt_hadron_wp/styles/ss3.jpg" />
      </span>
    </a>
  </div>
</div>
<div class="gantry-width-25 gantry-width-block rt-center">
  <div class="gantry-width-spacer">
    <a href="@RT_SITE_URL@/preset-styles/?presets=preset4">
      <span class="rt-image">
        <img alt="Preset 4" src="@RT_SITE_URL@/wp-content/rockettheme/rt_hadron_wp/styles/ss4.jpg" />
      </span>
    </a>
  </div>
</div>

<div class="clear"></div>

<div class="gantry-width-25 gantry-width-block rt-center">
  <div class="gantry-width-spacer">
    <a href="@RT_SITE_URL@/preset-styles/?presets=preset5">
      <span class="rt-image">
        <img alt="Preset 5" src="@RT_SITE_URL@/wp-content/rockettheme/rt_hadron_wp/styles/ss5.jpg" />
      </span>
    </a>
  </div>
</div>
<div class="gantry-width-25 gantry-width-block rt-center">
  <div class="gantry-width-spacer">
    <a href="@RT_SITE_URL@/preset-styles/?presets=preset6">
      <span class="rt-image">
        <img alt="Preset 6" src="@RT_SITE_URL@/wp-content/rockettheme/rt_hadron_wp/styles/ss6.jpg" />
      </span>
    </a>
  </div>
</div>
<div class="gantry-width-25 gantry-width-block rt-center">
  <div class="gantry-width-spacer">
    <a href="@RT_SITE_URL@/preset-styles/?presets=preset7">
      <span class="rt-image">
        <img alt="Preset 7" src="@RT_SITE_URL@/wp-content/rockettheme/rt_hadron_wp/styles/ss7.jpg" />
      </span>
    </a>
  </div>
</div>
<div class="gantry-width-25 gantry-width-block rt-center">
  <div class="gantry-width-spacer">
    <a href="@RT_SITE_URL@/preset-styles/?presets=preset8">
      <span class="rt-image">
        <img alt="Preset 8" src="@RT_SITE_URL@/wp-content/rockettheme/rt_hadron_wp/styles/ss8.jpg" />
      </span>
    </a>
  </div>
</div>

<div class="clear"></div>
',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => 'rt-center',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => 'rt-big-title',
      'widget_chrome' => '',
    ),
    170007 => 
    array (
      'title' => 'Custom Presets',
      'text' => '<p class="hidden-tablet">Gantry provides the ability for you to create your own custom presets based on any parameter in the template settings.</p>

<ul class="circle-large">
  <li>Go to Admin Dashboard &rarr; Hadron Theme</li>
  <li>Configure the Settings</li>
  <li>Click <strong>Save &rarr; Save Preset</strong></li>
  <li>Follow the <strong>Preset Saver procedure</strong></li>
</ul>

<div class="hidden-tablet">
<p class="notice">You can edit the prebuilt presets in the <strong>gantry.config.php</strong> file, or use the User Interface method outlined above.</p>
</div>

<p class="visible-large">When you create a new custom preset, there is a default image used in the preset chooser to represent this. You can create your own thumbnail for each style by creating a png file that is the \'short\' name of the preset with the dimensions of 180px x 100px.</p>

<a class="readon" href="http://www.gantry-framework.org/documentation/wordpress/customize/custom_presets.md" target="_blank">Gantry Framework: Custom Presets</a>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    170008 => 
    array (
      'title' => '',
      'text' => '  <div class="rt-image largemarginbottom"><img src="data:image/jpeg;base64,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" alt="image"></div>
<div class="clear"></div>
<div class="rt-image"><img alt="image" src="@RT_SITE_URL@/wp-content/rockettheme/rt_hadron_wp/styles/presets-create.jpg"></div>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantrydivider' => 
  array (
    170006 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-widgets-17', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-widgets-18', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-widgets-18',array (
  'widget_text' => 
  array (
    180002 => 
    array (
      'title' => 'More Details [span class="rt-title-tag"]Help guides are available to assist[/span]',
      'text' => '',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => 'rt-pages-bottom rt-big-title rt-title-center',
      'widget_chrome' => '',
    ),
    180003 => 
    array (
      'title' => '',
      'text' => '<p>All demo content is for sample purpose only, intended to show a live site. Use the <a href="#">Hadron RocketLauncher</a> to install an equivalent of the demo onto your site.</p>
<p>Hadron is only available as part of the Club Subscription.</p>

<div class="gantry-width-block gantry-width-50">
    <div class="gantry-width-spacer">
		<div class="rt-footer-logo"></div>
	</div>
</div>

<div class="gantry-width-block gantry-width-50">
	<div class="gantry-width-spacer nomarginleft">
		<span>+1-(678)-123-6789</span><br />
		<span>Hadron Center, LLC</span><br />
		<span>123 WordPress Boulevard</span><br />
		<span>Seattle, WA 00000, USA</span><br />
		<span><a href="#">hello@hadron.com</a></span>
	</div>
</div>

<div class="clear"></div>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => 'fp-footer',
      'widget_chrome' => '',
    ),
    180004 => 
    array (
      'title' => '',
      'text' => '<div class="rt-email-form">
    <form action="#">
		<input type="text" placeholder="Full Name" size="18" alt="fullname" class="inputbox" name="fullname">
		<input type="text" placeholder="Your Email" size="28" alt="email" class="inputbox" name="email">
		<textarea placeholder="Your Message" name="message" cols="30" rows="5"></textarea>
		<input type="submit" value="Send Message" class="button" name="send">
	</form>	
</div>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantrydivider' => 
  array (
    180008 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-widgets-18', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-widgets-2', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-widgets-2',array (
  'widget_text' => 
  array (
    20006 => 
    array (
      'title' => 'Responsive Layout[span class="rt-title-tag"]Flexible Grid System[/span]',
      'text' => '<p class="rt-center promo2">A responsive design automatically adapts itself to a particular viewing environment such as desktop, tablet or mobile, without the need for separate layouts for varying platforms</p>

<div class="rt-center largemargintop largemarginbottom">
  <img class="rt-noborder" alt="image" src="@RT_SITE_URL@/wp-content/rockettheme/rt_hadron_wp/features/responsive.png" />
</div>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => 'rt-center',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => 'rt-big-title',
      'widget_chrome' => '',
    ),
    20007 => 
    array (
      'title' => 'Responsive Layouts',
      'text' => '<div class="rt-image">
  <img class="rt-noborder" alt="image" src="@RT_SITE_URL@/wp-content/rockettheme/rt_hadron_wp/features/responsive-1.jpg" />
</div>

<br />

<span>The template\'s responsive grid system is designed for desktop, tablet and smartphone systems, each with minor modifications to ensure compatibility in each mode. The table above shows the breakdown of screen resolutions and associated devices, and what layout characters are then applied to each.</span>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => 'title1',
      'align-variations' => 'rt-center',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    20008 => 
    array (
      'title' => 'Responsive Classes',
      'text' => '<div class="rt-image">
  <img class="rt-noborder" alt="image" src="@RT_SITE_URL@/wp-content/rockettheme/rt_hadron_wp/features/responsive-2.jpg" />
</div>

<br />

<span>Another useful feature available, via Bootstrap, is the collection of responsive utility classes that can be used to help tweak layouts by providing a simple method of showing or hiding widgets. Insert the above widget custom variation into your settings to show/hide a widget for a particular mode.</span>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => 'title1',
      'align-variations' => 'rt-center',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    20009 => 
    array (
      'title' => 'Media Queries',
      'text' => '<p>In terms of media queries, the breakdown is:</p>
<pre class="lines rt-pre-col2">
/* Smartphones */
@media (max-width: 480px) { ... }

/* Smartphones to Tablets */
@media (min-width: 481px) and (max-width: 767px) { ... }

/* Tablets */
@media (min-width: 768px) and (max-width: 959px) { ... }

/* Desktop */
@media (min-width: 960px) and (max-width: 1199px) { ... }

/* Large Display */
@media (min-width: 1200px) { ... }
</pre>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => 'title4',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    20010 => 
    array (
      'title' => 'Navigation',
      'text' => '<h5 class="smallmarginbottom">Powered by RokNavMenu</h5>
<div class="gantry-width-50 gantry-width-block">
  <div class="gantry-width-spacer">
   <div class="rt-center">
        <img class="rt-noborder" src="@RT_SITE_URL@/wp-content/rockettheme/rt_hadron_wp/features/responsive-nav.png" alt="image" />
   </div>    
  </div>
</div>

<div class="gantry-width-50 gantry-width-block">
  <div class="gantry-width-spacer">
   <p>For mobile devices, there are two options, a dropdown panel menu with items in a tree format or a select box using the browsers own UI elements. Choose a format in the Gantry Menu.</p>

    <p class="hidden-tablet">The <strong>Dropdown Menu</strong> is a CSS driven dropdown menu, offering such features as multiple columns<span class="hidden-large hidden-desktop">, inline icons, subtext, custom column widths, item distribution</span> and menu offsets. </p>

    <p><strong>SplitMenu</strong> displays 1st level items in the navigation bar and children in the Sidebar.</p> 
  </div>
</div>

<div class="clear"></div>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => 'title4',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    20011 => 
    array (
      'title' => 'All the Features - in One Complete List',
      'text' => '<div class="gantry-width-66 gantry-width-block">
  <div class="gantry-width-space">
    <h4>Hadron Template</h4>
    
    <div class="gantry-width-50 gantry-width-block">
      <div class="gantry-width-space">
        <ul class="circle">
          <li>8 Preset Styles</li>
          <li>88 Widget Positions</li>
          <li>Powered by Gantry 4 Framework</li>
          <li>Dropdown Menu</li>
          <li>SplitMenu</li>
          <li>Custom Typography</li>
        </ul>
      </div>
    </div>
    
    <div class="gantry-width-50 gantry-width-block">
      <div class="gantry-width-space">
        <ul class="circle">
          <li>ColorChooser</li>
          <li>RokSprocket Styling</li>
          <li>RokAjaxSearch Styling</li>
          <li>Various Widget Variations</li>
          <li>Major Browsers Support</li>
          <li>HTML5, CSS3, LESS CSS</li>
        </ul>
      </div>
    </div>
    
    <div class="clear"></div>
    
    <h4>Gantry Framework</h4>

    <div class="gantry-width-50 gantry-width-block">
      <div class="gantry-width-space">
        <ul class="circle">
          <li>CSS Grid Framework</li>
          <li>Responsive HTML5 base template</li>
          <li>Stunning Admin Interface</li>
          <li>Source Ordered Mainbody</li>
          <li>Extensive Administrator Interface</li>
        </ul>
      </div>
    </div>
    
    <div class="gantry-width-50 gantry-width-block">
      <div class="gantry-width-space">
        <ul class="circle">
          <li>Built-in Less Compiler</li>
          <li>Versatile Layout</li>
          <li>Grid RTL Support</li>
          <li>Google Web Fonts Support</li>   
          <li>Per Browser based CSS / JS control</li>
        </ul>
      </div>
    </div>
    
    <div class="clear"></div>

  </div>
</div>


<div class="gantry-width-33 gantry-width-block">
  <div class="gantry-width-space">
    <h3>Requirements</h3>
    <ul class="checkmark">
      <li><strong>Apache 2.x or Microsoft IIS 7</strong><br>
        <em>Most widely deployed web server software, required for WordPress</em></li>
      <li><strong>PHP 5.3+</strong> &amp; <strong>MySQL 5.0.4+</strong><br>
        <em>General-purpose server-side scripting language for web development and a popular open-source database system.</em></li>
      <li><strong>WordPress 3.2+</strong><br>
        <em>Please download the latest version at <a target="_blank" href="http://www.wordpress.org" class="normalfont nobold">www.wordpress.org</a>.</em></li>
      <li><strong>Gantry Framework</strong><br>
        <em>Please ensure you are using the latest version of <a target="_blank" href="http://www.gantry-framework.org" class="normalfont nobold">Gantry</a>.</em></li>
    </ul>
  <div class="clear"></div>
  </div>
</div>

<div class="clear"></div>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantrydivider' => 
  array (
    20006 => 
    array (
    ),
    20007 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_menu' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_gantry_loginform' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_gantry_meta' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_roksprocket_options' => 
  array (
    '_multiwidget' => 1,
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-widgets-2', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-widgets-3', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-widgets-3',array (
  'widget_gantry_menu' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_gantry_loginform' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_gantry_meta' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_text' => 
  array (
    30006 => 
    array (
      'title' => 'Collapsible',
      'text' => '<p>If no widgets are placed in a position, the entire area or row will not appear or collapse.</p>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => 'box1',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    30007 => 
    array (
      'title' => 'Injected Gizmos',
      'text' => '<p class="rt-image"><img alt="Non-Standard Elements" src="@RT_SITE_URL@/wp-content/rockettheme/rt_hadron_wp/widget-positions/injected-features.jpg"  /></p>

<p class="nomarginbottom">There are <strong>Gizmos</strong> that are injected into a site when enabled, and are stacked vertically; which includes: Google Analytics, Page Suffix, Smart Load Images, Typography Shortcodes, Page Class Suffix, RokStyle, Disable Auto Paragraphs and IE7 Redirect.</p>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => 'box3',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => 'icon-plus-sign-alt',
      'widget_chrome' => '',
    ),
    30008 => 
    array (
      'title' => 'Forced Positions',
      'text' => '<p>There are times when you just don\'t want to have your widgets taking up all the room in a horizontal row no matter what the layout. For example you might want to have a widget on the left and a widget on the right, with nothing in the middle.</p>

<p>This is made easy with Gantry with the Force Positions parameter for each layout, allowing you to set the count to a specific row number, such as 4, even if 4 widgets are not published for that row.</p>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => 'box2',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => 'icon-table',
      'widget_chrome' => '',
    ),
    30009 => 
    array (
      'title' => 'Gantry Grid',
      'text' => '<p>Configure at <strong>Admin Dashboard &rarr; Hadron theme</strong>, then go to <strong>Layouts</strong> to set the grid widths and allocated positions.</p>

<div class="rt-image">
  <img alt="image" src="@RT_SITE_URL@/wp-content/rockettheme/rt_hadron_wp/widget-positions/grid-distribution.jpg">
</div>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => 'box3',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => 'icon-th',
      'widget_chrome' => '',
    ),
    30010 => 
    array (
      'title' => 'Grid Sizes',
      'text' => '<p>Configure at <strong>Admin Dashboard &rarr; Hadron Theme</strong>, then go to <strong>Layouts</strong> to set the grid widths and allocated positions.</p>

<p>By default, each grid is given an <strong>equal</strong> distribution, but this can be modified to a <strong>custom</strong> distribution between widgets, such as <strong>3/4/5</strong> instead of <strong>4/4/4</strong>. These options are available for when <strong>2-6</strong> widgets are present.</p>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => 'box2',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => 'icon-columns',
      'widget_chrome' => '',
    ),
    30011 => 
    array (
      'title' => 'MainBody / Sidebar Layouts',
      'text' => '<p>Configure at <strong>Admin Dashboard &rarr; Hadron Theme</strong>, then go to <strong>Layouts</strong> tab and set the varying Mainbody/Sidebar layout possibilities.</p>

<div class="gantry-width-33 gantry-width-block">
  <div class="gantry-width-spacer">
    <div class="rt-image">
      <img src="@RT_SITE_URL@/wp-content/rockettheme/rt_hadron_wp/widget-positions/position-config-mb1.jpg" alt="image"/>
    </div>
  </div>
</div>

<div class="gantry-width-33 gantry-width-block">
  <div class="gantry-width-spacer">
    <div class="rt-image">
      <img src="@RT_SITE_URL@/wp-content/rockettheme/rt_hadron_wp/widget-positions/position-config-mb2.jpg" alt="image"/>
    </div>
  </div>
</div>

<div class="gantry-width-33 gantry-width-block">
  <div class="gantry-width-spacer">
    <div class="rt-image">
      <img src="@RT_SITE_URL@/wp-content/rockettheme/rt_hadron_wp/widget-positions/position-config-mb3.jpg" alt="image"/>
    </div>
  </div>
</div>

<div class="clear"></div><br />

<p class="success rt-center">Note: If no widgets are placed in the Sidebar position, the Mainbody will become full width.</p>

<div class="rt-image hidden">
  <img alt="Module Positions" src="@RT_SITE_URL@/wp-content/rockettheme/rt_hadron_wp/widget-positions/gantry-layout.jpg" />
</div>

<div class="rt-mbsb-table hidden-phone">
    <div class="gantry-width-50 gantry-width-block largemarginbottom">
  <div class="largemarginright">
    <div class="gantry-width-30 gantry-width-block">
      <div class="smallmarginall">
        <table class="table table-bordered gantry-center">
          <thead>
            <tr>
              <th colspan="1"><h5 class="nomarginall">Sidebar</h5></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="rt-sb-table-col">A</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="gantry-width-30 gantry-width-block">
      <div class="smallmarginall">
        <table class="table table-bordered gantry-center">
          <tbody>
            <tr>
              <td class="rt-mb-table-col"><h5>Mainbody</h5></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="gantry-width-40 gantry-width-block">
      <div class="smallmarginall">
        <table class="table table-bordered gantry-center">
          <thead>
            <tr>
              <th colspan="2"><h5 class="nomarginall">Sidebar</h5></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="rt-sb-table-col">B</td>
              <td class="rt-sb-table-col">C</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="clear"></div>  
    </div>
  </div>

  <div class="gantry-width-50 gantry-width-block largemarginbottom">
  <div class="largemarginleft">
    <div class="gantry-width-40 gantry-width-block">
      <div class="smallmarginall">
        <table class="table table-bordered gantry-center">
          <thead>
            <tr>
              <th colspan="2"><h5 class="nomarginall">Sidebar</h5></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="rt-sb-table-col">A</td>
              <td class="rt-sb-table-col">B</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="gantry-width-30 gantry-width-block">
      <div class="smallmarginall">
        <table class="table table-bordered gantry-center">
          <tbody>
            <tr>
              <td class="rt-mb-table-col"><h5>Mainbody</h5></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="gantry-width-30 gantry-width-block">
      <div class="smallmarginall">
        <table class="table table-bordered gantry-center">
          <thead>
            <tr>
              <th colspan="1"><h5 class="nomarginall">Sidebar</h5></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="rt-sb-table-col">C</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="clear"></div>
    </div>
  </div>

  <div class="clear"></div>

  <div class="gantry-width-50 gantry-width-block largemarginbottom">
  <div class="largemarginright">  
    <div class="gantry-width-50 gantry-width-block">
      <div class="smallmarginall">
        <table class="table table-bordered gantry-center">
          <thead>
            <tr>
              <th colspan="3"><h5 class="nomarginall">Sidebar</h5></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="rt-sb-table-col">A</td>
              <td class="rt-sb-table-col">B</td>
              <td class="rt-sb-table-col">C</td>  
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="gantry-width-50 gantry-width-block">
      <div class="smallmarginall">
        <table class="table table-bordered gantry-center">
          <tbody>
            <tr>
              <td class="rt-mb-table-col"><h5>Mainbody</h5></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="clear"></div>
    </div>
  </div>

  <div class="gantry-width-50 gantry-width-block largemarginbottom">
  <div class="largemarginleft"> 
    <div class="gantry-width-70 gantry-width-block">
      <div class="smallmarginall">
        <table class="table table-bordered gantry-center">
          <tbody>
            <tr>
              <td class="rt-mb-table-col"><h5>Mainbody</h5></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="gantry-width-30 gantry-width-block">
      <div class="smallmarginall">
        <table class="table table-bordered gantry-center">
          <thead>
            <tr>
              <th colspan="1"><h5 class="nomarginall">Sidebar</h5></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="rt-sb-table-col">A</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="clear"></div>
    </div>
  </div>

  <div class="clear"></div>

  <div class="gantry-width-50 gantry-width-block largemarginbottom">
  <div class="largemarginright">  
    <div class="gantry-width-60 gantry-width-block">
      <div class="smallmarginall">
        <table class="table table-bordered gantry-center">
          <tbody>
            <tr>
              <td class="rt-mb-table-col"><h5>Mainbody</h5></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="gantry-width-40 gantry-width-block">
      <div class="smallmarginall">
        <table class="table table-bordered gantry-center">
          <thead>
            <tr>
              <th colspan="2"><h5 class="nomarginall">Sidebar</h5></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="rt-sb-table-col">A</td>
          <td class="rt-sb-table-col">B</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="clear"></div>
    </div>
  </div>

  <div class="gantry-width-50 gantry-width-block largemarginbottom">
  <div class="largemarginleft"> 
    <div class="gantry-width-50 gantry-width-block">
      <div class="smallmarginall">
        <table class="table table-bordered gantry-center">
          <tbody>
            <tr>
              <td class="rt-mb-table-col"><h5>Mainbody</h5></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="gantry-width-50 gantry-width-block">
      <div class="smallmarginall">
        <table class="table table-bordered gantry-center">
          <thead>
            <tr>
              <th colspan="3"><h5 class="nomarginall">Sidebar</h5></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="rt-sb-table-col">A</td>
              <td class="rt-sb-table-col">B</td>
              <td class="rt-sb-table-col">C</td>    
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="clear"></div>
    </div>
  </div>

  <div class="clear"></div>

  <div class="gantry-width-50 gantry-width-block largemarginbottom">
  <div class="largemarginright">
    <div class="gantry-width-30 gantry-width-block">
      <div class="smallmarginall">
        <table class="table table-bordered gantry-center">
          <thead>
            <tr>
              <th colspan="1"><h5 class="nomarginall">Sidebar</h5></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="rt-sb-table-col">A</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="gantry-width-70 gantry-width-block">
      <div class="smallmarginall">
        <table class="table table-bordered gantry-center">
          <tbody>
            <tr>
              <td class="rt-mb-table-col"><h5>Mainbody</h5></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="clear"></div>
    </div>
  </div>

  <div class="gantry-width-50 gantry-width-block largemarginbottom">
  <div class="largemarginleft">
    <div class="gantry-width-50 gantry-width-block">
      <div class="smallmarginall">
        <table class="table table-bordered gantry-center">
          <thead>
            <tr>
              <th colspan="2"><h5 class="nomarginall">Sidebar</h5></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="rt-sb-table-col">A</td>
          <td class="rt-sb-table-col">B</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="gantry-width-50 gantry-width-block">
      <div class="smallmarginall">
        <table class="table table-bordered gantry-center">
          <tbody>
            <tr>
              <td class="rt-mb-table-col"><h5>Mainbody</h5></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="clear"></div>
    </div>
  </div>
  <div class="clear"></div>
</div>
',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => 'box3',
      'title-variations' => '',
      'align-variations' => 'rt-center',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    30012 => 
    array (
      'title' => 'Basic: Using Gantry Layouts',
      'text' => '<div class="customtitle2">
  <div class="gantry-width-25 gantry-width-block">
  <div class="gantry-width-spacer">
    <a href="https://www.youtube.com/watch?v=g0iEalGwdJY" title="Video Tutorial :: Using Gantry Layouts" data-rokbox data-rokbox-size="1280 720">
      <span>
        <img alt="Using Layouts" src="@RT_SITE_URL@/wp-content/rockettheme/rt_hadron_wp/widget-positions/using-layouts.jpg" />
      </span>
    </a>
  </div>
</div>

<div class="gantry-width-75 gantry-width-block">
  <div class="gantry-width-spacer">
    <p>To find out about <strong>Gantry Layouts</strong> and <strong>Widget Widths</strong>, check out this screencast which covers basic concepts of configuring layout with a combination of widget setting and the Gantry layout control.</p>

    <a target="_blank" href="http://gantry-framework.org/documentation/wordpress/configure/layouts.md" class="readon smallmargintop"><span>View : Using Layouts</span></a>
  </div>    
</div>

<div class="clear"></div></div>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    30013 => 
    array (
      'title' => 'Advanced: Adding Positions',
      'text' => '<div class="customtitle2">
  <div class="gantry-width-25 gantry-width-block">
  <div class="gantry-width-spacer">
    <a href="https://www.youtube.com/watch?v=xYsB2VKmkFU" title="Video Tutorial :: Widget Positions" data-rokbox data-rokbox-size="1280 720">
      <span>
      <img alt="Using Layouts" src="@RT_SITE_URL@/wp-content/rockettheme/rt_hadron_wp/widget-positions/adding-module-positions.jpg" />
      </span>  
    </a>
  </div>
</div>

<div class="gantry-width-75 gantry-width-block">
  <div class="gantry-width-spacer">
    <p>Check out this quick screencast on <strong>Widget Positions</strong> to get an overview of how widget positions work within Gantry Framework. Click below button to learn how to <strong>add a new row of widget positions</strong>.</p>

    <a target="_blank" href="http://gantry-framework.org/documentation/wordpress/customize/adding-widget-positions.md" class="readon smallmargintop"><span>Learn : Adding Positions</span></a>
  </div>    
</div>

<div class="clear"></div></div>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantrydivider' => 
  array (
    30006 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-widgets-3', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-widgets-4', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-widgets-4',array (
  'widget_gantrydivider' => 
  array (
    40006 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_text' => 
  array (
    40006 => 
    array (
      'title' => 'title1',
      'text' => '<p>An example widget using the <strong>title1</strong> widget variation.</p>

<p>Lorem ipsum dolor sit amet, consecetur adipiscing elit donec sit amet nibh.</p>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => 'title1',
      'align-variations' => '',
      'margin-variations' => 'nomargintop',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    40007 => 
    array (
      'title' => 'title3',
      'text' => '<p>An example widget using the <strong>title3</strong> widget variation.</p>

<p>Lorem ipsum dolor sit amet, consecetur adipiscing elit donec sit amet nibh.</p>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => 'title3',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    40008 => 
    array (
      'title' => 'box1',
      'text' => '<p>An example widget using the <strong>box1</strong> widget variation.</p>

<p>Lorem ipsum dolor sit amet, consecetur adipiscing elit donec sit amet nibh.</p>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => 'box1',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    40009 => 
    array (
      'title' => 'box3',
      'text' => '<p>An example widget using the <strong>box3</strong> widget variation.</p>

<p>Lorem ipsum dolor sit amet, consecetur adipiscing elit donec sit amet nibh.</p>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => 'box3',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    40010 => 
    array (
      'title' => 'title2',
      'text' => '<p>An example widget using the <strong>title2</strong> widget variation.</p>

<p>Lorem ipsum dolor sit amet, consecetur adipiscing elit donec sit amet nibh.</p>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => 'title2',
      'align-variations' => '',
      'margin-variations' => 'nomargintop',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    40011 => 
    array (
      'title' => 'title4',
      'text' => '<p>An example widget using the <strong>title4</strong> widget variation.</p>

<p>Lorem ipsum dolor sit amet, consecetur adipiscing elit donec sit amet nibh.</p>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => 'title4',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    40012 => 
    array (
      'title' => 'box2',
      'text' => '<p>An example widget using the <strong>box2</strong> widget variation.</p>

<p>Lorem ipsum dolor sit amet, consecetur adipiscing elit donec sit amet nibh.</p>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => 'box2',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    40013 => 
    array (
      'title' => 'box4',
      'text' => '<p>An example widget using the <strong>box4</strong> widget variation.</p>

<p>Lorem ipsum dolor sit amet, consecetur adipiscing elit donec sit amet nibh.</p>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => 'box4',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    40014 => 
    array (
      'title' => 'Using a Variation',
      'text' => '<p>Choose any available variations at <strong>Appearance &rarr; Widgets &rarr; <em>Widget</em> &rarr; selectboxes at the bottom of the widget settings</strong>.</p>
<p class="notice nomarginbottom">You can compound multiple variations together such as: <strong><em>box1 title3</em></strong>.</p>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => 'title1',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    40015 => 
    array (
      'title' => 'box4 title2',
      'text' => '<p>An <a href="#">example</a> widget using the <strong>box4 title2</strong> widget variation.</p>

<p>Lorem ipsum dolor sit amet, consecetur adipiscing elit donec sit amet nibh.</p>

<p><a href="#" class="readon">Read More</a></p>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => 'box4',
      'title-variations' => 'title2',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    40016 => 
    array (
      'title' => 'box2 title1',
      'text' => '<p>An <a href="#">example</a> widget using the <strong>box2 title1</strong> widget variation.</p>

<p>Lorem ipsum dolor sit amet, consecetur adipiscing elit donec sit amet nibh.</p>

<p><a href="#" class="readon">Read More</a></p>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => 'box2',
      'title-variations' => 'title1',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    40017 => 
    array (
      'title' => 'No Suffix',
      'text' => '<p>An example widget using <strong>no widget variation.</strong></p>

<p>Lorem ipsum dolor sit amet, consecetur adipiscing elit donec sit amet nibh.</p>

<p><a href="#" class="readon">Read More</a></p>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    40018 => 
    array (
      'title' => 'Standard Variations: Additional Widget Variations',
      'text' => '<div class="customicon-file-alt">
  <ul>
<li>
<strong>rt-center:</strong> centres the content of the widget.</li>
  <li>
<strong>rt-uppercase, rt-lowercase:</strong> change the case of the widget title.</li>  
  <li>
<strong>nomargintop, nomarginright, nomarginbottom, nomarginleft, nomarginall:</strong> removes the various margins around the widget.</li>    
  <li>
<strong>nopaddingtop, nopaddingright, nopaddingbottom, nopaddingleft, nopaddingall:</strong> removes the various paddings around the widget.</li>    
  <li>
<strong>(small/med/large)margintop, (small/med/large)marginright, (small/med/large)marginbottom, (small/med/large)marginleft:</strong> increase the paddings around the widget.</li>
  <li>
<strong>(subsmall/submed/sublarge)margintop, (subsmall/submed/sublarge)marginright, (subsmall/submed/sublarge)marginbottom, (subsmall/submed/sublarge)marginleft, (subsmall/submed/sublarge)marginall:</strong> decrease the paddings around the widget.</li>  
</ul>
</div>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_menu' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_gantry_loginform' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_gantry_meta' => 
  array (
    '_multiwidget' => 1,
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-widgets-4', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-widgets-5', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-widgets-5',array (
  'widget_gantry_menu' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_gantry_loginform' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_gantry_meta' => 
  array (
    '_multiwidget' => 1,
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-widgets-5', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-widgets-6', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-widgets-6',array (
  'widget_text' => 
  array (
    60006 => 
    array (
      'title' => 'Hadron Menu[span class="rt-title-tag"]By RokNavMenu[/span]',
      'text' => '<div class="gantry-width-50 gantry-width-block">
  <div class="gantry-width-spacer">
      <p class="visible-large">RokNavMenu (part of Gantry Framework core) provides a feature rich platform for displaying the menu, allowing for overrides and plugins for the menu itself, in addition to versatile theming capabilities and so much more.</p>
      
    <p>To find all the parameters for Dropdown Menu &amp; SplitMenu on Hadron template, such as Levels Limiting, please navigate to:</p>
    
    <ul class="dots">
      <li><strong>Appearance &rarr; Widgets</strong></li>
      <li>Then go to <strong>Gantry Menu</strong> widget, and set the Menu parameters</li>
    </ul>
    
    <p class="largemargintop attention">These settings are per widget level so this means that each Gantry Menu widget instance can have different setup.</p>
  </div>
</div>

<div class="gantry-width-50 gantry-width-block">
  <div class="gantry-width-spacer">
    <div class="rt-image">
      <img src="@RT_SITE_URL@/wp-content/rockettheme/rt_hadron_wp/menu-options/menu-setting.jpg" alt="Set Menu" />
    </div>
  </div>
</div>

<div class="clear"></div>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => 'rt-big-title rt-title-center',
      'widget_chrome' => '',
    ),
    60007 => 
    array (
      'title' => 'Dropdown Menu',
      'text' => '    <p>A CSS driven dropdown menu, with subtext line, multi-columns, icons and more.</p>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => 'box4',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => 'icon-align-justify',
      'widget_chrome' => '',
    ),
    60008 => 
    array (
      'title' => 'Split Menu',
      'text' => '    <p>A static menu system that displays 1st level items in the main horizontal menu and all children in the Sidebar.</p>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => 'box4',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => 'icon-th-list',
      'widget_chrome' => '',
    ),
    60009 => 
    array (
      'title' => 'No Menu',
      'text' => '<p>An option to disable the menu, allowing for usage of different menu systems.</p>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => 'box4',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => 'icon-minus-sign',
      'widget_chrome' => '',
    ),
    60010 => 
    array (
      'title' => 'SubText Line',
      'text' => '	<p>The option that allows you to insert additional text to the Menu Item Title, including the SubMenu Item Title. There is separate styling for this, making it useful for adding snippets to menu items.</p>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    60011 => 
    array (
      'title' => 'Menu Icon',
      'text' => '<p>Gantry Menu provides the option to display a small icon image, powered by FontAwesome, for the menu item. The menu icon can be displayed both for the parent items and the child items.</p>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    60012 => 
    array (
      'title' => 'Multi-Columns',
      'text' => '<p>Who needs a single dropdown column when you can have as many as you want? Using the built-in configurable parameters, you can make up to four incredible multi column dropdowns.</p>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_menu' => 
  array (
    60503 => 
    array (
      'title' => 'Main Menu',
      'nav_menu' => 'main-menu',
      'theme' => 'gantry_splitmenu',
      'style' => '',
      'limit_levels' => '1',
      'startLevel' => '0',
      'endLevel' => '1',
      'showAllChildren' => '0',
      'show_empty_menu' => '0',
      'maxdepth' => '10',
      'widget-style-variations' => '',
      'box-variations' => 'box4',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'widget_chrome' => '',
      'custom-variations' => 'icon-list-alt',
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_loginform' => 
  array (
    60502 => 
    array (
      'title' => 'Login Form',
      'user_greeting' => 'Hi,',
      'pretext' => '',
      'posttext' => '',
      'widget-style-variations' => '',
      'box-variations' => 'box3',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'widget_chrome' => '',
      'custom-variations' => 'icon-lock',
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_meta' => 
  array (
    60502 => 
    array (
      'title' => 'Meta',
      'menu_class' => 'menu',
      'widget-style-variations' => '',
      'box-variations' => 'box2',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'widget_chrome' => '',
      'custom-variations' => 'icon-user',
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantrydivider' => 
  array (
    60006 => 
    array (
    ),
    60007 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-widgets-6', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-widgets-7', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-widgets-7',array (
  'widget_text' => 
  array (
    70006 => 
    array (
      'title' => 'Various Pages[span class="rt-title-tag"]Flexible and adaptable sample pages[/span]',
      'text' => '',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => 'rt-center',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => 'rt-big-title',
      'widget_chrome' => '',
    ),
    70007 => 
    array (
      'title' => '',
      'text' => '<canvas id="myChart-a" height="320" width="600"></canvas>

<script type="text/javascript">
    var lineChartData = {
		labels : ["Cerulean","Chapelco","Lumiere","Hexeris","Oculus","Stratos","Corvus"],
		datasets : [
			{
				fillColor : "transparent",
				strokeColor : "#97DBF2",
				pointColor : "#97DBF2",
				pointStrokeColor : "#97DBF2",
				data : [600,500,900,800,500,400,700]
			},
			{
				fillColor : "transparent",
				strokeColor : "#DE4E33",
				pointColor : "#DE4E33",
				pointStrokeColor : "#DE4E33",
				data : [200,400,600,300,900,200,500]
			},		
		]
	},
	options = {
		//Boolean - If we want to override with a hard coded scale
		scaleOverride : true,
		
		//** Required if scaleOverride is true **
		//Number - The number of steps in a hard coded scale
		scaleSteps : 9,
		//Number - The value jump in the hard coded scale
		scaleStepWidth : 100,
		//Number - The scale starting value
		scaleStartValue : 100,

		//String - Scale label font colour	
		scaleFontColor : "rgba(0,0,0,0.3)",

		//String - Colour of the scale line
		scaleLineColor : "rgba(0,0,0,0.3)",

		//String - Colour of the grid lines
		scaleGridLineColor : "rgba(0,0,0,0.3)",	

		//Boolean - Whether the line is curved between points
		bezierCurve : false,	

		//Number - Radius of each point dot in pixels
		pointDotRadius : 8,

		//Number - Pixel width of point dot stroke
		pointDotStrokeWidth : 5,
		
		//Number - Pixel width of dataset stroke
		datasetStrokeWidth : 6,
		
		//Boolean - Whether to fill the dataset with a colour
		datasetFill : true,

	}

	//Get the context of the canvas element we want to select
	var ctx = document.getElementById("myChart-a").getContext("2d");
	var myNewChart = new Chart(ctx).Line(lineChartData, options);

</script>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    70008 => 
    array (
      'title' => '',
      'text' => '<canvas id="myChart-b" height="320" width="600"></canvas>

<script type="text/javascript">
    var barChartData = {
		labels : [""],
		datasets : [
			{
				fillColor : "#D95240",
				strokeColor : "#D95240",
				data : [300]
			},
			{
				fillColor : "#6FC6A0",
				strokeColor : "#6FC6A0",
				data : [800]
			},
			{
				fillColor : "#D6A842",
				strokeColor : "#D6A842",
				data : [600]
			},
			{
				fillColor : "#6FB4C5",
				strokeColor : "#6FB4C5",
				data : [1000]
			},
			{
				fillColor : "#D49245",
				strokeColor : "#D49245",
				data : [400]
			}									
		]
	},
	options = {
		//Boolean - If we want to override with a hard coded scale
		scaleOverride : true,
		
		//** Required if scaleOverride is true **
		//Number - The number of steps in a hard coded scale
		scaleSteps : 9,
		//Number - The value jump in the hard coded scale
		scaleStepWidth : 100,
		//Number - The scale starting value
		scaleStartValue : 100,

		//String - Scale label font colour	
		scaleFontColor : "rgba(0,0,0,0.3)",

		//String - Colour of the scale line
		scaleLineColor : "rgba(0,0,0,0.3)",

		//String - Colour of the grid lines
		scaleGridLineColor : "rgba(0,0,0,0.3)",	

		//Number - Spacing between data sets within X values
		barDatasetSpacing : 30,	
	}

	//Get the context of the canvas element we want to select
	var ctx = document.getElementById("myChart-b").getContext("2d");
	var myNewChart = new Chart(ctx).Bar(barChartData, options);

</script>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    70009 => 
    array (
      'title' => 'Graphic Charts by ChartJS',
      'text' => '<p><strong>NOTE: </strong>The canvas only works on modern browsers (Firefox, Opera, Chrome, Safari, and Internet Explorer 9+) that support the HTML5 canvas element. <a href="http://www.w3schools.com/html/html5_canvas.asp" target="_blank">Internet Explorer 8 and earlier versions, do not support the canvas element.</a></p>

<p>The two charts shown above are the sample chart we used on our demo pages. It\'s based on <a href="http://www.chartjs.org/">Chart.js</a>. Chart.js is an easy, object oriented client side graphs for designers and developers.</p>

<p class="nomarginbottom">For more information how to create great looking charts using Chart.js, please visit <a href="http://www.chartjs.org/">Chart.js</a> homepage or download the script <a href="https://github.com/nnnick/Chart.js">here</a>.</p>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => 'title2',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantrydivider' => 
  array (
    70006 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_menu' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_gantry_loginform' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_gantry_meta' => 
  array (
    '_multiwidget' => 1,
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-widgets-7', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-widgets-8', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-widgets-8',array (
  'widget_gantry_breakcrumbs' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_text' => 
  array (
    80006 => 
    array (
      'title' => '',
      'text' => '<div class="gantry-width-block gantry-width-50">
    <div class="gantry-width-spacer">
		<span class="rt-image">
			<img src="@RT_SITE_URL@/wp-content/rockettheme/rt_hadron_wp/about-us/img1.jpg" alt="image" />
		</span>
	</div>
</div>

<div class="gantry-width-block gantry-width-50">
	<div class="gantry-width-spacer">
		<h3>Introduction</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, odio, enim quam temporibus ratione dolor iusto animi similique possimus at? Veritatis, a atque odio nam quisquam perferendis magnam necessitatibus laboriosam!</p>
		
		<div class="hidden-tablet">
			<h3>Mission Statement</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, odio, enim quam temporibus ratione dolor iusto animi similique possimus at? Veritatis, a atque odio nam quisquam perferendis magnam necessitatibus laboriosam!</p>				
		</div>
	</div>
</div>

<div class="clear"></div>

<div class="rt-readon-row">
	<a href="#" class="readon"><span class="icon-circle-arrow-right"></span> Read More</a>
	<a href="#" class="readon"><span class="icon-envelope"></span> Get in Touch</a>
</div>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => 'rt-title-promo',
      'widget_chrome' => '',
    ),
    80007 => 
    array (
      'title' => 'Statistics',
      'text' => '<p><a href="#">A lorem ipsum</a> dolor sit amet, consectetur adipisicing elit. Nam, eos, labore molestias quis eaque dolorum exceptur</p>

<canvas id="myChart" height="318" width="500"></canvas>

<script type="text/javascript">
    var barChartData = {
		labels : [""],
		datasets : [
			{
				fillColor : "#D95240",
				strokeColor : "#D95240",
				data : [300]
			},
			{
				fillColor : "#6FC6A0",
				strokeColor : "#6FC6A0",
				data : [800]
			},
			{
				fillColor : "#D6A842",
				strokeColor : "#D6A842",
				data : [600]
			},
			{
				fillColor : "#6FB4C5",
				strokeColor : "#6FB4C5",
				data : [1000]
			},
			{
				fillColor : "#D49245",
				strokeColor : "#D49245",
				data : [400]
			}									
		]
	},
	options = {
		//Boolean - If we want to override with a hard coded scale
		scaleOverride : true,
		
		//** Required if scaleOverride is true **
		//Number - The number of steps in a hard coded scale
		scaleSteps : 9,
		//Number - The value jump in the hard coded scale
		scaleStepWidth : 100,
		//Number - The scale starting value
		scaleStartValue : 100,

		//String - Scale label font colour	
		scaleFontColor : "rgba(255,255,255,0.3)",

		//String - Colour of the scale line
		scaleLineColor : "rgba(255,255,255,0.3)",

		//String - Colour of the grid lines
		scaleGridLineColor : "rgba(255,255,255,0.3)",	

		//Number - Spacing between data sets within X values
		barDatasetSpacing : 30,	
	}

	//Get the context of the canvas element we want to select
	var ctx = document.getElementById("myChart").getContext("2d");
	var myNewChart = new Chart(ctx).Bar(barChartData, options);

</script>


<div class="rds-infos rt-center">
	<span class="rds-info">
		<span class="rt-data-1"></span> <span>Lorem</span>
	</span>
	<span class="rds-info">
		<span class="rt-data-2"></span> <span>Ipsum</span>
	</span>
	<span class="rds-info">
		<span class="rt-data-3"></span> <span>Dolor</span>
	</span>
	<span class="rds-info">
		<span class="rt-data-4"></span> <span>Amet</span>
	</span>
	<span class="rds-info">
		<span class="rt-data-5"></span> <span>Viva</span>
	</span>	
</div>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => 'title2',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    80009 => 
    array (
      'title' => 'Meet the Team [span class="rt-title-tag"]Development and Design[/span]',
      'text' => '',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => 'nomarginbottom',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => 'rt-big-title rt-title-center fp-mainbottom',
      'widget_chrome' => '',
    ),
    80010 => 
    array (
      'title' => '',
      'text' => '<div class="module-title">
    <h2 class="title">We are Hadron<span class="rt-title-tag">Learn More About Us</span>
	</h2>			
</div>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => 'rt-center',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => 'rt-about-showcase rt-big-title',
      'widget_chrome' => '',
    ),
    80011 => 
    array (
      'title' => '',
      'text' => '<div class="gantry-width-block gantry-width-25">
    <div class="gantry-width-spacer">
		<h1 class="title nomarginbottom">376,487</h1>
		<p class="rt-uppercase">Members</p>
	</div>
</div>

<div class="gantry-width-block gantry-width-25">
	<div class="gantry-width-spacer">
		<h1 class="title nomarginbottom">12,376</h1>
		<p class="rt-uppercase">Products Sold</p>
	</div>
</div>

<div class="gantry-width-block gantry-width-25">
	<div class="gantry-width-spacer">
		<h1 class="title nomarginbottom">168</h1>
		<p class="rt-uppercase">Employees</p>
	</div>
</div>

<div class="gantry-width-block gantry-width-25">
	<div class="gantry-width-spacer">
		<h1 class="title nomarginbottom">200,987</h1>
		<p class="rt-uppercase">Happy Customers</p>
	</div>
</div>

<div class="clear"></div>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => 'rt-center',
      'margin-variations' => 'nomargintop',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => 'nomarginbottom',
      'widget_chrome' => '',
    ),
    80012 => 
    array (
      'title' => 'What We Do',
      'text' => '',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => 'title2',
      'align-variations' => '',
      'margin-variations' => 'nomarginbottom',
      'padding-variations' => 'nopaddingbottom',
      'title-style-variations' => '',
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_menu' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_gantry_loginform' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_gantry_meta' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_gantrydivider' => 
  array (
    80006 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_roksprocket_options' => 
  array (
    '_multiwidget' => 1,
    80003 => 
    array (
      'title' => '',
      'module_id' => '67',
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => 'nomargintop',
      'padding-variations' => '',
      'title-style-variations' => '',
      'widget_chrome' => '',
      'custom-variations' => 'fp-whatwedo',
    ),
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-widgets-8', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-override-widgets-9', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-override-widgets-9',array (
  'widget_gantry_breakcrumbs' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_gantrydivider' => 
  array (
    90006 => 
    array (
    ),
    90007 => 
    array (
    ),
    90008 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_text' => 
  array (
    90006 => 
    array (
      'title' => 'Need Support ?',
      'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptate pariatur officia accusantium sapiente expedita eius fugiat</p>
<a href="#">Contact Us</a>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => 'box4',
      'title-variations' => '',
      'align-variations' => 'rt-center',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => 'icon-info-sign',
      'widget_chrome' => '',
    ),
    90007 => 
    array (
      'title' => 'Check Forum',
      'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptate pariatur officia accusantium sapiente expedita eius fugiat</p>
<a href="#">Join the Community</a>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => 'box4',
      'title-variations' => '',
      'align-variations' => 'rt-center',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => 'icon-comments',
      'widget_chrome' => '',
    ),
    90008 => 
    array (
      'title' => 'Questions ?',
      'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptate pariatur officia accusantium sapiente expedita eius fugiat</p>
<a href="#">Ask Now</a>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => 'box4',
      'title-variations' => '',
      'align-variations' => 'rt-center',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => 'icon-help',
      'widget_chrome' => '',
    ),
    90009 => 
    array (
      'title' => 'FAQ didn\'t solve your problem?',
      'text' => '<h3>Get direct access to the team via phone, email or live chat.</h3>

<p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => 'title4',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => 'nomargintop nopaddingtop largemarginbottom',
      'widget_chrome' => '',
    ),
    90010 => 
    array (
      'title' => 'Contact Us',
      'text' => '<p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
<a class="readon" href="#">Contact Us</a>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => 'box3',
      'title-variations' => '',
      'align-variations' => 'rt-center',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => 'icon-envelope largemargintop',
      'widget_chrome' => '',
    ),
    90011 => 
    array (
      'title' => 'Telephone Support',
      'text' => '<p>Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui.</p>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => 'nomargintop',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => 'icon-check nomarginbottom',
      'widget_chrome' => '',
    ),
    90012 => 
    array (
      'title' => 'Ticket System',
      'text' => '<p>Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui.</p>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => 'nomargintop',
      'padding-variations' => 'nopaddingtop',
      'title-style-variations' => '',
      'custom-variations' => 'icon-check',
      'widget_chrome' => '',
    ),
    90013 => 
    array (
      'title' => 'Need Guide?',
      'text' => '<p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
<a class="readon" href="#">Download Docs</a>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => 'box3',
      'title-variations' => '',
      'align-variations' => 'rt-center',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => 'icon-help largemargintop',
      'widget_chrome' => '',
    ),
    90014 => 
    array (
      'title' => 'Online Live Chat',
      'text' => '<p>Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui.</p>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => 'nomargintop',
      'padding-variations' => '',
      'title-style-variations' => '',
      'custom-variations' => 'icon-check nomarginbottom',
      'widget_chrome' => '',
    ),
    90015 => 
    array (
      'title' => 'Downloadable PDFs',
      'text' => '<p>Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui.</p>',
      'filter' => false,
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => 'nomargintop',
      'padding-variations' => 'nopaddingtop',
      'title-style-variations' => '',
      'custom-variations' => 'icon-check',
      'widget_chrome' => '',
    ),
    '_multiwidget' => 1,
  ),
  'widget_roksprocket_options' => 
  array (
    90002 => 
    array (
      'title' => '',
      'module_id' => '62',
      'widget-style-variations' => '',
      'box-variations' => '',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => 'nomargintop',
      'padding-variations' => 'nopaddingtop',
      'title-style-variations' => '',
      'widget_chrome' => '',
      'custom-variations' => '',
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_menu' => 
  array (
    90503 => 
    array (
      'title' => 'Main Menu',
      'nav_menu' => 'main-menu',
      'theme' => 'gantry_splitmenu',
      'style' => '',
      'limit_levels' => '1',
      'startLevel' => '0',
      'endLevel' => '1',
      'showAllChildren' => '0',
      'show_empty_menu' => '0',
      'maxdepth' => '10',
      'widget-style-variations' => '',
      'box-variations' => 'box3',
      'title-variations' => 'title1',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'widget_chrome' => '',
      'custom-variations' => '',
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_loginform' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_gantry_meta' => 
  array (
    90502 => 
    array (
      'title' => 'Meta',
      'menu_class' => 'menu',
      'widget-style-variations' => '',
      'box-variations' => 'box2',
      'title-variations' => '',
      'align-variations' => '',
      'margin-variations' => '',
      'padding-variations' => '',
      'title-style-variations' => '',
      'widget_chrome' => '',
      'custom-variations' => 'icon-user',
    ),
    '_multiwidget' => 1,
  ),
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-override-widgets-9', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_hadron_wp-template-options-overrides', 'filter_token_url', 10, 2);

        update_option('rt_hadron_wp-template-options-overrides',array (
  1 => 'Front Page',
  2 => 'Features',
  3 => 'Widget Positions',
  4 => 'Widget Variations',
  5 => 'Typography',
  6 => 'Menu Options',
  7 => 'Pages',
  8 => 'About Us',
  9 => 'FAQ',
  10 => 'Team',
  11 => 'Contact',
  12 => 'Services',
  13 => 'Offline Page',
  14 => 'Pricing',
  15 => 'Portfolio',
  16 => 'Blog',
  17 => 'Preset Styles',
  18 => 'Pages Footer',
));

        remove_filter('pre_update_option_rt_hadron_wp-template-options-overrides', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rokajaxsearch_options', 'filter_token_url', 10, 2);

        update_option('rokajaxsearch_options',array (
  'theme' => 'light',
  'load_custom_css' => '1',
  'google_api' => '',
  'show_description' => '1',
  'show_readmore' => '1',
  'read_more' => 'Read More ...',
  'hide_divs' => '',
  'display_content' => 'excerpt',
  'order' => 'date',
  'per_page' => '3',
  'limit' => '10',
  'google_web' => '1',
  'google_blog' => '1',
  'google_images' => '0',
  'google_video' => '0',
  'image_size' => 'MEDIUM',
  'safesearch' => 'MODERATE',
  'pagination' => '1',
  'show_category' => '1',
  'show_estimated' => '1',
  'include_link' => '1',
));

        remove_filter('pre_update_option_rokajaxsearch_options', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rokbox2_options', 'filter_token_url', 10, 2);

        update_option('rokbox2_options',array (
  'viewport_pc' => '100',
  'backwards_compat' => '0',
  'thumb_width' => '150',
  'thumb_height' => '100',
  'thumb_quality' => '90',
  'scripts_in_footer' => '0',
));

        remove_filter('pre_update_option_rokbox2_options', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rokbox_options', 'filter_token_url', 10, 2);

        update_option('rokbox_options',array (
  'theme' => 'light',
  'thumb_system' => 'default',
  'custom_theme' => 'sample',
  'custom_settings' => '0',
  'transition' => 'Quad.easeOut',
  'duration' => '200',
  'chase' => '40',
  'frame-border' => '20',
  'content-padding' => '0',
  'arrows-height' => '35',
  'effect' => 'quicksilver',
  'captions' => '1',
  'captionsDelay' => '800',
  'scrolling' => '0',
  'keyEvents' => '1',
  'overlay_background' => '#000000',
  'overlay_opacity' => '0.85',
  'overlay_duration' => '200',
  'overlay_transition' => 'Quad.easeInOut',
  'width' => '640',
  'height' => '460',
  'autoplay' => 'true',
  'controller' => 'true',
  'bgcolor' => '#f3f3f3',
  'ytautoplay' => '0',
  'ythighquality' => '0',
  'vimeoColor' => '00adef',
  'vimeoPortrait' => '0',
  'vimeoTitle' => '0',
  'vimeoFullScreen' => '1',
  'vimeoByline' => '0',
));

        remove_filter('pre_update_option_rokbox_options', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rokcommon_configs', 'filter_token_url', 10, 2);

        update_option('rokcommon_configs',array (
  'rokgallery_container' => 
  array (
    'file' => '/wp-content/plugins//wp_rokgallery/container.xml',
    'extension' => 'rokgallery',
    'priority' => 10,
    'type' => 'container',
  ),
  'rokgallery_library' => 
  array (
    'file' => '/wp-content/plugins//wp_rokgallery/lib',
    'extension' => 'rokgallery',
    'priority' => 10,
    'type' => 'library',
  ),
  'roksprocket_container' => 
  array (
    'file' => 'wp-content/plugins/wp_roksprocket/container.xml',
    'extension' => 'roksprocket',
    'priority' => 10,
    'type' => 'container',
  ),
  'roksprocket_library' => 
  array (
    'file' => 'wp-content/plugins/wp_roksprocket/lib',
    'extension' => 'roksprocket',
    'priority' => 10,
    'type' => 'library',
  ),
));

        remove_filter('pre_update_option_rokcommon_configs', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rokgallery_plugin_settings', 'filter_token_url', 10, 2);

        update_option('rokgallery_plugin_settings',array (
  'allow_duplicate_files' => 1,
  'publish_slices_on_file_publish' => 0,
  'gallery_remove_slice' => 1,
  'gallery_autopublish' => 1,
  'default_thumb_xsize' => 150,
  'default_thumb_ysize' => 150,
  'default_thumb_keep_aspect' => 1,
  'default_thumb_background' => '#000',
  'jpeg_quality' => 80,
  'png_compression' => 0,
  'love_text' => 'Love',
  'unlove_text' => 'Unlove',
));

        remove_filter('pre_update_option_rokgallery_plugin_settings', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_roksocialbuttons', 'filter_token_url', 10, 2);

        update_option('roksocialbuttons',array (
  'addthis_id' => '',
  'enable_twitter' => '1',
  'enable_facebook' => '1',
  'enable_google' => '1',
  'prepend_text' => '',
  'extra_class' => 'rt-socialbuttons',
  'display_position' => '0',
  'add_method' => '1',
  'catid' => 
  array (
    0 => '2',
  ),
));

        remove_filter('pre_update_option_roksocialbuttons', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_widget_rokajaxsearch', 'filter_token_url', 10, 2);

        update_option('widget_rokajaxsearch',array (
  4 => 
  array (
    'title' => '',
    'widget-style-variations' => '',
    'box-variations' => '',
    'title-variations' => '',
    'align-variations' => '',
    'margin-variations' => '',
    'padding-variations' => '',
    'title-style-variations' => '',
    'widget_chrome' => '',
    'custom-variations' => 'fp-rokajaxsearch hidden-phone',
  ),
  '_multiwidget' => 1,
  160003 => 
  array (
    'title' => 'Search the Blog',
    'widget-style-variations' => '',
    'box-variations' => 'box2',
    'title-variations' => '',
    'align-variations' => '',
    'margin-variations' => '',
    'padding-variations' => '',
    'title-style-variations' => '',
    'widget_chrome' => '',
    'custom-variations' => 'rt-blog-search icon-search hidden-phone',
  ),
));

        remove_filter('pre_update_option_widget_rokajaxsearch', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_widget_rokgallery_options', 'filter_token_url', 10, 2);

        update_option('widget_rokgallery_options',array (
  '_multiwidget' => 1,
  10008 => 
  array (
    'title' => '',
    'gallery_id' => '8',
    'link' => 'none',
    'default_menuitem' => '@RT_SITE_URL@/tutorials/',
    'show_title' => '1',
    'caption' => '1',
    'sort_by' => 'gallery_ordering',
    'sort_direction' => 'ASC',
    'limit_count' => '10',
    'style' => 'light',
    'layout' => 'slideshow',
    'columns' => '1',
    'arrows' => 'yes',
    'navigation' => 'none',
    'animation_type' => 'random',
    'animation_duration' => '500',
    'autoplay_enabled' => '0',
    'autoplay_delay' => '7',
    'showcase_arrows' => 'onhover',
    'showcase_image_position' => 'left',
    'showcase_imgpadding' => '0',
    'showcase_fixedheight' => '0',
    'showcase_animatedheight' => '1',
    'showcase_animation_type' => 'random',
    'showcase_captionsanimation' => 'crossfade',
    'showcase_animation_duration' => '500',
    'showcase_autoplay_enabled' => '0',
    'showcase_autoplay_delay' => '7',
    'showcase_responsive_arrows' => 'onhover',
    'showcase_responsive_image_position' => 'left',
    'showcase_responsive_imgpadding' => '0',
    'showcase_responsive_animation_type' => 'random',
    'showcase_responsive_captionsanimation' => 'crossfade',
    'showcase_responsive_animation_duration' => '500',
    'showcase_responsive_autoplay_enabled' => '0',
    'showcase_responsive_autoplay_delay' => '7',
    'widget-style-variations' => '',
    'box-variations' => '',
    'title-variations' => '',
    'shadow-variations' => '',
    'corner-variations' => '',
    'align-variations' => '',
    'margin-variations' => '',
    'padding-variations' => '',
    'title-style-variations' => '',
    'widget_chrome' => '',
    'custom-variations' => '',
  ),
));

        remove_filter('pre_update_option_widget_rokgallery_options', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_widget_roksprocket_options', 'filter_token_url', 10, 2);

        update_option('widget_roksprocket_options',array (
  '_multiwidget' => 1,
  3 => 
  array (
    'title' => 'Popular Features[span class="rt-title-tag"]By RokSprocket[/span]',
    'module_id' => '63',
    'widget-style-variations' => '',
    'box-variations' => '',
    'title-variations' => '',
    'align-variations' => '',
    'margin-variations' => '',
    'padding-variations' => '',
    'title-style-variations' => '',
    'widget_chrome' => '',
    'custom-variations' => 'fp-roksprocket-tabs',
  ),
  10004 => 
  array (
    'title' => '',
    'module_id' => '75',
    'widget-style-variations' => '',
    'box-variations' => '',
    'title-variations' => '',
    'align-variations' => '',
    'margin-variations' => '',
    'padding-variations' => '',
    'title-style-variations' => '',
    'widget_chrome' => '',
    'custom-variations' => 'fp-roksprocket-showcase',
  ),
  10005 => 
  array (
    'title' => '',
    'module_id' => '76',
    'widget-style-variations' => '',
    'box-variations' => '',
    'title-variations' => '',
    'align-variations' => '',
    'margin-variations' => '',
    'padding-variations' => '',
    'title-style-variations' => '',
    'widget_chrome' => '',
    'custom-variations' => 'fp-roksprocket-strips',
  ),
  10006 => 
  array (
    'title' => 'Gantry Extras',
    'module_id' => '64',
    'widget-style-variations' => '',
    'box-variations' => '',
    'title-variations' => '',
    'align-variations' => '',
    'margin-variations' => '',
    'padding-variations' => '',
    'title-style-variations' => '',
    'widget_chrome' => '',
    'custom-variations' => 'fp-roksprocket-lists',
  ),
  10007 => 
  array (
    'title' => '',
    'module_id' => '77',
    'widget-style-variations' => '',
    'box-variations' => '',
    'title-variations' => '',
    'align-variations' => '',
    'margin-variations' => '',
    'padding-variations' => '',
    'title-style-variations' => '',
    'widget_chrome' => '',
    'custom-variations' => 'fp-roksprocket-tabs',
  ),
  80003 => 
  array (
    'title' => '',
    'module_id' => '67',
    'widget-style-variations' => '',
    'box-variations' => '',
    'title-variations' => '',
    'align-variations' => '',
    'margin-variations' => 'nomargintop',
    'padding-variations' => '',
    'title-style-variations' => '',
    'widget_chrome' => '',
    'custom-variations' => 'fp-whatwedo',
  ),
  90002 => 
  array (
    'title' => '',
    'module_id' => '62',
    'widget-style-variations' => '',
    'box-variations' => '',
    'title-variations' => '',
    'align-variations' => '',
    'margin-variations' => 'nomargintop',
    'padding-variations' => 'nopaddingtop',
    'title-style-variations' => '',
    'widget_chrome' => '',
    'custom-variations' => '',
  ),
  150002 => 
  array (
    'title' => '',
    'module_id' => '65',
    'widget-style-variations' => '',
    'box-variations' => '',
    'title-variations' => 'title1',
    'align-variations' => '',
    'margin-variations' => '',
    'padding-variations' => '',
    'title-style-variations' => '',
    'widget_chrome' => '',
    'custom-variations' => 'rt-demo-portfolio',
  ),
  150005 => 
  array (
    'title' => 'Our Clients [span class="rt-title-tag"]Review Our Previous Work[/span]',
    'module_id' => '66',
    'widget-style-variations' => '',
    'box-variations' => '',
    'title-variations' => '',
    'align-variations' => '',
    'margin-variations' => '',
    'padding-variations' => '',
    'title-style-variations' => '',
    'widget_chrome' => '',
    'custom-variations' => 'rt-demo-clients rt-big-title rt-title-center',
  ),
));

        remove_filter('pre_update_option_widget_roksprocket_options', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_sidebars_widgets', 'filter_token_url', 10, 2);

        update_option('sidebars_widgets',array (
  'wp_inactive_widgets' => 
  array (
  ),
  'top' => 
  array (
  ),
  'header' => 
  array (
    0 => 'gantry_logo-3',
  ),
  'navigation' => 
  array (
    0 => 'gantry_menu-2',
    1 => 'gantrydivider-6',
    2 => 'gantry_social-3',
    3 => 'gantrydivider-7',
    4 => 'rokajaxsearch-4',
  ),
  'showcase' => 
  array (
  ),
  'drawer' => 
  array (
  ),
  'breadcrumb' => 
  array (
  ),
  'utility' => 
  array (
  ),
  'feature' => 
  array (
  ),
  'maintop' => 
  array (
  ),
  'expandedtop' => 
  array (
  ),
  'sidebar' => 
  array (
    0 => 'gantry_menu-3',
    1 => 'gantry_loginform-2',
    2 => 'gantry_meta-2',
  ),
  'content-top' => 
  array (
  ),
  'content-bottom' => 
  array (
  ),
  'mainbottom' => 
  array (
  ),
  'expandedbottom' => 
  array (
  ),
  'extension' => 
  array (
  ),
  'fullwidth' => 
  array (
  ),
  'bottom' => 
  array (
  ),
  'footer' => 
  array (
  ),
  'copyright' => 
  array (
    0 => 'gantry_copyright-2',
  ),
  'debug' => 
  array (
  ),
  'analytics' => 
  array (
  ),
  'login' => 
  array (
  ),
  'popup' => 
  array (
  ),
  'array_version' => 3,
));

        remove_filter('pre_update_option_sidebars_widgets', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_posts_per_page', 'filter_token_url', 10, 2);

        update_option('posts_per_page','1');

        remove_filter('pre_update_option_posts_per_page', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_gantry_bugfix_WGANTRYFW_5', 'filter_token_url', 10, 2);

        update_option('gantry_bugfix_WGANTRYFW_5','1');

        remove_filter('pre_update_option_gantry_bugfix_WGANTRYFW_5', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_permalink_structure', 'filter_token_url', 10, 2);

        update_option('permalink_structure','/%postname%/');

        remove_filter('pre_update_option_permalink_structure', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_blogdescription', 'filter_token_url', 10, 2);

        update_option('blogdescription','Designed by RocketTheme');

        remove_filter('pre_update_option_blogdescription', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_show_on_front', 'filter_token_url', 10, 2);

        update_option('show_on_front','posts');

        remove_filter('pre_update_option_show_on_front', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_active_plugins', 'filter_token_url', 10, 2);

        update_option('active_plugins',array (
  0 => 'gantry/gantry.php',
  1 => 'wp_rokajaxsearch/rokajaxsearch.php',
  2 => 'wp_rokbox/rokbox.php',
  3 => 'wp_rokcommon/rokcommon.php',
  4 => 'wp_roksocialbuttons/roksocialbuttons.php',
  5 => 'wp_roksprocket/roksprocket.php',
));

        remove_filter('pre_update_option_active_plugins', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_widget_gantry_logo', 'filter_token_url', 10, 2);

        update_option('widget_gantry_logo',array (
  3 => 
  array (
    'widget-style-variations' => '',
    'box-variations' => '',
    'title-variations' => '',
    'align-variations' => '',
    'margin-variations' => '',
    'padding-variations' => '',
    'title-style-variations' => '',
    'widget_chrome' => '',
    'custom-variations' => '',
  ),
  '_multiwidget' => 1,
));

        remove_filter('pre_update_option_widget_gantry_logo', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_widget_gantry_menu', 'filter_token_url', 10, 2);

        update_option('widget_gantry_menu',array (
  2 => 
  array (
    'title' => '',
    'nav_menu' => 'main-menu',
    'theme' => 'gantry_dropdown',
    'style' => '',
    'limit_levels' => '0',
    'startLevel' => '0',
    'endLevel' => '0',
    'showAllChildren' => '1',
    'show_empty_menu' => '0',
    'maxdepth' => '10',
    'widget-style-variations' => '',
    'box-variations' => '',
    'title-variations' => '',
    'align-variations' => '',
    'margin-variations' => '',
    'padding-variations' => '',
    'title-style-variations' => '',
    'widget_chrome' => 'menu',
    'custom-variations' => '',
  ),
  3 => 
  array (
    'title' => 'Main Menu',
    'nav_menu' => 'main-menu',
    'theme' => 'gantry_splitmenu',
    'style' => '',
    'limit_levels' => '1',
    'startLevel' => '0',
    'endLevel' => '1',
    'showAllChildren' => '0',
    'show_empty_menu' => '0',
    'maxdepth' => '10',
    'widget-style-variations' => '',
    'box-variations' => 'box3',
    'title-variations' => 'title2',
    'align-variations' => '',
    'margin-variations' => '',
    'padding-variations' => '',
    'title-style-variations' => '',
    'widget_chrome' => '',
    'custom-variations' => 'icon-list-alt',
  ),
  '_multiwidget' => 1,
));

        remove_filter('pre_update_option_widget_gantry_menu', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_widget_gantrydivider', 'filter_token_url', 10, 2);

        update_option('widget_gantrydivider',array (
  6 => 
  array (
  ),
  7 => 
  array (
  ),
  '_multiwidget' => 1,
));

        remove_filter('pre_update_option_widget_gantrydivider', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_widget_gantry_social', 'filter_token_url', 10, 2);

        update_option('widget_gantry_social',array (
  3 => 
  array (
    'target' => '_blank',
    'button-1-icon' => 'icon-facebook',
    'button-1-text' => '',
    'button-1-link' => 'http://www.facebook.com/RocketTheme',
    'button-2-icon' => 'icon-twitter',
    'button-2-text' => '',
    'button-2-link' => 'https://twitter.com/rockettheme',
    'button-3-icon' => 'icon-google-plus',
    'button-3-text' => '',
    'button-3-link' => 'https://plus.google.com/114430407008695950828/posts',
    'button-4-icon' => 'icon-rss',
    'button-4-text' => '',
    'button-4-link' => 'http://www.rockettheme.com/blog?format=feed&amp;amp;type=rss',
    'button-5-icon' => '',
    'button-5-text' => '',
    'button-5-link' => '',
    'button-6-icon' => '',
    'button-6-text' => '',
    'button-6-link' => '',
    'widget-style-variations' => '',
    'box-variations' => '',
    'title-variations' => '',
    'align-variations' => '',
    'margin-variations' => '',
    'padding-variations' => '',
    'title-style-variations' => '',
    'widget_chrome' => '',
    'custom-variations' => '',
  ),
  '_multiwidget' => 1,
));

        remove_filter('pre_update_option_widget_gantry_social', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_widget_rokajaxsearch', 'filter_token_url', 10, 2);

        update_option('widget_rokajaxsearch',array (
  4 => 
  array (
    'title' => '',
    'widget-style-variations' => '',
    'box-variations' => '',
    'title-variations' => '',
    'align-variations' => '',
    'margin-variations' => '',
    'padding-variations' => '',
    'title-style-variations' => '',
    'widget_chrome' => '',
    'custom-variations' => 'fp-rokajaxsearch hidden-phone',
  ),
  '_multiwidget' => 1,
));

        remove_filter('pre_update_option_widget_rokajaxsearch', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_widget_gantry_loginform', 'filter_token_url', 10, 2);

        update_option('widget_gantry_loginform',array (
  2 => 
  array (
    'title' => 'Login Form',
    'user_greeting' => 'Hi,',
    'pretext' => '',
    'posttext' => '',
    'widget-style-variations' => '',
    'box-variations' => 'box1',
    'title-variations' => 'title2',
    'align-variations' => '',
    'margin-variations' => '',
    'padding-variations' => '',
    'title-style-variations' => '',
    'widget_chrome' => '',
    'custom-variations' => 'icon-lock',
  ),
  '_multiwidget' => 1,
));

        remove_filter('pre_update_option_widget_gantry_loginform', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_widget_gantry_meta', 'filter_token_url', 10, 2);

        update_option('widget_gantry_meta',array (
  2 => 
  array (
    'title' => 'Meta',
    'menu_class' => 'menu',
    'widget-style-variations' => '',
    'box-variations' => 'box4',
    'title-variations' => 'title1',
    'align-variations' => '',
    'margin-variations' => '',
    'padding-variations' => '',
    'title-style-variations' => '',
    'widget_chrome' => '',
    'custom-variations' => 'icon-user',
  ),
  '_multiwidget' => 1,
));

        remove_filter('pre_update_option_widget_gantry_meta', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_widget_gantry_copyright', 'filter_token_url', 10, 2);

        update_option('widget_gantry_copyright',array (
  2 => 
  array (
    'text' => 'Copyright 2014. Powered by RocketTheme.',
    'widget-style-variations' => '',
    'box-variations' => '',
    'title-variations' => '',
    'align-variations' => '',
    'margin-variations' => '',
    'padding-variations' => '',
    'title-style-variations' => '',
    'widget_chrome' => '',
    'custom-variations' => '',
  ),
  '_multiwidget' => 1,
));

        remove_filter('pre_update_option_widget_gantry_copyright', 'filter_token_url', 10, 2);

$gantry_menu_items = array();
function rokimport_get_post_from_guid($guid) {
    global $wpdb;
    $guid = replace_token_url($guid);
    $posts = $wpdb->get_results("SELECT ID FROM " . $wpdb->posts . " WHERE guid = '" . $guid . "'");
    return (count($posts) > 0) ? $posts[0]->ID : 0;
}
function rokimport_get_taxonomy($name, $taxonomy) {
    $taxfield = get_term_by( "slug", $name, $taxonomy);
    return $taxfield->term_id;
}
global $wp_version;
if (version_compare($wp_version,"3.0",">=")){
$importing_menu = wp_get_nav_menu_object("main-menu");$menu_item_mapping = array(0=>0);$menu_item_mapping[1993] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[0],'menu-item-type' => 'custom','menu-item-title' => 'Home','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '1','menu-item-attr-title' => '','menu-item-url' => '@RT_SITE_URL@/'));$gantry_menu_items["main-menu"][$menu_item_mapping[1993]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
  'gantrymenu_fusion_distribution' => 'evenly',
  'gantrymenu_fusion_manual_distribution' => '',
  'gantrymenu_fusion_children_group' => '0',
  'gantrymenu_fusion_dropdown_width' => '',
  'gantrymenu_fusion_column_widths' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_item_subtext' => '',
  'gantrymenu_dropdown_offset' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
);$menu_item_mapping[1994] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[0],'menu-item-type' => 'post_type','menu-item-title' => 'Features','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '2','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=6'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[1994]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
  'gantrymenu_fusion_distribution' => 'evenly',
  'gantrymenu_fusion_manual_distribution' => '',
  'gantrymenu_fusion_children_group' => '0',
  'gantrymenu_fusion_dropdown_width' => '',
  'gantrymenu_fusion_column_widths' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_item_subtext' => '',
  'gantrymenu_dropdown_offset' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
);$menu_item_mapping[1995] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1994],'menu-item-type' => 'post_type','menu-item-title' => 'Widget Positions','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '3','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=14'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[1995]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
  'gantrymenu_fusion_distribution' => 'evenly',
  'gantrymenu_fusion_manual_distribution' => '',
  'gantrymenu_fusion_children_group' => '0',
  'gantrymenu_fusion_dropdown_width' => '',
  'gantrymenu_fusion_column_widths' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_item_subtext' => '',
  'gantrymenu_dropdown_offset' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
);$menu_item_mapping[1996] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1994],'menu-item-type' => 'post_type','menu-item-title' => 'Widget Variations','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '4','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=16'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[1996]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
  'gantrymenu_fusion_distribution' => 'evenly',
  'gantrymenu_fusion_manual_distribution' => '',
  'gantrymenu_fusion_children_group' => '0',
  'gantrymenu_fusion_dropdown_width' => '',
  'gantrymenu_fusion_column_widths' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_item_subtext' => '',
  'gantrymenu_dropdown_offset' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
);$menu_item_mapping[1997] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1994],'menu-item-type' => 'post_type','menu-item-title' => 'Typography','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '5','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=18'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[1997]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
  'gantrymenu_fusion_distribution' => 'evenly',
  'gantrymenu_fusion_manual_distribution' => '',
  'gantrymenu_fusion_children_group' => '0',
  'gantrymenu_fusion_dropdown_width' => '',
  'gantrymenu_fusion_column_widths' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_item_subtext' => '',
  'gantrymenu_dropdown_offset' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
);$menu_item_mapping[1998] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1994],'menu-item-type' => 'post_type','menu-item-title' => 'Menu Options','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '6','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=1793'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[1998]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '2',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '360',
  'gantrymenu_column_widths' => '',
);$menu_item_mapping[1999] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1998],'menu-item-type' => 'custom','menu-item-title' => 'Menu Examples','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '7','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1999]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
  'gantrymenu_fusion_distribution' => 'evenly',
  'gantrymenu_fusion_manual_distribution' => '',
  'gantrymenu_fusion_children_group' => '1',
  'gantrymenu_fusion_dropdown_width' => '',
  'gantrymenu_fusion_column_widths' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_item_subtext' => '',
  'gantrymenu_dropdown_offset' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '1',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
);$menu_item_mapping[2000] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1999],'menu-item-type' => 'custom','menu-item-title' => 'Child Items','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '8','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[2000]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
  'gantrymenu_fusion_distribution' => 'evenly',
  'gantrymenu_fusion_manual_distribution' => '',
  'gantrymenu_fusion_children_group' => '0',
  'gantrymenu_fusion_dropdown_width' => '',
  'gantrymenu_fusion_column_widths' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_item_subtext' => '',
  'gantrymenu_dropdown_offset' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
);$menu_item_mapping[2001] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1999],'menu-item-type' => 'custom','menu-item-title' => 'Menu Icons','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '9','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[2001]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => 'icon-like.png',
  'gantrymenu_submenu_cols' => '1',
  'gantrymenu_fusion_distribution' => 'evenly',
  'gantrymenu_fusion_manual_distribution' => '',
  'gantrymenu_fusion_children_group' => '0',
  'gantrymenu_fusion_dropdown_width' => '',
  'gantrymenu_fusion_column_widths' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_item_subtext' => '',
  'gantrymenu_dropdown_offset' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
);$menu_item_mapping[2002] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1999],'menu-item-type' => 'custom','menu-item-title' => 'Item Subtext','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '10','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[2002]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
  'gantrymenu_fusion_distribution' => 'evenly',
  'gantrymenu_fusion_manual_distribution' => '',
  'gantrymenu_fusion_children_group' => '0',
  'gantrymenu_fusion_dropdown_width' => '',
  'gantrymenu_fusion_column_widths' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_item_subtext' => '',
  'gantrymenu_dropdown_offset' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
);$menu_item_mapping[2003] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1998],'menu-item-type' => 'custom','menu-item-title' => 'Menu Types','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '11','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[2003]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
  'gantrymenu_fusion_distribution' => 'evenly',
  'gantrymenu_fusion_manual_distribution' => '',
  'gantrymenu_fusion_children_group' => '1',
  'gantrymenu_fusion_dropdown_width' => '',
  'gantrymenu_fusion_column_widths' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_item_subtext' => '',
  'gantrymenu_dropdown_offset' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '1',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
);$menu_item_mapping[2004] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[2003],'menu-item-type' => 'custom','menu-item-title' => 'Dropdown Menu','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '12','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[2004]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
  'gantrymenu_fusion_distribution' => 'evenly',
  'gantrymenu_fusion_manual_distribution' => '',
  'gantrymenu_fusion_children_group' => '0',
  'gantrymenu_fusion_dropdown_width' => '',
  'gantrymenu_fusion_column_widths' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_item_subtext' => '',
  'gantrymenu_dropdown_offset' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
);$menu_item_mapping[2005] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[2003],'menu-item-type' => 'custom','menu-item-title' => 'Split Menu','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '13','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[2005]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
  'gantrymenu_fusion_distribution' => 'evenly',
  'gantrymenu_fusion_manual_distribution' => '',
  'gantrymenu_fusion_children_group' => '0',
  'gantrymenu_fusion_dropdown_width' => '',
  'gantrymenu_fusion_column_widths' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_item_subtext' => '',
  'gantrymenu_dropdown_offset' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
);$menu_item_mapping[2006] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[2003],'menu-item-type' => 'custom','menu-item-title' => 'No Menu','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '14','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[2006]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
  'gantrymenu_fusion_distribution' => 'evenly',
  'gantrymenu_fusion_manual_distribution' => '',
  'gantrymenu_fusion_children_group' => '0',
  'gantrymenu_fusion_dropdown_width' => '',
  'gantrymenu_fusion_column_widths' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_item_subtext' => '',
  'gantrymenu_dropdown_offset' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
);$menu_item_mapping[2007] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1994],'menu-item-type' => 'custom','menu-item-title' => 'Support','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '15','menu-item-attr-title' => '','menu-item-url' => 'http://www.rockettheme.com/forum/wordpress-theme-hadron'));$gantry_menu_items["main-menu"][$menu_item_mapping[2007]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
);$menu_item_mapping[2008] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[0],'menu-item-type' => 'post_type','menu-item-title' => 'Pages','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '16','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=1772'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[2008]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => 'icon-file-text',
  'gantrymenu_columns' => '2',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '290',
  'gantrymenu_column_widths' => '',
);$menu_item_mapping[2009] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[2008],'menu-item-type' => 'post_type','menu-item-title' => 'About Us','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '17','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=1774'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[2009]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
);$menu_item_mapping[2010] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[2008],'menu-item-type' => 'post_type','menu-item-title' => 'Team','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '18','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=1778'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[2010]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
);$menu_item_mapping[2011] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[2008],'menu-item-type' => 'post_type','menu-item-title' => 'Services','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '19','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=1782'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[2011]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
);$menu_item_mapping[2012] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[2008],'menu-item-type' => 'post_type','menu-item-title' => 'Pricing','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '20','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=1787'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[2012]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
);$menu_item_mapping[2013] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[2008],'menu-item-type' => 'post_type','menu-item-title' => 'Portfolio','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '21','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=1791'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[2013]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
);$menu_item_mapping[2014] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[2008],'menu-item-type' => 'taxonomy','menu-item-title' => 'Blog','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '22','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_taxonomy('blog', 'category'),'menu-item-object' => 'category'));$gantry_menu_items["main-menu"][$menu_item_mapping[2014]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
);$menu_item_mapping[2015] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[2008],'menu-item-type' => 'post_type','menu-item-title' => 'FAQ','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '23','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=1776'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[2015]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
);$menu_item_mapping[2016] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[2008],'menu-item-type' => 'post_type','menu-item-title' => 'Contact','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '24','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=1780'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[2016]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
);$menu_item_mapping[2017] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[2008],'menu-item-type' => 'post_type','menu-item-title' => 'Offline Page','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '25','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=1784'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[2017]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
);$menu_item_mapping[2018] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[2008],'menu-item-type' => 'custom','menu-item-title' => 'Coming Soon','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '26','menu-item-attr-title' => '','menu-item-url' => '@RT_SITE_URL@/?tmpl=comingsoon'));$gantry_menu_items["main-menu"][$menu_item_mapping[2018]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
);$menu_item_mapping[2019] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[2008],'menu-item-type' => 'custom','menu-item-title' => '404 Error','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '27','menu-item-attr-title' => '','menu-item-url' => '@RT_SITE_URL@/?p=1337'));$gantry_menu_items["main-menu"][$menu_item_mapping[2019]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
);$menu_item_mapping[2020] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[0],'menu-item-type' => 'post_type','menu-item-title' => 'Styles','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '28','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=8'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[2020]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '2',
  'gantrymenu_fusion_distribution' => 'evenly',
  'gantrymenu_fusion_manual_distribution' => '',
  'gantrymenu_fusion_children_group' => '0',
  'gantrymenu_fusion_dropdown_width' => '330',
  'gantrymenu_fusion_column_widths' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_item_subtext' => '',
  'gantrymenu_dropdown_offset' => '',
  'gantrymenu_columns' => '2',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '300',
  'gantrymenu_column_widths' => '',
);$menu_item_mapping[2021] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[2020],'menu-item-type' => 'custom','menu-item-title' => 'Preset 1','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '29','menu-item-attr-title' => '','menu-item-url' => '@RT_SITE_URL@/?presets=preset1'));$gantry_menu_items["main-menu"][$menu_item_mapping[2021]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
  'gantrymenu_fusion_distribution' => 'evenly',
  'gantrymenu_fusion_manual_distribution' => '',
  'gantrymenu_fusion_children_group' => '0',
  'gantrymenu_fusion_dropdown_width' => '',
  'gantrymenu_fusion_column_widths' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_item_subtext' => '',
  'gantrymenu_dropdown_offset' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
);$menu_item_mapping[2022] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[2020],'menu-item-type' => 'custom','menu-item-title' => 'Preset 3','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '30','menu-item-attr-title' => '','menu-item-url' => '@RT_SITE_URL@/?presets=preset3'));$gantry_menu_items["main-menu"][$menu_item_mapping[2022]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
  'gantrymenu_fusion_distribution' => 'evenly',
  'gantrymenu_fusion_manual_distribution' => '',
  'gantrymenu_fusion_children_group' => '0',
  'gantrymenu_fusion_dropdown_width' => '',
  'gantrymenu_fusion_column_widths' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_item_subtext' => '',
  'gantrymenu_dropdown_offset' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
);$menu_item_mapping[2023] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[2020],'menu-item-type' => 'custom','menu-item-title' => 'Preset 5','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '31','menu-item-attr-title' => '','menu-item-url' => '@RT_SITE_URL@/?presets=preset5'));$gantry_menu_items["main-menu"][$menu_item_mapping[2023]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
  'gantrymenu_fusion_distribution' => 'evenly',
  'gantrymenu_fusion_manual_distribution' => '',
  'gantrymenu_fusion_children_group' => '0',
  'gantrymenu_fusion_dropdown_width' => '',
  'gantrymenu_fusion_column_widths' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_item_subtext' => '',
  'gantrymenu_dropdown_offset' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
);$menu_item_mapping[2024] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[2020],'menu-item-type' => 'custom','menu-item-title' => 'Preset 7','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '32','menu-item-attr-title' => '','menu-item-url' => '@RT_SITE_URL@/?presets=preset7'));$gantry_menu_items["main-menu"][$menu_item_mapping[2024]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
);$menu_item_mapping[2025] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[2020],'menu-item-type' => 'custom','menu-item-title' => 'Preset 2','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '33','menu-item-attr-title' => '','menu-item-url' => '@RT_SITE_URL@/?presets=preset2'));$gantry_menu_items["main-menu"][$menu_item_mapping[2025]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
  'gantrymenu_fusion_distribution' => 'evenly',
  'gantrymenu_fusion_manual_distribution' => '',
  'gantrymenu_fusion_children_group' => '0',
  'gantrymenu_fusion_dropdown_width' => '',
  'gantrymenu_fusion_column_widths' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_item_subtext' => '',
  'gantrymenu_dropdown_offset' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
);$menu_item_mapping[2026] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[2020],'menu-item-type' => 'custom','menu-item-title' => 'Preset 4','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '34','menu-item-attr-title' => '','menu-item-url' => '@RT_SITE_URL@/?presets=preset4'));$gantry_menu_items["main-menu"][$menu_item_mapping[2026]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
  'gantrymenu_fusion_distribution' => 'evenly',
  'gantrymenu_fusion_manual_distribution' => '',
  'gantrymenu_fusion_children_group' => '0',
  'gantrymenu_fusion_dropdown_width' => '',
  'gantrymenu_fusion_column_widths' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_item_subtext' => '',
  'gantrymenu_dropdown_offset' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
);$menu_item_mapping[2027] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[2020],'menu-item-type' => 'custom','menu-item-title' => 'Preset 6','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '35','menu-item-attr-title' => '','menu-item-url' => '@RT_SITE_URL@/?presets=preset6'));$gantry_menu_items["main-menu"][$menu_item_mapping[2027]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
  'gantrymenu_fusion_distribution' => 'evenly',
  'gantrymenu_fusion_manual_distribution' => '',
  'gantrymenu_fusion_children_group' => '0',
  'gantrymenu_fusion_dropdown_width' => '',
  'gantrymenu_fusion_column_widths' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_item_subtext' => '',
  'gantrymenu_dropdown_offset' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
);$menu_item_mapping[2028] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[2020],'menu-item-type' => 'custom','menu-item-title' => 'Preset 8','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '36','menu-item-attr-title' => '','menu-item-url' => '@RT_SITE_URL@/?presets=preset8'));$gantry_menu_items["main-menu"][$menu_item_mapping[2028]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
);$menu_item_mapping[2029] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[0],'menu-item-type' => 'custom','menu-item-title' => 'Download','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '37','menu-item-attr-title' => '','menu-item-url' => 'http://www.rockettheme.com/wordpress/themes/hadron'));$gantry_menu_items["main-menu"][$menu_item_mapping[2029]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
);update_option("gantry_menu_items",$gantry_menu_items);}