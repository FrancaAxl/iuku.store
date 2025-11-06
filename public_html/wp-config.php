<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u892410128_nyXbc' );

/** Database username */
define( 'DB_USER', 'u892410128_zSZF3' );

/** Database password */
define( 'DB_PASSWORD', 'Z4jqy04mP5' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'H%|N<rlEIfWkfegN7:36z*hLQ*htVndJ&$CEf?Q=z7;Q@IR:%-qbQ@e9ieYmx(:|' );
define( 'SECURE_AUTH_KEY',   'qBFBn=[$,>y5gR)B8TctbFag2}p5?*DoKdI_3|Q#O&:>1~y(k0w**8JsPX`xz9LL' );
define( 'LOGGED_IN_KEY',     '^+haY5.UsEN^B(Q@YuB8)$r.uEZx&.>6hZz_Th#wlhyjA yc{y-H2/l3k~(ju=^(' );
define( 'NONCE_KEY',         '|ziMVb.Ge-^BTl6bTmM}:]V/3A~7{+86v#yIAy?qJeZ0gmT3Y<oug,z4xpBi]=s]' );
define( 'AUTH_SALT',         '@i3HUcr=y{VkNebQlzR.U:&OEZSZ8!IA!Kmh)x8y6j2_JjNIznX{sOw==)n4DXQ!' );
define( 'SECURE_AUTH_SALT',  'q,PtFx%;7U]]-r~v2Z-MMx;8EdjhyPBv<?9Wxu,afU=U+)m!TS.8L$Sw`|<G^@8:' );
define( 'LOGGED_IN_SALT',    'PB0+FzbiI0QX[9SK?15 !dg[;FP3b_}SHIWB.fpHOGqoqRkIX:HPv%e,OZ{Mvviu' );
define( 'NONCE_SALT',        'jO}Z_iJNh8O:M@BPe>>$QVL=1k X^m/aESyZIX/fA:;*%uSK_qZW_b^E/!%+NciN' );
define( 'WP_CACHE_KEY_SALT', 'x[Y|eV]ut)*2#k<y-xb~8jzmT[K7kL+:<QxkmSxH2LJ(+:D`N-X$ep?__qH+ry>I' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '4b6e159018966d89a420fb2dacae6ae8' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
