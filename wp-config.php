<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'wp_theme_devlopment' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'a*FOY#G`am1A%|Wt`lUulVD(}GR%Yy(3xtM0Bwt$b9m{pA|@c.;z`T[J_M45m+D4' );
define( 'SECURE_AUTH_KEY',  'w><4IY6iglEi[WUh.YXn}lJkHjf5Mb8HjZO`jc!OAcv%@lg]w9qzTy_QT2o2(OnH' );
define( 'LOGGED_IN_KEY',    'k1 QP.+[_L1LlQ^ gl,twa7s3N~.^y>,TX9Ct5YNeBxm%|@mb]z3*B:|vxY{3^Q&' );
define( 'NONCE_KEY',        'Oe66!aMN-}xwv3gQcGWq/_1FpntsVlM^WuY-ta&>@^`oM&o#i+@#n]xt]]<`=FBZ' );
define( 'AUTH_SALT',        '/@J9]Gan$c^f<AeWA)516wbz4:f:(&DX{TuDF7HVx1=lB-Y#>z2:<MOx~2o(*3y ' );
define( 'SECURE_AUTH_SALT', 'e5wxW$Tn 57^_WZ%Irddyy?+X?a8)pM[HE;{jo<[6G/KW4[Y?v4P=BMpjVY0.bt.' );
define( 'LOGGED_IN_SALT',   '_LOxq<:bnxN6Guk1A$s8WM9#Fg! !_u@pcT[HvoK]+e1pj)a97Ub(0Xy?BVrRGXr' );
define( 'NONCE_SALT',       '*I1YnHN)3#e2fh`L-#YY~pV.]KdB86z(IxG=?TT?Y) lgrzj_,#|mZ&OCEI%t#-:' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
