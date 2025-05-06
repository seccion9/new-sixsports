<?php
define( 'WP_CACHE', true );


define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

/** Enable W3 Total Cache */





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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbs12584080' );

/** Database username */
define( 'DB_USER', 'dbu2519535' );

/** Database password */
define( 'DB_PASSWORD', '3123d11DfzA22.3fSD113' );

/** Database hostname */
define( 'DB_HOST', 'db5015283141.hosting-data.io' );

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
define( 'AUTH_KEY',         ',C|ov/g.PCO*{WU6.v&[_%>3)$@s4.-_Gl::Xy:io:1^yi[cZpDum7z^Q$*DW%]s' );
define( 'SECURE_AUTH_KEY',  '`B!}D}df3Fqqj5m2eP%@%4p=YrCD-HJ?!TNM%X?EwI}=iBY4f)QZpQj>9@>!$-@=' );
define( 'LOGGED_IN_KEY',    '7SuQfJ^.W|>?{Q%MKH8Wi5r#Z*N>FYoDc0)8rG%K=TyXTZ,W@Paz*5~D2,2}WW=@' );
define( 'NONCE_KEY',        '}(_}S|8rK5x_s=vX/J sPH.unOE95Da}#v2W-Jo,.T!w[s2WYki]03:OQBbq7D:u' );
define( 'AUTH_SALT',        '!Cx,On6K }RJdIjR-VE0Y6!GYp>xdyW,wRx2Ew=BH*)Dnz,FPJtC)6|.xtuAslhN' );
define( 'SECURE_AUTH_SALT', 'Pd(W&H_>*|3c8D~6;]jLR+_S,LE^~r3VSE<@%ozFu;c~,Nde>c2}a5?$|_!_8=4Y' );
define( 'LOGGED_IN_SALT',   '7wD #G&iJnL<OFJhW2`q[^%uXC-0p.@]w6wn+p~h%Zt&;t09cC!Gz+l)Kn9$)F~~' );
define( 'NONCE_SALT',       '@b!T~aL*bv/-_~M/kUWSb[ .Uo%,1CRq]JoC0T$^b0-);VvuIL-4{wj0Azs%H:2Y' );


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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */


define( 'WP_HOME', 'https://sixsport.es' );
define( 'WP_SITEURL', 'https://sixsport.es' );
define('COOKIE_DOMAIN', $_SERVER['HTTP_HOST'] );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';