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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'y)$UIB5qy1L#H3eCFT?C98RHQB$|OUPv2)-@vLBNCH`6R~]/pc{}p02pCzGp:2HJ' );
define( 'SECURE_AUTH_KEY',   'u%>JrVf=o:Nz5j}b-cuzQN7-Vv *.PLX|`2x?le]KvR&u^}R)?ks{MNZ76w99&T_' );
define( 'LOGGED_IN_KEY',     'qPs(<Vtfc_QIByE?[gu>loRf(pHKq eL }t~gN.&8>pw@cy-C$Wq)X^LO;&&MpcX' );
define( 'NONCE_KEY',         '0v?_0|oJk^2u4tk#[/I_}d=~]9:ptU[nZ.Bx.{x1dx|DZ.n#1@)&z9~-8nNkUD.l' );
define( 'AUTH_SALT',         '/4N]IH)Kkvwu%TP=@JlK#CbvHqCDQX>?fvB}o37Gd;q_Sm, g.Yg~!gpVhn+,P}j' );
define( 'SECURE_AUTH_SALT',  '?~7pvd%fF|n7os^],0Ac &g(%r:wOof``7PT4m<kP-i/p^S&i7N7g<OK^nQ9amU^' );
define( 'LOGGED_IN_SALT',    '-1v<Y-$n<;O*2^.P6Vag)[jvk34[<YdjV_]znL*?)p)San~r{;8qs!GQGW{&,Ac;' );
define( 'NONCE_SALT',        'b3<@~P@25a FX=.zvPP>W3I|pCcT-t2pz]Cgg`er&1[gs){Ox{s)HrY#?%fZ<he4' );
define( 'WP_CACHE_KEY_SALT', 'TDb,.gFcz0Th~.%+CtDJ/(I9[1ea`5E)MRI60FA(/}yw.PLH<eqb=DP1>rgFeS{%' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
