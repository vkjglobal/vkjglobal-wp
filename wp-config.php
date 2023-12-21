<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vkjglobal_vkjglobal' );

/** MySQL database username */
define( 'DB_USER', 'vkjglobal_vkjglobal' );

/** MySQL database password */
define( 'DB_PASSWORD', 'vkjglobal@123' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'O*629DzcG-o@u|_;AgP6y3W{YpvbO;!uY$yf6`,.0,1N}B#6nZ!~b)r8qTeol6mm' );
define( 'SECURE_AUTH_KEY',  '@/s>>3C*Dtiqs&0fgX;[xV3#}Q`me4EK%EaCgl><,+t3vmFjYU[K)eiJp>t}sxX}' );
define( 'LOGGED_IN_KEY',    '!~Zne#l_MMK*CO8&!mTGrQ&Y[)!TFw,]2fI=@NeD}_FrsC1a>@4$Zi^k>+#zMp]E' );
define( 'NONCE_KEY',        '{opefR*5*Y40,a-7S^0~<cu1d@D_.}KUn&y5EKOVfm-kBPX0{%#^J(#p~b!u!!=d' );
define( 'AUTH_SALT',        'GyR/z|^z<;y_lzH^sh%<*Oo{[b DajGJ<Oujym4`C>T47uKw;^,|@7|_AL#*HTW~' );
define( 'SECURE_AUTH_SALT', ':44 ag1^i|Mi#M#Bb)8EdLn0-bp$W/f3{*QtFgUoXwo@lQY@jWKx*:AFI]ApOB>{' );
define( 'LOGGED_IN_SALT',   't[%@9Vn>Ck+isu!+O`0Bg9$8ybyrwL^:*Jc$b_BUx%:]HX)P^U$eJhC%or+%=EAA' );
define( 'NONCE_SALT',       ':Q$1N9@udbHp+;%gO[9wi18h_G5!{5*)ZZ-h*[uul?(  FwC?r-3DrZ~r5D> eUd' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_vkjglobal';

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
