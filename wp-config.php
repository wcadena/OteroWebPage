<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'otero');

/** MySQL database username */
define('DB_USER', 'otero');

/** MySQL database password */
define('DB_PASSWORD', 'otero');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$S|6>*o|K3fExv|DsJsY#CE?bgDis6ep16}?%tzaF9NIn;Zx68}f_{!5:ey&R#hX');
define('SECURE_AUTH_KEY',  '.StlC(&Y/xwtqS+RvI8HkO(7)@jv_IhuA^F*mJ7*krt`X~S_wbxaSH3$Zl!0u,rY');
define('LOGGED_IN_KEY',    '<]F<F.9%3-5zDj%jX0iJ)js a#Cy9b(I#F%}4/`)XM}-sX^5}4G- 5.%dR1]YX8l');
define('NONCE_KEY',        'n1SIp%d2Y{=3prM1Ve|:>J-oL?0~S9u^4N(Qx{ta20m+OX{>S~?!RH};d:YVo2>Z');
define('AUTH_SALT',        'qOD.#=?!rt$H4[MXv Ewrnk3kC{D|9x~I8F$h@`;}:u*wBk2j|NC.]Q`GM+-0$!k');
define('SECURE_AUTH_SALT', 'fcgbGcal_0Y>yjKM6GBdL0mf8)nzSW=,@[7{s_A~A:-J*_U9.ZM0bD]E4Q|2[[q!');
define('LOGGED_IN_SALT',   'yqiO3PpB}Mv{]&EyLBLehO;(6bX&RU,Uk -y},Q?-g>&Vc[??&PQ`Fzj/+3brBrY');
define('NONCE_SALT',       'v!3X%)W..3rKQu|Aq4*iGC:Ern!$t`RPLK9/(Q(!#-OFh.{x@+%.Jojl0X=Y[tK+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ws2hus_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
