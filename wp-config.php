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
define( 'DB_NAME', 'new-project-yso' );

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
define( 'AUTH_KEY',         ' |BB~ySDuTF@r}i,gyT=xos:Q|hq|<u7!`%7U&XOeJ&i+]wURQ(C1l#4L/2onN8m' );
define( 'SECURE_AUTH_KEY',  '`XSPKed^>E+<!2 oPB9F4VM~Y77A;wwF<^@Cq@5`|{.Dd=z 7R-Wjz6{9!IahFt2' );
define( 'LOGGED_IN_KEY',    'T<Cn)mmO[)|{x,8J#.v/e+d[QKGePkzK[-3`Kg#^),1SJs-~W!LWSCwo!<{XCTaa' );
define( 'NONCE_KEY',        ' qWvWApi-5Z|V7f;7/GN2d6[agoGg)-{M4Xk^Og@5$@p3kYJT{W*.{M1^<j!YlH4' );
define( 'AUTH_SALT',        '!vMGlF4RoC-Pg,e!w50xOQB=_|d3%67Q%h?WR:uZb{(a3YbA#k K;0n,zghOr%Bz' );
define( 'SECURE_AUTH_SALT', 'P5upVTw31n+Jl7mg8|%#@H/Gwn_3Jc1w;Th3POEX  :FWX!Zg2)36*=IRM9(&[2)' );
define( 'LOGGED_IN_SALT',   'M&YH*)[uHdWkXNH7ZWZjm/qSLC|]R#bxix@:(`pr07Jkw!ZIg QOx]#Za]xAupIN' );
define( 'NONCE_SALT',       '3C([#l2A.pj/|ew0+}1m7NxqGzUfE`go8pifZ,Wcc}p,6>*#~c}Oh@)hJ(d#8@@V' );

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
