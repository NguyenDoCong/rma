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
define( 'DB_NAME', 'rma' );

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
define( 'AUTH_KEY',         ';OM(bh.[X[PB0Fiw%FQC{6V;T1Z;|GY;I6>Yb0ZQu6CG:CZMy4u=%|5_>`RkZr^q' );
define( 'SECURE_AUTH_KEY',  'XGNu2T2eGOGe-zT{r8OyHZg_zD.B{FuG*$5#k!.&D/8>V)nRqZd.n0in^#Ci[*o&' );
define( 'LOGGED_IN_KEY',    '^V5bI6=6BF7}80X2y]U1L[~^aJ|wE:8^&/PIWh-?1^o68GX?l/?,s31(#P)~&/M3' );
define( 'NONCE_KEY',        'Gir;P@^sm/FDJEqqPffQR:J?m}0cG78lk_HbCJ8xFa_,X|?F+s2_5]6#7!4j$oIW' );
define( 'AUTH_SALT',        '|{!fjG8,,t/N2]LV;Y_8[<Zh4gNoDWA.^tWpEogG}@B+<rLP5A6jKiK;nQS;SZN>' );
define( 'SECURE_AUTH_SALT', '%P]z@WNH5L~QmJAmp]N#|gILhyF lyu*LF.y2=MuU:gh<In3M^MYBuMG^1/!3yyi' );
define( 'LOGGED_IN_SALT',   'c027c9m4Qt){nmo6|~#f@;[7sgYtq67IX[o%-DF(7{:j%/F(+Y0hH<3r{C$s!-,7' );
define( 'NONCE_SALT',       '-g+N;k[04^ `iZ*g`Ni5c&1zih8J21$|:m4rGz!o>T#6S18 27Y*w8+h8ajz[-TV' );

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
