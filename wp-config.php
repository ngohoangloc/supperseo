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
define( 'AUTH_KEY',         'w=bZBRM3f*719.)qJl5Fg1M0{eT<+oAOmw/@yAu-2O:>B9y49shb@eVRcF2GYdS7' );
define( 'SECURE_AUTH_KEY',  '  ]fu|;e06]8.z]ycU%+/)bWW6kxE8%>]$q5Sx+#G`K.Q;>5_W>%5GNv?@/G]VQb' );
define( 'LOGGED_IN_KEY',    'wY6bld6UKJjO[N9|bnJ#dH-)6{<b=2;oRDLamc>}0K8<wM3ep>eC|nJCj#0>[s]s' );
define( 'NONCE_KEY',        'T;<97.9ig(Dxn |?7kj,sgx7ajmg3c79-U0(fyN5 [HyZN}C8^9OVZqEYc{7Xl`;' );
define( 'AUTH_SALT',        'Pr)%o2Ei3Br0O;M!^*Yoy%+*n,,%<g|{YAiz@@P10W:yQObE>|Rc_#FRx%a6C;bT' );
define( 'SECURE_AUTH_SALT', '@ii-un^E2ILScGz1yfccu]h]Sxl|cn@6){7_0+Kk^=TIVsw=sF|:7`X9J`v[`=]>' );
define( 'LOGGED_IN_SALT',   'FBclF_o~<[Tt<5lN$Z}NT:&01l^A981C}ofduCL4o5L1T(zz|[,CL;~NFhl%+@Bo' );
define( 'NONCE_SALT',       'C=f/a4v}T+8E?r=]3@o- <OO]rL++y=U[k/GJ#3ceLjIV_]R/.9aNoVSA;p)>IvI' );

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
