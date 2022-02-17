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
define( 'DB_NAME', 'practicas_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'DJRQS*+$CDzEp.-Daqh3PuKoM;_43WJn}tWsv?3Ir lh0$?lru*RzovM=a{)?Es=' );
define( 'SECURE_AUTH_KEY',  ']PPMm9u,rG;ZrexOQ5]Ln5F(7r apr`9`O;yjHnyce]<1<V#T)z=8SdvIF <_|HN' );
define( 'LOGGED_IN_KEY',    '!+luW2):nKsAw`my7<~}yIaXHJ$8MeX6X&I:O8xxFUXNBp[oRJ1R2H&(ib*4TO;I' );
define( 'NONCE_KEY',        'NN2`dF3T/a?y($F^sechL]*>8SH4R0(@qLB~&[B{@d$J9p+fmyAZIDFFLD<.16#T' );
define( 'AUTH_SALT',        '_,2 FaCE8RFS;itZMd0H7>V0Frx!XYLhm#1JPB}H0^_]9{Zu1+lO@)5;HE2VL<6T' );
define( 'SECURE_AUTH_SALT', '<CM9iQ@v6{HWNR s|-N58U]Hpqkhe6H#.T,j{GGw<wh35ME*l;))QxFua+An93u<' );
define( 'LOGGED_IN_SALT',   '#$~Kt@5Eo)x^0XfJ(X|OZqII87kuN4D1hXTRJ`mV.a(q7Fv4LFlarL<R)7`y+NU&' );
define( 'NONCE_SALT',       '!M@uZyDpB27UDtc}tq;teeqT|V6AY#jZ3@|9MI1z7,4>y[)[n$gWC$xSyiW9xQk+' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
