<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'agunsa');

/** MySQL database username */
define('DB_USER', 'agunsa');

/** MySQL database password */
define('DB_PASSWORD', 'agunsa');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'xBECPU k~638}!,Tz2)~i1+nRJHVwQp t|/]P&w_3+zdr@.6&&l~!%85S6Nm3>Y ');
define('SECURE_AUTH_KEY',  'E>33[?XRb@`(:q:b)V|;zduM93?Q0.JwJxp-u^q|r|bW20+15K-:2es)J7j..-e,');
define('LOGGED_IN_KEY',    'M.h:eF@Lt4@]p]2iJ$eSZYA#A{.{=7n8VX64b|.+7R=Zi0C}^>>~:+IjFFHt@H=I');
define('NONCE_KEY',        '^3C>G01t2@nJN5`at`tg-dU$BZ9R3HFZ&JQqcJsAvpo<^#]{.YS$Ygiv1+$#;C--');
define('AUTH_SALT',        '!)vOi4B aT@NcJ-zznog.:H^<a*h1#xIWC/u7yaEjM+lKf[t24UH|l5R I4S(HWa');
define('SECURE_AUTH_SALT', 'cUaVySv<y,DLS8JCH!xX|-TA,IL(?,j:z?t,J(ye2H9+9,h:CXjzxBy}9-grorqI');
define('LOGGED_IN_SALT',   'GWx2+ {)Q:A>|;RK+idnh;;&9{>aWQG5 +{HT(Oqa/a&.gh|C#c*Zp`-&Bh*T%x~');
define('NONCE_SALT',       'Spp&;F3&&4|6jE!Zf)zjNwS@D)U6ps][o`Yq.ibzw)k(PlU6{0G@UjK67Bp_!yYP');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'agns_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
