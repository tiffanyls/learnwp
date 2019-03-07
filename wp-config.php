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
define( 'DB_NAME', 'wp_learnwp' );

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
define( 'AUTH_KEY',         'zAOEz#=In:wksM02=&?7dkU=y]TIo,$n.?;Wn`pY~daa$Go~^[XUDz+B:TXajFa2' );
define( 'SECURE_AUTH_KEY',  'Gz}fh@`!X-g*==>![ywSC-CFJM,cm&Mpn 8*EBvA_B{OuZgW.=zIwx2dvC!;aj=z' );
define( 'LOGGED_IN_KEY',    '>|kN[pJ?(NvfD|[io&dzh)Vw|K VKTS$!.SWpg%@.GT3nbiIOp[n#fR;8*I-%h4[' );
define( 'NONCE_KEY',        '<5XI}qr|@g PcX39/Tx7z0+koi9QP~* kg+0C)Tjs`AwK^BOp[B}ekkR]S>?QQxS' );
define( 'AUTH_SALT',        'n)c*.Pt!5f*>Tax-+V$0_:3N{j2Z>5m>]&8LIkAWGZPV[,3:o]DS#}2vzy2PL~;v' );
define( 'SECURE_AUTH_SALT', 'zP)}pZmR4lf<)<;E,B,<+n%yPg>|`|CeyB{Qz5@$NNSrsRlJwLxuUZ%,epXWxG/}' );
define( 'LOGGED_IN_SALT',   ')c9<g<ZW2!hUZ/h:o]jA+g[Vxb%`o_#rnOn8ko*nhF)d`,d&1dh.=*uM=;2D,[Ly' );
define( 'NONCE_SALT',       '+PZK9?Z6Vz @[!.Y,TWB/58O%lb(x3Xbn#)60Xx %/<c[}Q&]KMD`Po{TBS]SQ+-' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wptls_';

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

