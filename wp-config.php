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
define('DB_NAME', 'ingram_ml');

/** MySQL database username */
define('DB_USER', 'ingramcloud');

/** MySQL database password */
define('DB_PASSWORD', 'ingramcloud');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8|GA-X=Rx)J2f[t.q#4`PmQU sQ*-a+W;{`7KC7cqIYnMqK$0C<8$,6r+|<Y4jy0');
define('SECURE_AUTH_KEY',  '@}qQmr5%naYCvRhfaHkV.&5-*|m(?w$kUcy[P1d(lTQLrUwM&]=GtRjDL(FK1bmG');
define('LOGGED_IN_KEY',    'X37b|0M .WhA#V;j0:PFn*y]BGHj$FANzu,ZIj:-URM=o.tGt^Le-FyF<f!cPDOk');
define('NONCE_KEY',        'hT6O#$0V<?TLWA^d8r}$-jC#NEdj`>*vqzb$;EV~w(K;[#j^Fq+|DXn|D(ax2V-4');
define('AUTH_SALT',        'L?b4ax7HG#S%Te1q;J6I3=%7.v1/]5[`lqgucYnK.f9`k)o-{~r#bf`+V^ZTx1u ');
define('SECURE_AUTH_SALT', ']GUWyK}/yw^za0SLNzix6|#^L._Lg|i3%MSCT-]G9J ]&=i[N8>6`F:{1d)*xw8b');
define('LOGGED_IN_SALT',   '}Gb9j@N]DRzAjE9yU[42gMf~{X!2jU`e#U`]Kr=-W(FYE>lY)eo! I?IY$ p^#0&');
define('NONCE_SALT',       'KM{rPg|p) (&1Zi0i*njSK &blizkouojsSOtsczubCcLzI:(p= ew3lVX$X%8c;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
