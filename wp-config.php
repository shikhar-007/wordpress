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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress_password' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '(X7nD-@J#[rlvYkP!!CKWH^L@#g4qh5>5j~A9(6+wM|LwCp[GdCjMWO4_(N4M4s*' );
define( 'SECURE_AUTH_KEY',  '!]W13%SU-`OZ#WDz%{rDR66DO3T{dTu(<-3!CmdL1$`ZMOj`iRUY{fuwMz2Pcw8$' );
define( 'LOGGED_IN_KEY',    ' 5w{Z4ie y)0<mKr lmACuU4DThU9hm-BTH[&5 YmSOw6dh][za#s<7d_ue=KQXA' );
define( 'NONCE_KEY',        'Sv]aJy]@fQa2N!.gyJ l##?&tEr_Vz_KfU0yLSgzbGd{e_;/;N~1K%|&M@r`jT;]' );
define( 'AUTH_SALT',        '}O/VT}O4aZ,V$=%]?O@=AS``.q&lopljXkaY1/)1T2uRdBwov9UkS3 bA%#u:2*D' );
define( 'SECURE_AUTH_SALT', 'u,{L0aw%we{B:7UgA(C7kfdy!{8~fv-{r8cr-5=I!P#fp,7:VH4Y)C]66(<19iBw' );
define( 'LOGGED_IN_SALT',   'bzX[%KpfdcgYaaOLZ*Zx6F`*JGbim}$|DJIhZL0UB?]Q1OI9I|k=nT]XB9k[7i(<' );
define( 'NONCE_SALT',       'AKilcO7qW`asI|?,vXVGJUE,53ZZWSsgCJ/>6A%E|z*gTetB}k-9nM# /spCfx&w' );

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
$table_prefix = 'wp_accounts';

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

