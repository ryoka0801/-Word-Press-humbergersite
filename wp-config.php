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
define( 'DB_NAME', 'ltcbaojq_wp1' );

/** MySQL database username */
define( 'DB_USER', 'ltcbaojq_wp1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'C.2DBQxLSIT9EbyrR2i89' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_DEBUG', true ); 

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9y3QpSOXl82nl0vWRIuxG59DZb5izJUNR8Svfs6Z4tQPVtqEFlbfAqVw9VNzCF4qcp34mffSZjxhO7ke1d2xcg==');
define('SECURE_AUTH_KEY',  'UO7N05hHJzojfP/qN30wi8eOPukpKnzPkKupCTOfRHnxC23rUbvJTLCcUc3hGxR6DM1yM653A9QelbeZw+Tq6Q==');
define('LOGGED_IN_KEY',    '2zO3JEtfTf+BwV/sucdYfc8/4hF5EmJfJ+gfDSvhCKUEddnef0FsnZWDlStu41T8rUpwvs6gdSkk0QJIBcPjaw==');
define('NONCE_KEY',        'uSmn2iMRy3phanAVxRO6nTjrEZ5jSBAN/4WdvyIOssjsDlT7Dg3wOg09grZtQfotL85keons7GLKH04hei+dWw==');
define('AUTH_SALT',        'n2DsUWFvPTL37GPlP/T///ogD+KIpfo76DRMV4+ipOBWx6sIhfi7c9V7hr6JE+A2MCmOXlizSdphUJXyJ61NJg==');
define('SECURE_AUTH_SALT', 'bVvam69/iEBYNBkG9w/RdoI4rXXNGvJkEfExSRRvAfvjZVH6HIs1AKTEDcquM4HFsvaGaX6Ua5NGJOeBEOL/Dg==');
define('LOGGED_IN_SALT',   'MTrgHGQMKkHuKKoANaoc2yj+fBUiXAsyhBjjOeH/qARB+stqxq+KVp8EJKtGQzXnpP04XB4Go4tc3+f+yMZm4A==');
define('NONCE_SALT',       'hHVJDSqzXZ2hvkGmGT/D/VkD6og7EpFK7c4ThMs0KA1/QURQL3fDZ8H5CuGhC3vmTpYEcL6qjh2sXUdhkHPQxg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';



