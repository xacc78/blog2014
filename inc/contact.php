<?php
        
        if(isset($_SESSION['captcha']) && isset($_POST['captcha']) && $_SESSION['captcha'] == $_POST['captcha'])
                {
                $contenido = 'Email del usuario: '.$_POST['correo'].' Mensaje: '.$_POST['content'];
                enviar_correo('Juan Antonio','juanantonio@juanantoniomosquera.local',$_POST['nombre'], $contenido);
                echo 'Message sended!';
                }
        else
                {

?>

<section>
        <p>Juan Antonio Mosquera Casais</p>
        <p>IES San Clemente</p>
        <img src="../web/email.php"/>
    
        <form class="formulario" action="" method="post" autocomplete="off">
			Nombre:<input type="text" name="nombre" id="nombre" placeholder="Nombre" maxlength="50"/></br>
                        Email:<input type="text" name="correo" id="correo" placeholder="correo@correo.com" maxlength="100"/></br>
			Texto:<textarea name="content" id="content" placeholder="content" maxlength="800"></textarea></br>
                        <img src="../web/captcha.php"/><br/>
                        Escribe captcha:<input type="text" name="captcha" id="captcha"/><br/>
	
			<input type="submit" class="controles" value="Send" />
        </form>
</section>

<?php
        
                }
?>
