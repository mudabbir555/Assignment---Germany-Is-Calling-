<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'assign55' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '+aJr)|:RfEhV(&I{;#Wee #g@l}Tk}hP{4?YlZB;<B*o>J% lF7lh:l8! J>ELB|' );
define( 'SECURE_AUTH_KEY',  'Qh:*Ws:EWO16> E}.c(qc:rQ018jj]%EnEa5L#*8)6^$(qBA{XS8-$?2<dY~Le :' );
define( 'LOGGED_IN_KEY',    'j[0G]$&K+]/-~8 )[a _z+1@vw<hkUg[t8AyFxJs97}&>:x!aLmD_+jVTsu]D+k<' );
define( 'NONCE_KEY',        'h$H fN7v^g>d+a5w).RIvO[8rutdPw~}6)x.aFc,T]&AR>t8MKqzT,eN]h`Ug!e>' );
define( 'AUTH_SALT',        '[)E(zr*,l)P_7+n}oN9HCQq242f7{vvgvQ>#_-wIvBbBO7>~`Cwy:B9|JJL0%(ja' );
define( 'SECURE_AUTH_SALT', 'h%NIW2?J*9#&VvnbJeX|qcdyH?U^M.4G;1joE&0rZ{*{Ph[$P|]Pvt|r6OnTpjKz' );
define( 'LOGGED_IN_SALT',   '#<ffzxC[(#@-dDd_hZMsWy#y[2VLnApIu0#v,Y*Yxmv{i=~r5sv+Lt&$<0&Oa-)[' );
define( 'NONCE_SALT',       'H3p7/};K~px!t4KII$8s532Q:}_/_!M{/dbak :obiVB+ny:U?4QCb&n:{2X%IE[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
