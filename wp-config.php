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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'vanuyen2309' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         ')~ah!sd2?:dDL)XAG$G$yHt74JltT^l$xpFLQ6@~.6`C!H_uc 6ZgWW>k,{&t7Zn' );
define( 'SECURE_AUTH_KEY',  'q6Yv?Dz_c)`9J}Q,#xDP9r1 2plowm,/{`4hc^uV^jDx[vk1dJI6?Bt8v&5~kz6l' );
define( 'LOGGED_IN_KEY',    'ie]>~mHWYng5Wv]+R=?-[^Ps AXsBC:)Nh]*yw&))kxX)n]|P?2q q}$i@I%B@19' );
define( 'NONCE_KEY',        'h1n^g039liAH]`(]y)tz/Q**? !#|/^Dq!ZIi30Gh&^%&egy|~/IM~TS@An2]W|F' );
define( 'AUTH_SALT',        '0PQPM1>04B2. &eU^t9[lbqv#v31I@1?Dra~mYW6LAX)]n05Pq9pmL,m!r?g[:~7' );
define( 'SECURE_AUTH_SALT', 'lyPt(0v(CQ}%V%puC26UziCYc:NG}9z%?%OQ2~.&)8p{E%`>VlYuTwoXA/J&Ob]+' );
define( 'LOGGED_IN_SALT',   't^5K@%{kf|hh_Q {/D%W:V[fnWEnuWq?U2jd`:|Gnvw{q#Gmw3m:?HAB|Hw{BLt4' );
define( 'NONCE_SALT',       'Ig;rVTp}H|Q=m.JV(f }|Pp@qXng##`Hxq4,||$0+EQBI{bxn96C3DF0y]lb[1)g' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
