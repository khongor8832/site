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
define( 'DB_NAME', 'site' );

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
define( 'AUTH_KEY',         'h=^-R%UsiTpq}of`ZL}]UE_6ureSQB~0VgGKX)2;$oUU*PS?^f&7@!{/ThA~*wWI' );
define( 'SECURE_AUTH_KEY',  '$L-,Lu)/nM:2[MZC=br.tZVTbwfF361#+7UW4(V^tQy60-p2k:v;2}`|8B56=0qC' );
define( 'LOGGED_IN_KEY',    'lHz/8R3c^!3cq(%kQM,~lOXHnF^yKo8#*$K|6HlD4a0Nlo2da2*0G6&Rsz ln8;b' );
define( 'NONCE_KEY',        '~9FJt]h*ws6tc2Mp]KHZH>/;ilCmRqk}Ncrb_;B`!}#(qOOVmF>tq?_aTuyK+ ;6' );
define( 'AUTH_SALT',        '+*kgUY`+0.xtQ!j>-JUn<J@Fbqs}WiR1{@Rbw8jm h;Xwy&b)#BKD0!-+9h2_ j^' );
define( 'SECURE_AUTH_SALT', 'v3@;nW)~rX:,E_y]oSy3J5v4i+IS[1YL2X$%2l!y:DmvDxXvK(zHB|~b>[=  r&r' );
define( 'LOGGED_IN_SALT',   'Ko{>CY+8Q8%EWV][T:~[b8Fb0qXA=p&tDR%}Bn/+9FzRGl9Dm69oh)MI-THhav]*' );
define( 'NONCE_SALT',       'q4gGnF}p2lXN6_VB8z AFw-xKDYqZk>Uv!nrD <fm1wQAmai1OK)[;LT-{JS]#Pw' );

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
