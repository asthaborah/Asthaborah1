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
define( 'DB_NAME', 'Asthaborah1' );

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
define( 'AUTH_KEY',         '>hKf/A-I._}<<5=tr*[8YqyBS ^c[UChA6E_H:#>q ?6rL_.pT*9].f3(wP]m/B[' );
define( 'SECURE_AUTH_KEY',  'GP!z)6[-A5]ylLTiUHD{y%c,>gE[qsZuO:Rs86K(hDg5P;:z|uf{raf1nBHbVaR_' );
define( 'LOGGED_IN_KEY',    'xKwk.5`p/}KQo<LKd/M nqJh9?R)aiH,<iN6[2gil4Gzo)6HV.V6h6jZ5^]d+i.3' );
define( 'NONCE_KEY',        '@z&y@ty^C~:IPr3zX]P5qnjgs]cg?d2uv9![wsI1{e`x)|/07Fol52yw6C0ayF#]' );
define( 'AUTH_SALT',        'MXb$(<!yJGY)4t-n2v|iod2`@:u&0fnr8*0_&kQa)oHij,H%!a;{4o&Z1lK!syJ,' );
define( 'SECURE_AUTH_SALT', 'wUk{Iy5%~SlwSt7;a`.+nf2g8cY89_LlhCO1@B:%*B#)mTY19F(vigQ,5SJG*|AQ' );
define( 'LOGGED_IN_SALT',   'zA=Au7oKT[2+UOk;Z4PwrMsew}3PFq<gib-~^l2:[1&BeovK,T#JaaVKdEhizF=!' );
define( 'NONCE_SALT',       '?bzje`IcTe(mv_:R1K%0[F^mC :*HTZyrFsZ57j$J^!H5yTXwtZ/cR{~z@g2j_K(' );

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
