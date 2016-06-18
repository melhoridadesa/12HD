<?php 
	session_start();
	if(!isset($_SESSION['user'])){
		header("Location:/12HD/admin/libs/login/login.html");
		return;
	}
?>


<html>
	<head>	
		<meta charset="utf-8">
		<title>admin</title>

		<link rel="stylesheet" type="text/css" href="/12HD/admin/html/css/admin.css">
	</head>
	<body>
		<header>
			<?php if(file_exists("header.php")){require_once "header.php";}else{ echo "arquivo header.php nao existe"; }?>
		</header>
		<div id="menu">
			<ul class="menu lista">
				<li><a href="layout.php?page=menu">cadastrar menu</a></li>
				<li><a href="layout.php?page=lista">lista de responsaveis</a></li>
				<li><a href="layout.php?page=relatorio">Relatorio</a></li>
			</ul>
		</div>
		<content>
			<?php 	if(file_exists("content.php")){require_once "content.php";}else{ echo "arquivo content.php nao existe"; } ?>
		</content>

		<footer>
			<?php if(file_exists("footer.php")){require_once "footer.php";}else{ echo "arquivo footer.php nao existe"; }?>
		</footer>
		
	</body>
<html>
