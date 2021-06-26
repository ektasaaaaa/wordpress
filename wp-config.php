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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '5O<WQS@%@?^J^m3Pv,(OqFu.jE=sgQNs73GKRhK)P;#{<jq~-?,L44tc|-Yd_<8t' );
define( 'SECURE_AUTH_KEY',  'Spt9Z~hmzc-9D7p&;.Xe &dCn=jegkP4D-m]c= 8Kn$C3Se4;z8J9e-p^*Fn)<!x' );
define( 'LOGGED_IN_KEY',    'QC6x,@PC5l n]KrWPFg&3<_37NNOMh<Wm(#_/?FQ_-x%/D[ih/J`+FC/Zg:R4}l)' );
define( 'NONCE_KEY',        'R+R/e-J7T>_{TCL&Y$=}?yK(Y7a{M]>z*H}7Oc)Fh:uGpM%CmRdNrMkCR9uKj|S(' );
define( 'AUTH_SALT',        '&u3W=%~c!Gw3VuI8+atwV12rOs[-}V,yNdSp]q/2uJ~A|7,cBH2=7FHo@!Zl5g77' );
define( 'SECURE_AUTH_SALT', 'G1tO/RkK1!g&qHX_2z1L^zS9f1nx$R;[Fz}w~ISLvb~U;rrJnNt#?q{rVFXKg_%D' );
define( 'LOGGED_IN_SALT',   '~Vr(H*J;,z8/l[/3U;DPJokHggM:VR8s5)_GT:+L4pdEhi4`3o]dOi]{cEgnfeZF' );
define( 'NONCE_SALT',       'OdQeO/mVK#Nq_ZL[j&]e#2Q_]PSCkf#uU&c(cU2usQJ^<~&et;`z#Iy;7Z-kL5zr' );

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
