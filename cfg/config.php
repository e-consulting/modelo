<?php
unset($CFG);
global $CFG;
//=========================================================================
// 1. Base de datos
//=========================================================================

$CFG->hostdb    = '';
//$CFG->hostdb    = 'localhost';
$CFG->nombredb    = '';
//$CFG->nombredb    = '';
$CFG->usuariodb    = '';
//$CFG->usuariodb    = 'root';
$CFG->passworddb    = '';
//$CFG->passworddb    = '';

//=========================================================================
// 2. Localizacion del sitio Web
//=========================================================================

$CFG->wwwroot   = '';

//=========================================================================
// 3. Localizacon de archivos
//=========================================================================

$CFG->dirroot   = '/public_html';
$CFG->fullpath  = '/home/user/public_html';

$CFG->cssroot =  $CFG->wwwroot . '/css';
$CFG->jsroot = $CFG->wwwroot . '/js';


//=========================================================================
// 4. Localicacion del directorio de imagenes
//=========================================================================

$CFG->tipodirectorio = "unix";
$CFG->imgroot = $CFG->wwwroot . '/img';

//=========================================================================
// 5. Configuracion de SMTP
//=========================================================================

$CFG->hostsmtp = "mail.dominio.com";
$CFG->puertosmtp = "2525";
$CFG->usuariosmtp = "noreply@dominio.com";
$CFG->contrasenasmtp = "";

//========================================================================
// 6. Prueba de conexion a base de datos
//========================================================================

/*$bdconn =
/*$link	=	mysql_connect($CFG->hostdb,$CFG->usuariodb,$CFG->passworddb);

if($link)
	mysql_select_db($CFG->nombredb);
else{
	echo "Error, no se pudo conectar a la base de datos. contacte al administrador del sistema.";
	echo $CFG->nombredb.'<br>';
		echo $CFG->usuariodb.'<br>';
	echo $CFG->passworddb.'<br>';
	exit;
}


*/
?>