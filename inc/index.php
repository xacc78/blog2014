<?php
	
	$sql = sprintf("select id,title,content,tags from messages order by id desc limit 15");
	
	$resultados = mysql_query($sql, $conexion) or die(mysql_error());
	
	if($resultados != "")
		{
		echo '<ul>';
		while($fila = mysql_fetch_assoc($resultados))
			{
			echo "<li>Title: <a href='view.html?postid=".$fila['id']."'>".$fila['title']."</a></li>";
			}
		echo '</ul>';
		}
	else
		{
?>
	<h1>PHP Blog 2013-2014.</h1>
	<pre>

	Welcome to our Blog System developed using PHP and MySQL.

	Be gentle and enjoy your stay here.


	IES San Clemente.
	Santiago de Compostela
	(A Coruña)
	Spain.
	</pre>
	
<?php
		}
?>