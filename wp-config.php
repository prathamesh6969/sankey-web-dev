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
define( 'DB_NAME', 'sankeysolutions' );

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
define( 'AUTH_KEY',         'y0[}ToH0y3z#$YT&Yf$6Vb }g:Bl#[b`FnpI2F,`G~5@}Tnva`P(OGwEK-mS )H7' );
define( 'SECURE_AUTH_KEY',  'Y?wFKOk`qLt*5UmPJHn_ITIo}74cUsww#O,a<*UGWQuX2{4fTt5yYbh++LYh~b9t' );
define( 'LOGGED_IN_KEY',    '>usoiJxr&)kqBJ8dWLz![#hiPOLJa:F+O[Z):T$C8pHK5KzTq*.0+ld{8J#Oy# n' );
define( 'NONCE_KEY',        'w^vU2;qR>Oy*~z2w8%kGo:E[UQ.EDvLP+`Hl*Uz2vn>x>A`jvdOtqZg]ltNuW]J;' );
define( 'AUTH_SALT',        'RPyGiawZh.I.3.@yFee&xa*Eo(#QZeZ7TcQ(H.&@ (K.E[E3eq!pc2rV5gRsz6x}' );
define( 'SECURE_AUTH_SALT', '+rOyVb7ON[ibq~b]=/iTu9Pz75-,),69-6AC.~-}vmkc]#>3)jskq++l}Qm*g@Ik' );
define( 'LOGGED_IN_SALT',   ';4v%J8fHxW[D*x;aS~.r@+7d(2m Pk<UAOlmU{,hbDKKlIXkQ{2}nZ]^IkCd=QN]' );
define( 'NONCE_SALT',       'S@,`Rp8}+nKo8<#M]&S&$Nl>4Wh1kB^KXHIR;]eTpi_89QC/yH,8CA/]KeQ*3MM;' );

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
