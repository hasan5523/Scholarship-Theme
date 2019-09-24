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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'scholarship' );

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
define( 'AUTH_KEY',         'nF$a1)f`1gXpW6(^kcu$~= 8n0LGX{MUFbN_%om#3g~MCah?DvUnY$KV=l<ZgiW!' );
define( 'SECURE_AUTH_KEY',  '=kb[$&*8^.sCgM,a!U.9jA#l31l!}e4id-)r5iLq4{RH!TnA%IzcegqqF%^ICzs)' );
define( 'LOGGED_IN_KEY',    'd*`iohmfOhAG23lmr,+s1nP<:UVhDb7Y*MX{3-0#20-+tdlZFWfqvDu[ic`;:H~{' );
define( 'NONCE_KEY',        'X SQ9Dh<%Q#qjEoc8Z}E4<06<-4*i}$M_>h@5~p}>Zb|Q-fe{:fDhvwIzxWB1.qG' );
define( 'AUTH_SALT',        'yhvKr%R[XURm@TrSYZAgt&Kv+?-wiNXrlyrLy}>2,UZAC,:~ =t=1ld0g#2 6eg/' );
define( 'SECURE_AUTH_SALT', '/ A}3R*:EbLvyId-{OZ7f2|{*hC/G.>V?<6ymCH=)4@bZR-9pPYokISX&%*Vf#E3' );
define( 'LOGGED_IN_SALT',   'l[NE6N&~Z}Ii!(Z.I]t]4V+Z]85R^}]{KVR8d,r1QMifXQry m1<UrdZ1/e0C8j#' );
define( 'NONCE_SALT',       '!.rzD~k|1W^{J):oQ_]3t1O.-]+BN*=WP;}#4c($uJ@DyP>LMq*FG<nYmpYpNY8:' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
