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
define( 'DB_NAME', 'security' );

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
define( 'AUTH_KEY',         'nRheuw:-NN()V+z59D8u9:W#hDiD m`A < ?Sp:edIiY~0)@2i;eyuP7oyb<=krh' );
define( 'SECURE_AUTH_KEY',  '^k XJ$x=}W6GI7,nr*-46QWKPwX%[|;o(!=fLlr!{ )FqWU+<wksTN~. No>/A0?' );
define( 'LOGGED_IN_KEY',    'jF5$Q{7`|XeB63YZKAFGV8zd]`~u*5+)seX_y@F~}ff1^.K1!f3Ak0>9~2h}%wGa' );
define( 'NONCE_KEY',        '+HLuMr}_v)+|H2K@;(2XA|nbuw]5%b4&Bo[sWzC2ZQv{olCu|]#u&D29x)W{BGrZ' );
define( 'AUTH_SALT',        'sT/fULX_[n&(REXGWyI?JN.z4xF{exHS,S(%FE$Vi6P]PsJ~lVk=_7.N`j1dB][~' );
define( 'SECURE_AUTH_SALT', '5OrnS<A]FE}O}so1)xf|$J=pts$G}X=EsT22jFO?aOT,slJV251nEqV[E0kK6>Bs' );
define( 'LOGGED_IN_SALT',   ']MD(&hK3-xUnsfi}xT+!|l;G+cWa)E7$/}oJj{/$(1z]m>Ge6CFDE$qtzDD8*0a-' );
define( 'NONCE_SALT',       '|P/ia2Av&leA`1(tNnN&W@;wM72Ct%SQB#DOVq.g6*Idr5sA;|BVEY+o#1-sSZ??' );

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
