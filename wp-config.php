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
define( 'DB_NAME', 'password' );

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
define( 'AUTH_KEY',         'qRX;uVR_Voy-Xvum,]OZ-_V71C0&/SR2V}#-96}KswA7kj:dFo_UE?fJgQ,G7#!R' );
define( 'SECURE_AUTH_KEY',  'NN~d{+UyxAl&`?MZId~FkS^~fZxFF%$J_bdk<!Y)Nb)iKKU_~aXJH:Ofg,_QVaA@' );
define( 'LOGGED_IN_KEY',    '&1.)I~I/06+fKC@.KV/<Xg;jv7YU~x85sr~kuW_aHvRIu0[n&djzl.=D4Dx,?qYH' );
define( 'NONCE_KEY',        'bUK#Lj@YVp_C_;t.:~u`!d?xo)5qA]L!:iBYX]~%+k*13BR.22;@WvWUor3tv)(s' );
define( 'AUTH_SALT',        'rh==>:tQD1HU2F(p#D3.RFQ${C< }UUo!7#HK~}+O!nbb5{Fr;D47M |Z4(cVLCa' );
define( 'SECURE_AUTH_SALT', 'i`J.(DhDu1J.@$}gIk>_Ep`]f0KB4pgh9/&_:0?i[(TyQObZW80ii~$S_Z]esdsy' );
define( 'LOGGED_IN_SALT',   'a;kjDO}mv{F:O=H-BI^S78lYZMX-Yr r3B/>%B]buO0X/zcP%q>_IyQM$S1B,W/p' );
define( 'NONCE_SALT',       'csb3}]QxsL[yFq!XGs,]0w&bOU33$WTo,z7lz@Wgp!*U{OY^yqXuk>0P/-/$wK+Q' );

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
