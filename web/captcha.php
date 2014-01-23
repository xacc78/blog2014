<?php

$imagen = imagecreate(300,200); // se crea la imagen vacia con un tamaño

$alto = 200;    // alto y ancho guardados en variables
$ancho = 300;

$color = imagecolorallocate($imagen, 255, 0, 0);        // se define un color para usar
$colorlinea = imagecolorallocate($imagen, 0, 0, 0);     // se define otro color

imagefill($imagen,$ancho,$alto,$color);                 // se rellena el rectangulo con un color

$altoaleatorio = rand(0,200);   // se generan anchos y altos aleatorios
$anchoaleatorio = rand(0,300);
$altoaleatorio2 = rand(0,200);
$anchoaleatorio2 = rand(0,300);
$altoaleatorio3 = rand(0,200);
$anchoaleatorio3 = rand(0,300);
$altoaleatorio4 = rand(0,200);
$anchoaleatorio4 = rand(0,300);

imagerectangle($imagen,0,0,299,199,$colorlinea);        // se crea borde exterior
/*
OTRA FORMA DE GENERAR LAS LETRAS... PERO MAS FACIL CON MD5 Y DESPUES RECORTANDO
$caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890"; //posibles caracteres a usar
$numerodeletras = 5; //numero de letras para generar el texto
$cadena = "dfsdf"; //variable para almacenar la cadena generada
for($i = 0;$i < $numerodeletras;$i++)
        {
        $cadena .= substr($caracteres,rand(0,strlen($caracteres)),1); /*Extraemos 1 caracter de los caracteres 
        entre el rango 0 a Numero de letras que tiene la cadena 
        }
*/
$texto = md5(time());           // se genera md5
$texto = substr($texto,0,8);    // se recorta el md5 generado

@session_start();

$_SESSION['captcha'] = $texto;

//echo $_SESSION['captcha'];
        
imagestring($imagen, 5, 100, 100,$texto, $colorlinea);  // se escribe el texto generado en la imagen

imageline($imagen ,0,$altoaleatorio,$ancho,$anchoaleatorio,$colorlinea);        // se dibuja linea con inicio y destino aleatorios
imageline($imagen ,0,$altoaleatorio2,$ancho,$anchoaleatorio2,$colorlinea);
imageline($imagen ,0,$altoaleatorio3,$ancho,$anchoaleatorio3,$colorlinea);
imagerectangle($imagen,$anchoaleatorio,$altoaleatorio,$anchoaleatorio2,$altoaleatorio2,$colorlinea);    // se dibuja rectangulo aleatorio
imagerectangle($imagen,$anchoaleatorio,$altoaleatorio,$anchoaleatorio3,$altoaleatorio3,$colorlinea);
imagerectangle($imagen,$anchoaleatorio,$altoaleatorio,$anchoaleatorio4,$altoaleatorio4,$colorlinea);

header('Content-type: image/png');
imagepng($imagen);
imagedestroy($imagen);

?>
