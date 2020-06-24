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
define( 'DB_NAME', 'event' );

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
define( 'AUTH_KEY',         '8*d9i~^b89hbJ9 &dv?:Paey7(5Ro|84Z1IK{3b,(? ftm*Q[xE?dH@_.w]MvGQL' );
define( 'SECURE_AUTH_KEY',  'O%K6{G #)OpS&kp]t-O[d]s:mq:eg4/E6;)Hk6-5*EBB<4xK>]<J^=;Liod1|BfL' );
define( 'LOGGED_IN_KEY',    'aE^vXKeqY`R9O#Tv~GXz$P]N1~Eydhz#x|uq<T3>Qa)sOr_s]2GS=f;#8k8yNYw/' );
define( 'NONCE_KEY',        'Rl9GLAHh7 =5@!B2^?U/Y7FB|A|@x&cViMZYsc#Y,f%V}`0Ph!a[ggqE+$A)hgL)' );
define( 'AUTH_SALT',        '<E9hSKV1BbRq]N)(GWh<c[)46KRQEwb5&P<z?x1z`QnM6/3kQTI#_KBqn@xn6N[(' );
define( 'SECURE_AUTH_SALT', 'M8pHDdfVLvXqnFSjbm?fM``[Lo.w[(ayQ:;p{IBDy[2jBu-zc*%4QzQ(O)ls!uJ>' );
define( 'LOGGED_IN_SALT',   'FM2|`5t4s2V;(0iM>l$V^>GK!OjjE7<g2ZWsA`*,q`l0ZItz<K=K#iJH]!zO+~hV' );
define( 'NONCE_SALT',       'w-L<Io{NjsV[uj5&f9[.P|YWAi/$}b1z[Ny71K-qZ/U^80K2gL#Iz JX2Z} L${a' );

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
