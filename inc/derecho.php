<section>
	<?php
	if (!empty($_SESSION['nickname']))
	{
		$nombredefinitivo = md5($_SESSION['nickname']."lalala".".jpg");
		if (file_exists(RUTA_FOTOS.$nombredefinitivo))
		{
			echo "<h2>Your profile picture</h2>";
			echo '<ul class="small-image-list">';
			echo '<li><img src="../fotos/'.$nombredefinitivo.'" alt="'.$_SESSION['nickname'].'?'.time().'" class="left" />';
			echo '<p>IP address: '.$_SERVER['REMOTE_ADDR'];
			echo '</li></ul>';
		}
			
	}
	else
	{
	?>
	<h2>People Online</h2>
	<ul class="small-image-list">
		<li>
			<a href="#"><img src="css/images/pic2.jpg" alt="" class="left" /></a>
			<h4>Jane Anderson</h4>
			<p>Varius nibh. Suspendisse vitae magna eget et amet mollis justo facilisis amet quis.</p>
		</li>
		<li>
			<a href="#"><img src="css/images/pic1.jpg" alt="" class="left" /></a>
			<h4>James Doe</h4>
			<p>Vitae magna eget odio amet mollis justo facilisis amet quis. Sed sagittis consequat.</p>
		</li>
	</ul>
	<?php
	}
	?>
</section>