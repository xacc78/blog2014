<link rel="stylesheet" type="text/css" href="css/raphaelicons.css" />
<?php

$sql = sprintf("select id,nickname,title,content,tags from messages where id=%s",$_GET['postid']);

$resultados = mysql_query($sql, $conexion) or die(mysql_error());

$fila = mysql_fetch_assoc($resultados);

if(isset($_GET['delete']))
	{
	$sql = sprintf("delete from messages where id=%s",$_GET['postid']);

	mysql_query($sql, $conexion) or die(mysql_error());
	
	}

if(!isset($_GET['edit']))
	{
	if(isset($_SESSION['nickname']) && ($_SESSION['nickname'] == $fila['nickname']))
		{
		echo '<h1>'.$fila['title'].'</h1><a href="view.html?postid='.$fila['id'].'&edit='.$fila['id'].'"><span class="icon">></span></a>|<a id="borrar"href="view.html?postid='.$fila['id'].'&delete='.$fila['id'].'"><span class="icon">D</span></a>';
		echo '<p>'.$fila['content'].'</p>';
		echo '<p>'.$fila['tags'].'</p>';

		}
	 else
		{
		echo '<h1>'.$fila['title'].'</h1>';
		echo '<p>'.$fila['content'].'</p>';
		echo '<p>'.$fila['tags'].'</p>';
		} 
	}
 else
	{
?>
	<form class="formulario" action="" method="post" autocomplete="off">
			Title:<input type="text" name="title" id="title" placeholder="title" maxlength="50" value="<?php echo $fila["title"]?>"/></br>
			Content:<textarea name="content" id="content" placeholder="content" maxlength="800"><?php echo $fila["content"]?></textarea></br>
			Tags:<input type="text" name="tags" id="tags" placeholder="tags" autofocus size="10" maxlength="50" value="<?php echo $fila["tags"]?>"/></br>
			
			<input type="submit" class="controles" value="Send" />
	</form>
<?php
	}
?>
<script>
	window.load = function()
	{
		document.getElementById("borrar").addEventListener('click',function(mievento)
			{
			var borrar = alert("Delete entry?");
			if(borrar) {mievento.preventDefault();}	
			}, true);
	}
</script>
	