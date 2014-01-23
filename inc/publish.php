<link rel="stylesheet" type="text/css" href="../web/css/registro.css" />
<?php
	
	if ($_SERVER['REQUEST_METHOD'] == "POST")
		{
	$sql = sprintf("insert into messages(nickname,title,content,tags) values('%s','%s','%s','%s')", mysql_real_escape_string($_SESSION['nickname']), mysql_real_escape_string($_POST['title']), mysql_real_escape_string($_POST['content']), mysql_real_escape_string($_POST[ 'tags']));

	mysql_query($sql, $conexion) or die(mysql_error());
	
	echo 'Message saved!';
		}
	else
		{
?>

<form class="formulario" action="" method="post" autocomplete="off">
			Title:<input type="text" name="title" id="title" placeholder="title" maxlength="50"/></br>
			Content:<textarea name="content" id="content" placeholder="content" maxlength="800"></textarea></br>
			Tags:<input type="text" name="tags" id="tags" placeholder="tags" autofocus size="10" maxlength="50"/></br>
			
			<input type="submit" class="controles" value="Send" />
</form>
<?php
		}
?>
