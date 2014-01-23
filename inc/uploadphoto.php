<?php
/*
 * add enctype in the form to enctype="multipart/form-data"
 * add type="file" field in the form
 * 
 * $_FILES 
 * 
 * carpeta temporal --> movemos a carpeta definitiva
 * 
 * move_uploaded_file(nombre_fichero_temporal,ruta_destino_con_nombre_definitivo)
 * 
 * pathinfo
 * 
 * file_exists()
 */
/*
print_r($_FILES);
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "tipo: ";
print_r($_FILES['userfile']['type']);
echo "<br/>";
echo "nombre: ";
print_r($_FILES['userfile']['name']);
echo "<br/>";
echo "nombre temporal: ";
print_r($_FILES['userfile']['tmp_name']);
echo "<br/>";
*/
if(isset($_POST['userfile']) && $_FILES['userfile']['type'] == 'image/jpeg')
	{
	//$nombredefinitivo = "nombre.jpg";
	$nombredefinitivo = md5($_SESSION['nickname']."lalala".".jpg");
	//echo $nombredefinitivo;

	move_uploaded_file($_FILES['userfile']['tmp_name'],RUTA_FOTOS.$nombredefinitivo);
	}


else
	{
//move_uploaded_file($_FILES, $destination)
?>

<form action="" method="post" enctype="multipart/form-data"> 
	<br/> 
	<b>Enviar una nueva foto: </b> 
	<br/> 
	<input name="userfile" type="file"> 
	<br/> 
	<input type="submit" value="Enviar"> 
</form>
<?php
	}
?>
