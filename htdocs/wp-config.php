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
define('WP_ALLOW_REPAIR', true);

// ** MySQL settings - You can get this info from your web host ** //

// Use these settings on the local server
if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {
  include( dirname( __FILE__ ) . '/wp-config-local.php' );
  
// Otherwise use the below settings (on live server)
} else {
    define('DB_NAME', 'i');
    define('DB_USER', 'dont');
    define('DB_PASSWORD', 'know');
    define('DB_HOST', 'yet!');
    
    // Overwrites the database to save keep edeting the DB
    define('WP_HOME','');
    define('WP_SITEURL','');
  
    /**
    * For developers: WordPress debugging mode.
    *
    * Change this to true to enable the display of notices during development.
    * It is strongly recommended that plugin and theme developers use WP_DEBUG
    * in their development environments.
    */
   define('WP_DEBUG', false);
}

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
define('AUTH_KEY',         'N[j|+liV-n@O{lu++/:f;+*|h<}7%6`W%%:`s![YUpc+MJ7GN^-G{cp_68=rY|3&');
define('SECURE_AUTH_KEY',  'CJhd/|DyQ^Knc,Pt0,GiLuK yk|n5*w -U-:)$rat:jEgjl*S^nW+1<DU3s:x3K:');
define('LOGGED_IN_KEY',    '{EbZI-GjMI+,#zhj=D_h6Qi_DE+cnkz}3@^7I^=Wo!{kMF39#3On0h<]jYD2nyY&');
define('NONCE_KEY',        '0+z:^ -RjfaF?#e/[|gq7ump<o+Qm<A7f6|0T{}cm|UQ.4M={;Tq?E5|t{STxU-M');
define('AUTH_SALT',        '>j1IygaM2+,&&$hXDn[rObnpmv?rqMy4Hy)m8pb3~:%.bDjpjX/6buG.Ak:n`8ZA');
define('SECURE_AUTH_SALT', 'F&~(Ma5EuC{=?E|AU|!!E%xQR)}]WZX)|Lq?PTuI&<V|46{:T5!uz{B6t_,li_5y');
define('LOGGED_IN_SALT',   'V8@%zn]}=Y0~1CxPbl`vIEMl);@wd|JX/?w~!8FAcN*}~WJ=vY9n@-*M:/I0>nhh');
define('NONCE_SALT',       'W:&T,3Oj&j|<S.&f-,{v7/hTiv=hI+SIks6x8>WB6}c^!s]oQe_+$e3m$n0u,y*g');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
