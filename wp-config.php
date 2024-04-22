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
define( 'AUTH_KEY',         '%r/Odo=ynni+Hdo>]{Qe|2phO@wxV3*+- LIjbIUC~,T8ET0obS;]]S9A$P3^W`r' );
define( 'SECURE_AUTH_KEY',  '@$CAF$Gi#g;r.[PYESo.J`J2sdUm&I3(FW*c*;`,=+`$7o`&be9HqRV[uD9Hp^E<' );
define( 'LOGGED_IN_KEY',    '|D^qv`Wk:qz.2oYxVvnR&p@g:I!q1Z#LJZ:}R?W:~Xh*l@:pN,G7{#ZD~H 3Vz(=' );
define( 'NONCE_KEY',        '1%V)fnpcRF(vmx6NAQVc4Cy)LaljA: _AK<;vUs0~N pXSwC(G9&@C*x!Og9SlaQ' );
define( 'AUTH_SALT',        'B^ffD]<$8P<_gx?wED#x@A.q|[-Paz^e3FBq8XZG>j/_T`5_bI7#o;dp*Y]liy:F' );
define( 'SECURE_AUTH_SALT', '_fE([ez!~j{5ICvW,IEPj.Z0By=y?XeWN#%*V;ZBG::Ixn(q4yAnFmFna2K`TQ.s' );
define( 'LOGGED_IN_SALT',   'FcsV$d`>W`4ap}V&gL.;5vpnKMo9~Jf}BOoj8C@P@u3DyUehS~Hi)+clofA1%uRe' );
define( 'NONCE_SALT',       'M?:CG5}(:U!?H#O_AP2n*92(C*x9C]#wC[!E1[2=`Kg_=;XwxIS=aRSZ4[/@CTU4' );

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
