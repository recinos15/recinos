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
define( 'DB_NAME', 'githup' );

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
define( 'AUTH_KEY',         'FNiAMci>:;nYS)&Ml0pl2:LmZC{etc#V8{D(t5H>3E!;/yCbZM,cl0Wt0nBFie,5' );
define( 'SECURE_AUTH_KEY',  '^z_VT:dKFb-ZRV$.#$*IQU3kmyeHey?,k7qfkIG|;y);^%:98v0b)n*CRG_-@A.<' );
define( 'LOGGED_IN_KEY',    'Q.gkuiZ|VE<CwxDtT/q|Z_@RF20f2(_F=HZ;4<,34zD=WGnJOqtK~Flr;mj B,_b' );
define( 'NONCE_KEY',        '%tbsZSf@oCg9noy>X~$Dkw^.qT={Im3a[ o9fYl:zFV$BSa#;}Ori 5v4=f}G~e/' );
define( 'AUTH_SALT',        '{zDxv^&M{iKS~>%3SK1zvqm<G7P:%@R5bezGbCWi<}i~kgeu>WD}O}H`;OcM}Yc:' );
define( 'SECURE_AUTH_SALT', '0yT/y/<Pp7WcyiA_[HxU=Z5]7bcs)[b0IcHOZbZfvhcXNox/:Py!Z4W=.%0fHA_b' );
define( 'LOGGED_IN_SALT',   'IlxGM.Kq|&r[Q.(nfRPBQWU>H1ijZC*{*xd#[~_k>rZ^}9 x(=f~f@/3!(K%#7Lg' );
define( 'NONCE_SALT',       ']`t#{`CaC{}vaTG:A/|3&<cOOPsAXU1t yluPBbj%DcmFbTZkZuU|=PqQJ!%[``J' );

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
