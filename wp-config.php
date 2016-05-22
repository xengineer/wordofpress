<?php

define('DB_NAME', 'heroku_7896c753ac87c78');
define('DB_USER', 'b3756003947944');
define('DB_PASSWORD', '6b1b2241');
define('DB_HOST', 'us-cdbr-iron-east-04.cleardb.net');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY',         'wkW:-Qq+uYuu|-f2i[;0KgTKiuO2<g%n8wE=/piSARHK0^GJkv;c)/R1nu|PoL{_');
define('SECURE_AUTH_KEY',  'AlnoZ%n4Bc5s0-Mu^GbMB^o49,_cC)G#Fd*^w7<ibbpgY|@._u[Ij2^}:|Y=vC{k');
define('LOGGED_IN_KEY',    'lyQ_QcpV|o[>kaij^lSc{#)|O-7u4EOy0L$&yN*v~~?yeyP1$XMW];&hdjOO#vA?');
define('NONCE_KEY',        'x4(X5:+WiKVZ w-ye)Dnape?+Bhm]:*$|@zc}U+$m[;3j3uY.Y0R{y,KmSm.r(q{');
define('AUTH_SALT',        '5#FOx_]|*P(NcUYD6/S>@|E|ZQ#D8vkIc5D:hPMa~_l:|Vo[W)u;[X *e4NA,ALK');
define('SECURE_AUTH_SALT', '$JUCI:T1uRPkNyg)@_Q:[C7#fm37b|rHOczl|l6:=1x_[ 9_KNE%+%<XFiC+0L0(');
define('LOGGED_IN_SALT',   'fF0E{;I1jl6My1D2QD38.b&*)g42-t|!3!C}?^Y>}V:a[lU:PSeDKF}eh-MJRGf+');
define('NONCE_SALT',       'EtLL)UT0VKTe]-Cv7-t$HQE|J5a+y N-hv=-lCHL^-{PR-UA5RQtYfQ!ow}+-|{,');

$table_prefix  = 'wp_';

define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
