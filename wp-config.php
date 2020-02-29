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
define( 'DB_NAME', 'Sam' );

/** MySQL database username */
define( 'DB_USER', 'Sam' );

/** MySQL database password */
define( 'DB_PASSWORD', 'sam123' );

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
define( 'AUTH_KEY',         'GPKCVv0k`&K~Dy]S=.ws?`xN1wwt<s4 <LZFO+!~xkt w>|Sf}`*s/5!/|Jq-Tsv' );
define( 'SECURE_AUTH_KEY',  ')et*Ge*<KAK.$PQcyNP$$-(3$4~J8Jp6-b-;Jo1wR4|0@e29ml7B(;j;zS1V5I:?' );
define( 'LOGGED_IN_KEY',    'zeE@EufJFQ,RcU9D|`)n4~dNyatCSElAv>fT:V-Xld=|r;3#=|i?n&8HfoO+[,jV' );
define( 'NONCE_KEY',        '!q=#]1-^p$8Ge*PRiWf0XU1EgeP<EjyyCQqX;3d3pLk-<U8ZD>-ioQZuZov.B.g;' );
define( 'AUTH_SALT',        'kfLcl#qtk6&Ldad)H7S`wT2x}GQ<bB1Y=6_ipFSVC%Ypi%EAA|th62amcd%JjLQ~' );
define( 'SECURE_AUTH_SALT', 'N=v.:&vR8GV9vV6NF!1@h0F/H#*DqwpZy!Y5yo!%kkpR~il|{~u1h40@HG{*T,eN' );
define( 'LOGGED_IN_SALT',   'E})tD22*.fyTmy`:FQ&3cQZeafh!eiVe`D69c#K2&CS<`IoNJ@p#$dg+r9<FuozQ' );
define( 'NONCE_SALT',       'zhVdE>}5-?h$A@RN,v)+*~@d~Gv:{g3d/+vRj#p3{_r`s=fE7p:Zu5iR@^d%a*&E' );

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

