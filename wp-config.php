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
define( 'DB_NAME', 'b8_moviewordpress' );

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
define( 'AUTH_KEY',         '2Qr1yZ6V>Gp 6<UB8hR!RJXRUiVMA]Co%QE-<?71Fh>G@o3tu`|H6tlKYP~&6t#u' );
define( 'SECURE_AUTH_KEY',  'nUx4h^LO~&hAX+-&DL?c/,hCz8nXc#fkQ`?~Hv]B,Q1Cm!o^3K(I7 yit?e]-3i^' );
define( 'LOGGED_IN_KEY',    'E/+XsE^D/Kq)mtz8Rk#DJCx<q3k5fFDE+o*}6.U$8I@kuQ7>8myJ~sQ8v}6Xom}b' );
define( 'NONCE_KEY',        '{bINEb[5t6+VPak&+Lv{:~D:,IITYR^LGs<D`<o@p;+*CuZcd~Ds th}5@I]!VtD' );
define( 'AUTH_SALT',        'Vs&N{-:nN$^r.0Z>+kB/Tw9oP,V_o{&GoDdQqdTm(3xVMNCDsMfK3#3Kl>2CQ=Tt' );
define( 'SECURE_AUTH_SALT', 'k+M<}Ptmy1(7e84PS`N1t^I;*$Gk7xTL=I[MQW24%o`.G90m/M7o]p[7Au-*{>j-' );
define( 'LOGGED_IN_SALT',   'J]XVt)<dWUs@dVB;:O;Fu/NYlo<*8+nIDWvM<yW`RX5))zgecF+EDC14ken}=9,F' );
define( 'NONCE_SALT',       '|6AnZd0ocVgxZyaaEcApo=,FA!.Eh/v#KVaFV$>N&EYvkN`=8rfC-,e2cxRWQ^wP' );

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
