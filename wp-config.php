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
define( 'DB_NAME', 'journey' );

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
define( 'AUTH_KEY',         '.8#mel8bLc5IBVf^%@LOrat0%V2PP2}4`|xv^mW~r07x4PJ*G>(;pJoYv-%fM[g ' );
define( 'SECURE_AUTH_KEY',  '6cIXgq5*s?K5CUvOY zIDGv#H>=BpLJ%4BC!{Pfa#rj#$xl:.+wVjC)`EC]lF)&p' );
define( 'LOGGED_IN_KEY',    '?X=Fu?_rR *+3/nFpiH XbM1V{j9H)[R0h^uw$?!ybcVqzvKg/$ Q1n!tQ8)aH< ' );
define( 'NONCE_KEY',        ':B{v1g}^n$(+*f5m1N]Po-b;sg3kPLPIck*qe8[_&6@>y<}d%Fx)0h-/3mk~-WPT' );
define( 'AUTH_SALT',        'WTDPywbQ9x&p~v:-yZkkd=wiZV.>pH7Z?Rm30#3Q1f;51,/Ww]qkSu.%3I}Vu3wY' );
define( 'SECURE_AUTH_SALT', 'AkD7*WBtctlL3H&#*HH+9kV-8BMNLw_qkNZ+:gZZLb|7985w:5%;t+%q/-Rmwk_$' );
define( 'LOGGED_IN_SALT',   'q91.^<gi8h9~CzZwYr{%=J$7g27s:`!L`]d+x{inYk]{@:[9D=fP!R,;_mf*;qGh' );
define( 'NONCE_SALT',       'a^c+l;ZUM5Jwk+s@D.*=Lf8M$;P_O$3/d,G?$X-oA_&Mz9BW!4LQ:e2{:zT$NSh#' );

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
$table_prefix = 'jo_';

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

@ini_set( 'upload_max_filesize' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
