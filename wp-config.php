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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'equals' );

/** Database username */
define( 'DB_USER', 'ridwan' );

/** Database password */
define( 'DB_PASSWORD', 'toor351987' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'A0 yl{^PkM7hk2B/!Tb 5e{6tr3`1tHFem|^_=WMq+hF~zk+eS3@_YlwQGSA-vX<' );
define( 'SECURE_AUTH_KEY',  ')CBpJ]fdE;Mn4loZhv1vLzZ;dRj&bw7Jh^bzZ&o %uVs[B;a|S7DZ$$=M AIRK!Y' );
define( 'LOGGED_IN_KEY',    'STe-]r4[@`C&=JTsOdK=z5INL!LT3R9.]#*h18KF3u8j50[NpxAiU5637:]2a#i%' );
define( 'NONCE_KEY',        '{b%N6sPjze?}sQ!aQ%/gdX$ialG}v=YzUE{fh=_.S#}^jDK}%jNXa`#<5AnUjzJK' );
define( 'AUTH_SALT',        '& u`Rnkbu8T}w`-A*SpW#tD9= !8lwq6W&(U6%uO.Z(dyUskh7yK=TeOvFk+,|Qa' );
define( 'SECURE_AUTH_SALT', '{X02H&SZ~wZ]xg/a,+zk%]d()j`Il;0t;d@(%iTIcB,O9#CNC?n`@ti./[O> !>e' );
define( 'LOGGED_IN_SALT',   'rBPO];jj_gEm;Mc3`OBFEdAUb5f$h<)NHqy I*^htw|sf2P?Bv5cS#G~tjz+iEA,' );
define( 'NONCE_SALT',       '.I%+>?|zRuWBeuOSLH2afM_QF#HO=pG~eM`JE03./;g*ho$mPIlnsiLKGtj!S`*$' );

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
