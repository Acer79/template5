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
define( 'DB_NAME', 'template5' );

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
define( 'AUTH_KEY',         'f2io+4ETBGtXHh96os=_h-]n_}qfC}L+1p>q;)yj>9)}tMiSAwP_<:z;[?kr;d,)' );
define( 'SECURE_AUTH_KEY',  '6XShBW7?3o,Q(hLfx-q-nKnIK9:)FE]IMzH/NXY}e3lDV;f/b[ws*rt)wdGV/BoF' );
define( 'LOGGED_IN_KEY',    'qRA9QlaROv@os&cCAP!o$#bz=L,w~<<%t5y#m||fIx8*Z[=.}rrp?w(N|%,F#r9s' );
define( 'NONCE_KEY',        'zzUbR|U=gAWs/!kbOS:JFkg_J8vtc2iqzmP0i/^#ioL{e}5I4r*hmQDT{%{pM`/c' );
define( 'AUTH_SALT',        'b]gM!JaC6;[3UZ>8QvS/r.-$unt<5fMh+gFKJF(w5Pk+Jzdd*%^q$kpD#(KW=dMF' );
define( 'SECURE_AUTH_SALT', 'M(QXB^kFd3=&5#Jztgy6W:}W)uM%>Vx@9VBY/td4(ELz#[u Ip5[d2-:zUU~hk?e' );
define( 'LOGGED_IN_SALT',   '!UCyC/_M5niCZ:_fJ0#`rCDAxm=(5:y#VJ^n9#a)1E#GMAb?F/wZqej2OnjGi+5g' );
define( 'NONCE_SALT',       'IRsFvs[<PaEVoD>e!R7HMSdOoR]h+en+3kY940W]3)b;P&BU&,/~ss mgdHWt_{Q' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
