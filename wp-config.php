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
define( 'DB_NAME', 'fitness_site' );

/** Database username */
define( 'DB_USER', 'spiderfitness' );

/** Database password */
define( 'DB_PASSWORD', 'fitness123' );

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
define( 'AUTH_KEY',         'uTFmXR7^6TW@sTHS.Ab530](%*iNg[7XDu&|4jx&_{~ Hkdj]2>&^ln6#D>O+LED' );
define( 'SECURE_AUTH_KEY',  'n%#tsZ[5d1q!M45.d:5HUqmeTDr x^{E7E*e-4!z^B#[|cL_CteuikTKzGA->7TJ' );
define( 'LOGGED_IN_KEY',    'X*=9=[*!`rk(4}(H{8V`n<L#2&{uUP^m/-OV$Sr2JV)7R<nZ~5O4&w}v{Us@k~xv' );
define( 'NONCE_KEY',        '# <=1;6fi;q>^pw/Bv$|c<zyV]^1PB6[Rh6pdx~X46,gh2tg[(cG$D)UH3~9RClZ' );
define( 'AUTH_SALT',        'I~~|m]%yqNzx4dxqw`J,d+?u).M=!x7{{HhzMc<x^JOW&Aclx^-@4~4F7euWlXAY' );
define( 'SECURE_AUTH_SALT', 'uAj-zi*ETL#A&%A~$CCi.EvLcqu~(oXjWGCCYiy:Cf{p5PBV%;,oX?Dfz@k[myG6' );
define( 'LOGGED_IN_SALT',   '3U0x}r$s7N7a&:kV-bx<U`5;v!*??=x&i]GSUsYgkvidUTEmlxM|`]ShSyH@r~BA' );
define( 'NONCE_SALT',       '||f]X~$dk_Xt],qSt3}@v]X[S7u@:pYFJFJ>vp3r2F?vY@DMfn|ZK2&(=m]1An$g' );

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
