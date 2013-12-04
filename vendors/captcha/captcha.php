<?php

	session_start();
	$width = 145;
	$height = 34;
	$src = "images/captcha.png";

	//Imagen origen
	$srcimage = imagecreatefrompng($src);
	imagealphablending($srcimage, true);
	imagesavealpha($srcimage, true);

	$_SESSION['key'] = randomText(5);
	$captcha = imagecreatefrompng("images/captcha.png");
	$colText = imagecolorallocate($srcimage, 255, 239, 128);
	//GENERARA EL CAPTCHA (imagen,font size, angulo, ubicacion en x, ubicacion en y, font, texto)
	imagettftext( $srcimage, 14, 4, 45, 25, $colText, "fonts/VeraBd.ttf",  $_SESSION['key'] );
	header("Content-type: image/png");

	imagepng($srcimage);

	function randomText($length) {
		$pattern = "1234567890abcdefghijklmnopqrstuvwxyz";
		for($i=0;$i<$length;$i++) {
		$key .= $pattern{rand(0,35)};
	}
	return $key;
}


/*session_start( );

//Numero de caracteres del captcha;
$captchaTextSize = 6;

do {

    $md5Hash = md5( microtime( ) * mktime( ) );
	preg_replace( '([1aeilou0])', "", $md5Hash );

} while( strlen( $md5Hash ) < $captchaTextSize );

$key = substr( $md5Hash, 0, $captchaTextSize );

$_SESSION['key'] = md5( $key );
$captchaImage = imagecreatefrompng( "images/captcha.png" );

$textColor = imagecolorallocate( $captchaImage, 255, 255, 255 );//EL COLOR DEL TEXTO DEL CAPTCHA EN RGB

$lineColor = imagecolorallocate( $captchaImage,77,88,99 );//EL COLOR DE LAS LINEAS DEL CAPTCHA EN RGB

$imageInfo = getimagesize( "images/captcha.png" );

$linesToDraw = 0; //CUANTAS LINEAS SE DIBUJARAN

// Add the lines randomly to the image

for( $i = 0; $i < $linesToDraw; $i++ )  {

	$xStart = mt_rand( 0, $imageInfo[ 0 ] );
    $xEnd = mt_rand( 0, $imageInfo[ 0 ] );

    imageline( $captchaImage, $xStart, 0, $xEnd, $imageInfo[1], $lineColor );

}

//GENERARA EL CAPTCHA (imagen,font size, angulo, ubicacion en x, ubicacion en y, font, texto)
imagettftext( $captchaImage, 10,5, 5, 20, $textColor, "fonts/VeraBd.ttf", $key );

header ( "Content-type: image/png" );
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Fri, 19 Jan 1994 05:00:00 GMT");
header("Pragma: no-cache");

imagepng( $captchaImage );*/

?>