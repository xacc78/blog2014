<section>
	<?php
	if(isset($_SESSION['nickname']))
		{
		$nombredefinitivo = md5($_SESSION['nickname']."lalala".".jpg");
		
	//echo $nombredefinitivo;
	
		if(file_exists(RUTA_FOTOS.$nombredefinitivo))
			{
			echo "<img src='../fotos/$nombredefinitivo' width='200' alt='' class='left' />";
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