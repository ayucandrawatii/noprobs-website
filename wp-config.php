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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'balisupe_noprobs' );

/** Database username */
define( 'DB_USER', 'balisupe_noprobs_user' );

/** Database password */
define( 'DB_PASSWORD', 'V}v88.}jy+=W' );

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
define( 'AUTH_KEY',         '5LPky<h+7XSr=j.x3~^KeHhOSXJe|c`Ud;|K# ;T!gqF4YLHis6Dx]=VdliiYq r' );
define( 'SECURE_AUTH_KEY',  'ZL<sPD5C9xYY5N%:7yRT crncd:~vBD}!FY:?nE0H2= F5B,D?yuSu+Wb[0x@(WI' );
define( 'LOGGED_IN_KEY',    'Wik(-VlQ`Yljd8Dps~aoBk4T]w4,n5S6pPl|SPt#HP:aQHS<s*.xjsPDF4hn_20W' );
define( 'NONCE_KEY',        '$ma04;:[Cr(o1r-<ULLR]23~KN-paLv,2^qjHXr+|A)idZ!i.22x?~4+TwzQ6upJ' );
define( 'AUTH_SALT',        'guSQ;_?|K2Q10pi]m08i}L}v. )=M/F?ZY?jv@Z^AIW>+(.kWkLUy #}>mb*bvH>' );
define( 'SECURE_AUTH_SALT', '21&1{^(zA6hqnu(>P#LIL0HJvhb}^|oU2v3{xt:,hJQ`1CAi~td.HpWBpfI?pA}#' );
define( 'LOGGED_IN_SALT',   '(k5z;wdzGJwt2cC@6+; Ta:NSwjw><~a3Dh5(20Q&gvESO.cJFAA(MK%:Ci1|&.5' );
define( 'NONCE_SALT',       'X766$MezZ}EIS@#)Y;Db2`%JlkMNqm.jPJIs|4-{FTKwVfHW5A56_+bFoHp#^i{Z' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'np_';

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
define('WP_MEMORY_LIMIT', '256M');



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
