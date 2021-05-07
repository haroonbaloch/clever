<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/var/www/vhosts/cleverguru.co.uk/httpdocs/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'wp_0n18x' );

/** MySQL database username */
define( 'DB_USER', 'wp_sgyzb' );

/** MySQL database password */
define( 'DB_PASSWORD', 'qRy3pWC75?P%WiWd' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '_kkFTfv06xkbj9pb)R:OTcQM1VjOQh0x8-;Qh]gD9KwjAYq-41G+3ePa-3aoJ50&');
define('SECURE_AUTH_KEY', '&C6rG/Y8%JKS&No&_2S8mVO2*(K5IXm5u-I][~3B4#eO[ym94smI!r9r;#CcsnzH');
define('LOGGED_IN_KEY', ')q977klt-@hJm;0q~Ph3+%(E/uBv/h)/~oae#/7BvXH]0)!8!O!V_#&#fIeAP5iy');
define('NONCE_KEY', '8GEz:Du6cc#0!|IVAE*9g6GKxYb]K[0R%l8HA4z%-96j804VL89#9#ag#fG~eDD;');
define('AUTH_SALT', '7u7q(CP#6L0oHb1~3)0;n47LkF:euC;*~qj(20;(T_2AOw@F5:&Gqx]5bkm@|Xj5');
define('SECURE_AUTH_SALT', '+#36A#hOIadpVr9XP68FLjMeQK0dEt:~2sC3C-_59vXzd+gak24|FA4Hmie8t6[#');
define('LOGGED_IN_SALT', '%sue~7I5iy|:+#)wq3386/4*Y:(gS2B96]pi6!k;ZoqID)to552GM1gGI877djO2');
define('NONCE_SALT', 'lS9|gY5Hh)QKb5j4)06usI1v*pV%8a|#TyU-F%SeE6r|5an5;k5Gtz~9!eBjNe(e');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dPBmpIS_';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
