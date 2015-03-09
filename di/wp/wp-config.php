<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'di_wp_v1');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'u*xw`%<7){4bMwfp6eK#eg*m+YSB^s c>wI<PkE[9WjatK]l,B247{uT-*BI#JcK');
define('SECURE_AUTH_KEY', 'CP{_6y?d-,tw.]Ap@sQ;_d%o3#12u7,G[Rv{0?|lUS?GGb:#Q/,{k#;3:taKptMF');
define('LOGGED_IN_KEY', '3;v{ef_.}fWy@-t7MF6|q+1m:d}o{$TTK*|X$1)Gp{zg[y2+K=xuxQ8lQCIv5r:w');
define('NONCE_KEY', 'gY~JB l$|j:yh}=Njf22PjHM[@;.VG3Adj~JW5[}p%**]A/#a7u1:(8OujT::0WE');
define('AUTH_SALT', 'X=IkV:-b#ei(Q3v,R5F$uWC8^n~A37`DG?s-B67!bY)gCV3E?eh>t%NBncIX==$h');
define('SECURE_AUTH_SALT', 'AwZFvSJ&b[+nIV+VBa9O-Q+pd^-zOMaiwE2,n )pi1J7c(bH3vi7DI%S^Xvcd0+C');
define('LOGGED_IN_SALT', '<+gNBXpBUHkRf9&IF,c;13Y6f,kTO~&nd#W/*|{0h(83V1#8-XbiCoB6?M$@/W;B');
define('NONCE_SALT', 'u?1-qcAM:v>O|x+C{WZpRkGHovK@8,[NKCt3HG_8,teaZ#^t^nLz|Nz?Elc.aT{F');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'di_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', true);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

