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
define( 'DB_NAME', 'ODC_web' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'MYSQLkeita8264$' );

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
define( 'AUTH_KEY',         'EU}jKY]|w@9i#_@6[hp!`R#c#FFz>}EnzE(Ku_5&s|)Md`CS~8>[L3P,QRt9g:n.' );
define( 'SECURE_AUTH_KEY',  'SjMKT2C;Dh7]u6vzR@BVqwW&My[]*6~C}ac7lWb[k3-zul=$$5aKJUWPaPEZ-R1 ' );
define( 'LOGGED_IN_KEY',    'zWEF^`8&Pyz}Nl*)>C0OE@0C,jPax,Bn/T,bV=UFC3,0i;gP+uuu$Pp4+UnN#c(K' );
define( 'NONCE_KEY',        '%Ut.IYEZv*A(<.y4zWTca~Paia1HtC=:; )mM)X8HU)mIpn1M|./T)9/B9,CQC7q' );
define( 'AUTH_SALT',        's5uR$Ttr%hmQq@mMzg1JaCQdq/hv^r8$HXHHGs`p015EImOuvB(lFOTlm[PO2snT' );
define( 'SECURE_AUTH_SALT', '9e%nu+M=Vb!^4ykAZKn}S*TB)B(|31]s&p6FT>N^9$[wl`iRvJa!kLp;B^viz%DX' );
define( 'LOGGED_IN_SALT',   'AHSY1fI&hLuZNb{h< 7@[*{)33%@-MUrqj)Now <Pp8g%u&`mi!+l7nFh[RiVtK0' );
define( 'NONCE_SALT',       '/V8&X!3lakk<-7@QtF&a!tz)Et=;D??l0vU=qjz?|8[a9Sy Z1d8=4ux0e;x?:}_' );

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
