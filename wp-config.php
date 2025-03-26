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
define( 'DB_NAME', 'mypersonal' );

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
define( 'AUTH_KEY',         'la6wB=nX{|2LJAuNvA*S,XEzh}OyWB$hnaJSIf=b428hEB;SFIP|P<eK-uEtN.+j' );
define( 'SECURE_AUTH_KEY',  ',lPQWcR$##U1%d]{vp}[&C7l5VJQKW`{OgG#o #gT ^4),f7e.}:V^N}*94Od}dm' );
define( 'LOGGED_IN_KEY',    'OM0?r]nr4hD|D8S.*+dmjfp~D/{U535V}Eku^G])EhEEX)B#iGz#OJYP98R[fm?A' );
define( 'NONCE_KEY',        ',Ehc _O#mqu6|Um(B-g0ZH`[|Rk R+ruvKPi3=R5d`9tO02wz-4 +$ cKt]-}Q$)' );
define( 'AUTH_SALT',        'lxh|i I-@yBZ6%_e<sO:7SK);CZB^6bE4:<[AqZwqu)4jWl@DuMMBO(GYo1/1?NI' );
define( 'SECURE_AUTH_SALT', 'Ymh_2V|)i(|oJe|+z/l~^TiOUIdx$w,w%Q]mb_`?)(iZ31AYq~jT)OfyvfW+OB3l' );
define( 'LOGGED_IN_SALT',   'j.VXT5m0f,1l6pJ%<C^>(7<=7]s2zai((4gAIuN@<%|ZK:UTuskT)zJmrK|mq}__' );
define( 'NONCE_SALT',       'pk8 4<S>c0k;NT[C)h5Cw,8;3w0q*W%XQ#YA_P5RQZ6hM,y,Ah:+,.{jJ$rtK&8^' );

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
