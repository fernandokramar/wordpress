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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'son_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'N8HGG=msSF[9F_O]WjrN`a{[;{@&g[r>yJEc!iH04aM]JGv95kf%an<$ YBDMdBZ' );
define( 'SECURE_AUTH_KEY',  'LtT<l{l`huv(6~b!.FslPqG+7a$g5|1BOXM>,B3yrGI^uhusVA@!0*%bkk_1*pCO' );
define( 'LOGGED_IN_KEY',    '$pLCi)Rfq#`Z@n^7W2d]nJNlt:/TMm-i;%YA/LibDc/#bnRGHW3_A,wd5c+3INgE' );
define( 'NONCE_KEY',        '.Sk_DJ{EwDkvWg0gDH8alB XjtPr;@OjB@V-aWqNlo!,k$,1+9Ro2?~AkHh_PawU' );
define( 'AUTH_SALT',        '%dA48tC}}?9WGqlzd``)O44wG*Uedy>PArR<k>aa(DR5yC%>_i:Kyt`BtIfr|x3=' );
define( 'SECURE_AUTH_SALT', 'V$qRR<F1m9i1xyX/Ctl0bCnU<#%f[8Kl- .b/?jM-^pY+-#? q.@{/:B{WQT77F<' );
define( 'LOGGED_IN_SALT',   'NpJe-j1fbJq<<Df;|B!G+h8mV2c:^S{4FCe6PD?8Sg:#;quD+.l!oF`KoEKKQ2=i' );
define( 'NONCE_SALT',       'G.N(A^D=wo_JCL!K,=t{{k}{F%r%O3C8lj147]OkHU/AGN2:zc1<Y^~itDM?@N.A' );

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
define( 'WP_DEBUG', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
