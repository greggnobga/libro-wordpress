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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'libro' );

/** Database username */
define( 'DB_USER', 'reijo' );

/** Database password */
define( 'DB_PASSWORD', '250MY542' );

/** Database hostname */
define( 'DB_HOST', 'mysqldb' );

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
define( 'AUTH_KEY',         'EVlhxi>;,78NxDjq$/5Xy@o?:tIbG3O,%L1vmMej{PE3oUm450=i|5v(oKz931lj' );
define( 'SECURE_AUTH_KEY',  'Slb/4zD|8BXHtK@SJg.~@38z+O,IaB8}-s7f]9xfhwL[XTK=1J {o~_ E>AY[.Am' );
define( 'LOGGED_IN_KEY',    'cUJ5mvDOzEAg#0h>zhee;6<prh4r-MF!2lfkqXFl`pkGp><GsvUo_~Au5E1v/H~*' );
define( 'NONCE_KEY',        'WR=HiJtH$ ?tMX3O E29&c]Z{D5q|&PEuTKqP&km?LW0<_%0L8Fd!dnyTwVpz<pa' );
define( 'AUTH_SALT',        ':h;WyQuP0Ki5k>R@xjgP=(M&2GVP(nax|2H9SN6$%e%R8EP^3D=:Q)&H~,0U3D0w' );
define( 'SECURE_AUTH_SALT', 'K>F&J8#?uX+%em`W,5iWSF@6%YxlsYtSd$(azl`+F7:oy4$P(;$)yYj*eB*i(Ei@' );
define( 'LOGGED_IN_SALT',   'Azs]Ni*`#A|@Pbs4TxE+](xmLv{=M#>Y>FRjI?C@Hv=_*O]Onujnjbm}v[qMKQs)' );
define( 'NONCE_SALT',       'xIaz5<(.xcIFSAzKOB]|st_IHlJlDf_Q5T0!;W ]eE`$[YhbE$N^|_gJ%va]6m[5' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
