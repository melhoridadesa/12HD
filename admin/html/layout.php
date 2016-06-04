
<html>
	<head>	
		<meta charset="utf-8">
		<title>admin</title>

		<link rel="stylesheet" type="text/css" href="/12HD/admin/html/css/admin.css">
	</head>
	<body>
		<header>
			<?php 	require_once "header.php"; ?>
		</header>
		<div id="menu">
			<ul class="menu lista">
				<li><a href="http://localhost/12HD/admin/html/layout.php?page=menu">cadastrar menu</a></li>
				<li><a href="http://localhost/12HD/admin/html/layout.php?page=lista">lista de responsaveis</a></li>
				<li><a href="http://localhost/12HD/admin/html/layout.php?page=relatorio">Relatorio</a></li>
			</ul>
		</div>
		<content>
			<?php 	require_once "content.php"; ?>
		</content>

		<footer>
			<?php 	require_once "footer.php"; ?>
		</footer>
		
	</body>
<html>
