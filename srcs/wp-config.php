<?php

// ** MySQL settings ** //
define( 'DB_NAME', 'wordpress' );
define( 'DB_USER', 'mano' );
define( 'DB_PASSWORD', 'mano' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ** Authentication Unique Keys and Salts. ** //
define('AUTH_KEY',         'boY!PnBv9/A]s$Iu<[DzZ?./F-kS l_W;SQ0}>-rGW7e.F!};4<UyyeYfQND2daJ');
define('SECURE_AUTH_KEY',  'W#V)Bj<EcK:=E*#pP;Dp9ItW-lDsaG:=fjAk@sTN0yR}%Bc$~SvvD*P-5?K$tWqr');
define('LOGGED_IN_KEY',    '%:5Tb[ O[3k&1WfCk=`-dgPz*e)`u<G(C6p`hR _ySBSgjSD{2fAGp7roGyTB=@8');
define('NONCE_KEY',        '9=dn3aO+1u!9Z5BP3c/,dW~%BX|`*71uEo}SLj%XrgZu[|.KWHFpsP:>0^pAyEnn');
define('AUTH_SALT',        '}A$Jte-k~*^k@ek5gk.G*+H?<a80sfnz-1A1Hk.>Y]/N`5zO_.t!y^bg3Fcs-@a<');
define('SECURE_AUTH_SALT', 'x}l:2D+}G/:uEMEXKtnt/8C1OI&JvB:h[wE2T(oA#[_IV2M7H:.h8SiCo*SF.sAm');
define('LOGGED_IN_SALT',   'y)6E.(4SFwM4N0%-wuZa?.*?Y:-{ctMM4!57^/ESi]gjVB(/s]$ Gc&KZVgC`n2K');
define('NONCE_SALT',       'm,oIwGI|~FkYBzduKbKH&oc;XtpyW7RXNR|Y)?!1TkB4Z*{13|DP_ gEh0f.6-eI');
$table_prefix = 'wp_';

define( 'WP_DEBUG', false );

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
