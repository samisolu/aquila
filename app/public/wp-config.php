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
define( 'AUTH_KEY',          'lXr}VBP|_D5H>.@4|hw*:FQf$uXQ$;rQ4`6*$J8up<^e9rNlghx^w/c%<h^_W%hx' );
define( 'SECURE_AUTH_KEY',   'xDLoR)=25FH.y83~o<%vl/K*am7y]zaVX1[x+|7bE<XML$y.8z;$qs:LnLP_`Le+' );
define( 'LOGGED_IN_KEY',     '/hu0n)&xKKG_ow(s4>B7%L.*S&<gd*b-jvvxd;-6!G3w{@VWiUhTW }O}[Ua*<GL' );
define( 'NONCE_KEY',         '@ch<kp1{|_ Mm`(/)& ~^JS?s ZHc}4?Fl<gtI$.d eFW]5Q,@+W5uUZGXGY3MsL' );
define( 'AUTH_SALT',         '})ckaoeKblx-oDi_t7qcNIuh@!cx=k==[$#t-oEZQ#5.jhF|$uCQPc+3kVT.V=^3' );
define( 'SECURE_AUTH_SALT',  '-|<v1-;Lqa`*/ _OP>5!WC l&`NTCHr6)(MdfL9^M:$m/Ry}>}}uQ5zt6jBV=/xo' );
define( 'LOGGED_IN_SALT',    '5jlU-`LQk~&K<;ov6yl!Q:~Y~{:HC:}$_K_]W+a-0y2m.?^w$^iGB/|-~~:DC=7x' );
define( 'NONCE_SALT',        '9&0Ut!Qig<a3&dmV01]R:Vb4C3UMtB3Xd9)w+*.yI?!KY)8.r/9a[_7?!I]I}@,]' );
define( 'WP_CACHE_KEY_SALT', 'oX!#ZXv9eEpjI:MT=SbLqqm;NV_QnLVU L<.wB8G-#+T?<Us_1ev%~0xP*6/6-#<' );


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
	define( 'WP_DEBUG', true );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
