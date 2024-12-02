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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'zakiulangan' );

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
define( 'AUTH_KEY',         'NtvmLQG)I*%G?Syvgz.K5Nv/4lqcr6/XBB;Gq4[>{^;0W)I&le%0.s|YDZ9[@Kl*' );
define( 'SECURE_AUTH_KEY',  '!Q-]_+}@8;=clYT<`(w.I(_l`1&D K9-[8t.2|(nLb+jDXI} 89q9~h0IqcfZf$z' );
define( 'LOGGED_IN_KEY',    'B?Jk/>4:>HFnnJ~;1/,eW.}|]nP>c+Ul58LHj%j{-=BL=Ec`go|h:f+l4^W^@LKL' );
define( 'NONCE_KEY',        'jZ2luM.cZw0=r,Uvg3/eF1ifPy>,4Mf1mtW0f{qbR]gg.<@EpHPy,09/&;8O(fwm' );
define( 'AUTH_SALT',        'ggI 3X@LAJ]QHP@YUWm/neq:c4(].`?p`Oes I>~x)*mWx]z^ImH-_<dx8B5`r l' );
define( 'SECURE_AUTH_SALT', 'ckG71d(=0LhNqQo1-d?!6dsuoT@ YNq0s9>mo1BkL0}FI#Tve0#Q sgo~oZ$mEv%' );
define( 'LOGGED_IN_SALT',   'P1*CU g!BEB[Em*s5+omHKRtw6Y+i:KR2mjoBW%4~A/DN0^`sMhs]uScv9eB42~r' );
define( 'NONCE_SALT',       'fde{GWAs^kg.H]PO!6$BVRiBJJrbNQkFILT{JzeEr),qadZ4w0>H)Ag]NfmLZq<2' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
