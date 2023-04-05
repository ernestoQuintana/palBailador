<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u896646628_HkPxI' );

/** Database username */
define( 'DB_USER', 'u896646628_WL01g' );

/** Database password */
define( 'DB_PASSWORD', 'NtEy9lM5W7' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '%-zEW3qc.I(JXGa, ]|}WrD=EnI_Vax~i-%7tP]j=?d|dBiNy5`R!?@3/H1&R<]2' );
define( 'SECURE_AUTH_KEY',   'sIy;`+;T}I48~Kp3*&+OAxf2e{7Isi,[WOFQs3_q/6S_#f_*ei3?z;5djHs9hMo1' );
define( 'LOGGED_IN_KEY',     'N2^heXp#clSE!tKW|iw=5?Z{n}%(h-(Q~XkA?^3-r^,zkq;nBaB#=nw=`wW^EKcN' );
define( 'NONCE_KEY',         'nXR<FE$CywROM$7HB+ayB)B~{.?@34<y2ee[n-c{8SRX:<[h/RKl/![:;Vr0} ab' );
define( 'AUTH_SALT',         'gtkG_-EGmy/qQ$ljZmL2%}^|U>9mJ~&i)vX6)Z#mF(gaeM0HHJ$k,Gz7C,Jx?jAG' );
define( 'SECURE_AUTH_SALT',  'Wj`HAIC[-t&I:b@CL>6*;dBbf6qj8v9eoSl<,fO98zLN;=|RERr6!LmsB9VI7 |,' );
define( 'LOGGED_IN_SALT',    '}FHT;c*^=aLG2MCdfGbZ#%vDK0Gwl_bN-,,P}%<B^_olqo</D2^-q-xTAUmTB>wO' );
define( 'NONCE_SALT',        'OY<9BUwxR/w tbZ&7asLz&|rt?OuCfCx;~|>B[n+[?KHn+dzH7+)A8#s$Y]F?UP%' );
define( 'WP_CACHE_KEY_SALT', 'xU-g=~MExtMs4z`>K]jD~8T(<+n{e*otn?TfZtleGAq)Mbo!4x TpV]9R6w(s>3G' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
