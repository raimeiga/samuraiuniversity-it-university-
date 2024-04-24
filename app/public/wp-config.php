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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'Zb,U=w#cYqw=mKJvQ?-n@VmF$!zfC&Ddq[J&5e(-r3j;0RvZFIWjQd84MPRU8(yq' );
define( 'SECURE_AUTH_KEY',   '& XZXeP#PI{Q/wF!RP!-`B>U8(DxGp|Ow21DQ~]e*-sMFQX8/OUVMJRaX|gw3#EQ' );
define( 'LOGGED_IN_KEY',     'C1J:6@=|8$S%}5J/;%=yEp-|fuNzA9;yLBZV6.5Ah8y]a^9NZ1Lq1fL9>e^?FYD_' );
define( 'NONCE_KEY',         '6$$Z5ksb4O)Q:AZ+XXn3wgo#c;2Vqt#m:]^P`]M:F9-fo4mG,.drccK2G{`M?x]!' );
define( 'AUTH_SALT',         'j2e[{v}9$AJ*6xx_jGFOz%Bmh:CXgf)|y/l)2S&yS<Q.2qoB$9nx)+bE|n(%`cW0' );
define( 'SECURE_AUTH_SALT',  '(0+M5W<$%j.|#)HQeZzl#.r0x+/,T66qfu@+8R.CV:GOPZl.L`JDgzpc17uc|/>0' );
define( 'LOGGED_IN_SALT',    'Fw|3|(NgB(.7@ufN~})k- L@+aP{LYtzEUmm-|.duD1WP1oFw0wgRU}VBM^ic7q[' );
define( 'NONCE_SALT',        'm.Mk8#lKyNXxa|ZCSJl[[+jl!A}@fpok>84~TO7&kJ!@bYY^j!<]2=6VG@ud.H}f' );
define( 'WP_CACHE_KEY_SALT', '}x)|F_M-gQF]p*P@*)3xKDd}kz/fEe.;X$L<f*og@<Y.`RXf)PPZ&2HqoG=RDW0u' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
