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
define( 'DB_NAME', 'db_firstproject' );

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
define( 'AUTH_KEY',         'PchL{8?0]Wd&/Td,gwykr)8<1${,ITp?T<W,_L}h]3r:/.twb%,8/^nPN_kM=dt ' );
define( 'SECURE_AUTH_KEY',  '_qr_F| (vs|k;Iy!oP#feV1:g;|Xx=90GTrpEl-ZQay8LHO/.W6x{RB&+[&i[~3Y' );
define( 'LOGGED_IN_KEY',    'SGYKY[u+Ob.mSMlR59g~2`90~.J ]r.am/fnkQ!EI5sbevX64]5:G}1$-x=3N1)A' );
define( 'NONCE_KEY',        '&^L}=r#2wB]SU`Y@jPIZ2j-N*t041jvI45>6H6>F=J[eykS :}LJM|CgNqV6U0f}' );
define( 'AUTH_SALT',        'd[BdLkyNWp2j2Z-Z_so6}l!/7yJ&9L> +`bVY$6!mDwdUB<}b`8CFbJMspWTA,u8' );
define( 'SECURE_AUTH_SALT', '* *+q=EUt{N9S|L1#7d}<~rO=u,9Mn;M}.Un36_hfhr_L4vZ2L~r:.I_PZ!AF-|b' );
define( 'LOGGED_IN_SALT',   'vn,^EJKli?`&e9b,|nmt;bB-qN`MI=NDrHPcv:`_L1@+^V.{*zlh;dOQ)v8AcT_b' );
define( 'NONCE_SALT',       'LgeC2guBt..-~r]yUeD b2Jn?9hHDQcC&Rpf0bk6ovLS;?`IoNL_7]Z28B9!U_Y1' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
