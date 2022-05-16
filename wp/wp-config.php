<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u957408061_YltJ1' );

/** Database username */
define( 'DB_USER', 'u957408061_b0n4W' );

/** Database password */
define( 'DB_PASSWORD', 'CZv62TUCdk' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '_Gyr7$7Z1gaA%-=o6KEG7gwPo0urKR~L6fa,yEFl$$)DxgMUd9|S-TDHF>xPNI>r' );
define( 'SECURE_AUTH_KEY',   ' rS[clVReu`jvP4</+V;xjY]=>QBPU]dCDZ80ez,9>aLEo2Ye:TA#}(GoGHIH.XP' );
define( 'LOGGED_IN_KEY',     ')JpOv|7)xPA%;d,}7o&+csbV09uN]sB+JsY1QWivK/EL;eVw%M.a83Hp!~_of55x' );
define( 'NONCE_KEY',         'WXu&u7Srrs3o_ fL4&S9Q8$7H68]L~0sdo/&!7*ZWI7|6tKQ1.9bs0`_m2RJrv>@' );
define( 'AUTH_SALT',         'ZW5p)hK%SzB(u]ruNpuqy+`}<,9ZZM<NT%* -nfg2nFM#K1@G&iT$L MnpV8s(>-' );
define( 'SECURE_AUTH_SALT',  '^Wu)9t^a|W$y:R/WJ>i[*=qa1K>fGrL~>}eolZY%M4?t3Z<w`&!{=i,rVTX2z [F' );
define( 'LOGGED_IN_SALT',    'p)#(;SQajaOn=<[+U1PzYzGNko-EX#&!joe`G7ExAhHk-HVOdR_?LW4W+ +].f0n' );
define( 'NONCE_SALT',        'po?2%%P^URS_H3>dGn_.2)bXC?/l;3g!#A/+X3kIf1I6R[le%aRT)fX-b&ICGXgL' );
define( 'WP_CACHE_KEY_SALT', 'd.N%zcM2I%r`5+-p.@@VuRLTOlIf2a6il3L]a393X%Rue?Tg>@N45O3A.(Qo_cPY' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
