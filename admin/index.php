<?php 
	
	$file_connect = (file_exists("libs/conexao/db.php")) ? "libs/conexao/db.php" : null;
	$file_login = (file_exists("libs/login/login.html")) ? "libs/login/login.html" : null;
	
	if($file_connect && $file_login){
		require_once $file_connect;
	 	require_once $file_login;
	}
