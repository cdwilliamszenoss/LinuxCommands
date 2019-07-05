<?php
define( 'DB_NAME', 'databasename' );
define( 'DB_USER', 'username' );
define( 'DB_PASSWORD', 'password' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );
define( 'AUTH_KEY',         'WgF^K0jxj8>^q2tbzlLl?Tu5.#twf=a0Y-~0sfmuQ&5iCs&7c10=t};  981,uiD' );
define( 'SECURE_AUTH_KEY',  'HgS%$[2A<47G_V.`a46H)/f7{#k~R_X&;aI*G#Q(dWU]D,HV:RnR_h]|+VK5h<~q' );
define( 'LOGGED_IN_KEY',    'v8f_Q,o?|L#JdCH-gQ-QeZ7A8$[<UN]Q:?h^>=Bmcm8?nkn1pUypTyD;DU<:jh`:' );
define( 'NONCE_KEY',        '3Mi# VnhU[7bJ`^>!;=^$--g=7+lNV<n+EITHpUmO0TCx&`8r]:pk5,[8F3iM(*Z' );
define( 'AUTH_SALT',        '8]/YS<RM9P`[N2Bzc.fYIdou-/$r`[=hiLH!mM8rWz]S(}CUywYYcMe;U!*QH!s1' );
define( 'SECURE_AUTH_SALT', 'Hf Y3#/ytcuM<BM=?}gS|ug`iZ|EW1R?|$>!v#.1s*:eZk14(M?3.O$w[oui9Ls)' );
define( 'LOGGED_IN_SALT',   'xJi^lWVi#=}p4&8*L<c7x5&_rIG9@^CfUVpm#@y~5c6&TnPpCxkt5UQ7XYebci14' );
define( 'NONCE_SALT',       '7P?SgLr>A@aWv**29j^Mb7(b#8oZ+}gOc4T}PJ~#*#yP~Y$>C(RIj0x{-f~% #?E' );
$table_prefix = 'wp_';
define( 'WP_DEBUG', false );
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
require_once( ABSPATH . 'wp-settings.php' );
define('FS_METHOD', 'direct');
