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
define( 'DB_NAME', 'wordpress-intro' );

/** Database username */
define( 'DB_USER', 'mustafa' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'gqg|fz_ H)XVi~$c<`9ZxF46~~DO$=.79%w!UAD9eV>Ie5BC)!Q8~ OomFFEAQLf' );
define( 'SECURE_AUTH_KEY',  'cZf#][B7e6+}H7(cn)=p(6(-fEgIL.gLJxszh=GpX|tf)Le<NI.?%V/X^vVNu?Cf' );
define( 'LOGGED_IN_KEY',    'a1<s^Z7iW?zh9vsw`;&IV+H~u+&*!Vz%(~$Nr))/Aa0V0H },eHD;>/!5*|rPLrs' );
define( 'NONCE_KEY',        '0TR*+K}<(t1={zy9{#a2+yKYHS]ixAt|Zd#Id1Wq84%]K[L3UmIP|L{D,Fpt9#s-' );
define( 'AUTH_SALT',        ',5^F_}iz(7SL?P2w[Z[=,*-]<p0*BV<dO[V>YRgTnPk{;fN8q><}/p;cuIk1T}O(' );
define( 'SECURE_AUTH_SALT', 'r&)=5)||G<;8sRtaH(-!OBYj8g4xUca)&,A3>dE!?C#k4dQu.3L6nVx<v+xE9<]Z' );
define( 'LOGGED_IN_SALT',   '>o`.1,F-u:H}P@:E:W8+s}9JH35`#l;q`s1FIUWJ=z:EY-kD:-ZNs$4X|a8=YRZ.' );
define( 'NONCE_SALT',       'zwZ=?OnSdlD+Vrz;h#TNqKhEPgE#fu;kW1V6Q[vGB+!74-yJpef<W^?S=$d@x4>h' );

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
