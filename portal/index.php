<?php
	$pathCon = '/var/www/12HD/admin/libs/conexao/db.php';
	$pathLayout = "html/layout.php";

	if (file_exists($pathCon))
		require_once $pathCon; 
	else
		echo "Arquivo de Conexão não localizado";

	if (file_exists($pathLayout))
		require_once $pathLayout; 
	else
		echo "Arquivo de layout não localizado";
?>
