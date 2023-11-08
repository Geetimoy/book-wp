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
define( 'DB_NAME', 'book' );

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
define( 'AUTH_KEY',         'mttPPCf=@6ovtzm(3dQqtI,7+u+<]c0Coo~x.hZ)W^dqBCzxgLu eU c^fSTVYP(' );
define( 'SECURE_AUTH_KEY',  '[I4tjHhe!Q+P%_]To1<zr&q}{l*vL4H/?eqdF,fB_p+eh[LB$_$m.96bG9}I;{>;' );
define( 'LOGGED_IN_KEY',    '0b9P.jHZPv(-vn3f2Ecyx?f-&w!FbQk|m]VvGm:lfVslXk~iJBj=R7QmN(zYnW~[' );
define( 'NONCE_KEY',        '<|LRyCpMl+ALSH9~{#Tj_q6 Y+V{Zuyaon.=/RRWC$e}bAz{Jofy^s-_BQ6%SJ`A' );
define( 'AUTH_SALT',        'g?gH h geKrP_hEO}&n%]V|{9A>N7J%if|-ntmIgij^`E=oBh&KCH=feNo[$N{jo' );
define( 'SECURE_AUTH_SALT', 'p6.5rU;H_Tw:qPH;YFI@wi}O2jp&Bx?8UX*b_,<T3v3[x|{?x}W|7}}j=wg:?E[(' );
define( 'LOGGED_IN_SALT',   'lhC Z{GFWUxY L6,=H=34+im= Hd}4;}Ern(bwXV6d}d>q>a)|Q}tV-.al)/rzT_' );
define( 'NONCE_SALT',       'o6`[.2mI&@JJ4Q`pqMws8J_!$KXtzP|MSTmGU64r.9$-?I4^7EQZW00S6vIM,xK%' );

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
