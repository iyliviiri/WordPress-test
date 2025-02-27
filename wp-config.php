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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         'xb.H`i?g$_yw?tv?Dg}+~v;d6b~5qP0*hcXM`D9*[NDL26Ft>A~?/&L09x/aZFDY' );
define( 'SECURE_AUTH_KEY',  'S!0AugHty8(4c.k8<019794H=!h#m3N9l~MO`cGYO+)8{m`[&Xz,}eV;&N[uQgw6' );
define( 'LOGGED_IN_KEY',    '#FTKSlSQ70k4C<Js <=A-#qpyw%zL5JIMDUDYkE8y?T*<,K8>$tt|Th]4y*C:m]d' );
define( 'NONCE_KEY',        ']ET$@ /]Wtv|:BWSJG5Rpcx>xn$837k8,.{k/tA:By)xJcZoL=Eh8_K%C6.:~ZSu' );
define( 'AUTH_SALT',        'bF(KwA6~nlr]KOn>4 zHT(be~+:{RV.(!WWS/efR{B&df9/)26R6jbf8D]!{W@Bs' );
define( 'SECURE_AUTH_SALT', '+}quiKV??,XxkGY}&I&u~/y|epQnr$.t3t$f3ua~=zc7./8J-r$Lya+}S$D,z(7P' );
define( 'LOGGED_IN_SALT',   '-#1..$7+7U$iux]]Zf,!T&#lB#tvIi?1R/s!eW#hn]${6Ko!kI,!9)&#,ErBPi[|' );
define( 'NONCE_SALT',       'z!Bmjy*ttlng<c7Xy_~,4kMab^[>CcUbbNwwX+%z}:5LmCf*>obgB-zV1DK>v0GJ' );

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
