<?php
// Rutas del sistema.
//definimos las rutas fisicas de las carpetas privadas como una constante
//RAIZ nos devolvería por ejemplo algo como ésto:/var/www/clients/client94/web80/web/dwes/tema4/blog2013/
define('RAIZ', dirname(__DIR__) . '/');
define('RUTA_INC', RAIZ . 'inc/');
define('RUTA_LIB', RAIZ . 'lib/');
define('RUTA_CONF', RAIZ . 'conf/');
define('RUTA_FOTOS', RAIZ . 'fotos/');

// Bases de datos.
define('BD_SERVIDOR', $_SERVER['HTTP_HOST']);
define('BD_NOMBRE', 'c79base1');
define('BD_USUARIO', 'c79mysql');
define('BD_PASSWORD', 'abc123.');

//constantes para el servicio de correo
define('MAIL_SERVIDOR',$_SERVER['HTTP_HOST']);
define('MAIL_PUERTO',25); // para Gmail 465
//define('MAIL_SSL','ssl');
define('MAIL_REMITENTE','juanantonio@juanantoniomosquera.local');
define('MAIL_PASSWORD','abc123.');
define('MAIL_NOMBRE_REMITENTE','Juan Antonio Mosquera');
// creamos la conexion de la base de datos
$conexion = mysql_connect(BD_SERVIDOR,BD_USUARIO,BD_PASSWORD) or die(mysql_error());

// seleccionamos la base de datos en la conexion anterior
mysql_select_db(BD_NOMBRE,$conexion) or die(mysql_error());

// para recibir correctamente los datos en UTF-8 en la conexion
mysql_query("set names 'UTF8'",$conexion) or die(mysql_error());
?>