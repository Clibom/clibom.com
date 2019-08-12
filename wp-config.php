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
define( 'DB_NAME', 'clibom' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ']-}7@<QmJM[h`qY!imDakpIj:?oS@7]`y <OQ8>zT4d!0D>v9=LhQ=@-Bru*@)C,' );
define( 'SECURE_AUTH_KEY',  'osjZy{2_.](1._}4R8OOXrX4jmFk&~0l>GU&0vw>~hzj6Km_X;J{1rK3}{vlJ#PE' );
define( 'LOGGED_IN_KEY',    '!Hl9Bs7Xg|Au=|ozS[Z{vrs^7HOe1Q*?L1;YKe@nj%d`PN<.Ic)Y}Q*={au;{;rr' );
define( 'NONCE_KEY',        'm=>xUU)$p_<ksD_e5GE-n7}Xoi%XaF^Qj#S 3KD3}w)WV7i+n_Avw;SM;kloMR3`' );
define( 'AUTH_SALT',        'zL0{~r &,WHZTnJPp]T2CFOe?Vz1ab(Bz~vU#?u/W`~SJO9PRC/uu<a=vTHM:<27' );
define( 'SECURE_AUTH_SALT', '4Ob{<n-rj#)}^g|kaDZL3 ?`Q=Ocu{+6PD23|iy<=K$xe!dCH3?kgd&JZCC (wto' );
define( 'LOGGED_IN_SALT',   '^wn5KHag8iunOR~<]{YuNX]`|[-u.-p&(Un@}Z*F+o,pgN$09.Ch1^05R[l}6vzA' );
define( 'NONCE_SALT',       '1yqno=WAO[UxMHb&By|Yx4H0yy-e,Ad?JnAN5};xAZx}6S?&FstLb0[ <M[t+:l=' );

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
