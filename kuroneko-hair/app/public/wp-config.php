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
define( 'AUTH_KEY',          'Z7D8_;aQ4)ZD:44Nh-ULEwGbk<5Fb$Db6:yZ4EC Z5m6kM<YVf{ejSRY9rH:se1j' );
define( 'SECURE_AUTH_KEY',   'M@/Tu_{3Rdedaw%%k1V^(yt}YxQ^DHN!74<?W{4pS!5/2ccf2H*iZx|v6ACKp_5u' );
define( 'LOGGED_IN_KEY',     'L3!CKbu9#OTfYpzl;]3S!ZWE!N8)-87;9Q]MLt0%zH@2,.&gH.sL{ 13h+QD[gIU' );
define( 'NONCE_KEY',         ']%yrt=>uW3O9OCk3J3`{<F TjYfPVo=~}SCfT?&G/BEm=Z`dyhS<{Kc7ushk5NqU' );
define( 'AUTH_SALT',         'FF}v<S@9Kh:)9E,fm+NoQG&JDXf;RPwFjGKZpUHj&j!J.Pgf!8!z&lTE4FG3(,dj' );
define( 'SECURE_AUTH_SALT',  'm7<b[7w{-0mcv;>GuD^ yTW [L)?Y zRU(tu21~PU!W{f4^jo>E|{#VnAw[O}UP~' );
define( 'LOGGED_IN_SALT',    '&)gsn|qpWJ Rm,QKDSqN1I$(g5-1U@PwH{{72ib?8TlI. z{*5fj8{,O6Y0Qay1v' );
define( 'NONCE_SALT',        'semCeh6SFJq<{U1pg;T5)0ck#xLu9Av(l%sjuEJM[WVX+^xqeGXH9dfFNAP.+j2}' );
define( 'WP_CACHE_KEY_SALT', 'v ^f0P`kQo6@aUHJ;{nGfeI)9DVXe=I/yMI:&(:QFwJ,y(LlV2j+4Qu2rCh[m&[X' );


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
