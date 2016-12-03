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

define('FS_METHOD', 'direct');

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wordpress2');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', 'oloXi?J^F>79( mf%k?*Ub-}!7$L(*>&[IAv#1ygoa@_4PEnZKo*0rHf]t7o[&!+');
define('SECURE_AUTH_KEY', 'ZMNr(dAmu(X.{kF:|~q!wlxA]fd7!y&Cmo>p}Xds-B<MF|)Wl#d^xCm20{q-5}Dh');
define('LOGGED_IN_KEY', '[zJWh(dx:s*l</<j_m[}mqI[/AP7T2h)prCd.:,4b,i1,P@JZ2Bo,&DIo).rkThO');
define('NONCE_KEY', 'hJ(:Q2P.NGe@hoPh;bX{ZAi#>#x.w9aaii`a9zvCYu(6@jfBW6)P$YFw-bZ0rcy%');
define('AUTH_SALT', '%4Mztg0NIUjK&TCUvPz(E2Ufa-lef@xv:EYj.*v*S>lTks0a#BS/h.]aB]kFNK,,');
define('SECURE_AUTH_SALT', 'j|R5WFQ.x&od`~oLJ:nCl(w_lJWHXqrblwE soA6>u]6eYiZO}&s=KFyg@ X<$eH');
define('LOGGED_IN_SALT', '5u.Ow:y);j!xf6=hX$0-3BRLmFA(u[_P(i,VHi7N1ewf&d9QSk0*&7VE6/[MGCsK');
define('NONCE_SALT', '/#fJhG|vjuBS7)>E@[F%Wv8`.K?T_,]]rY8_C@.>LATQN S13gf(tI>DNv92_)CL');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


