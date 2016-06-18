<?php 
	
	if(!isset($_SESSION['user'])){
		header("Location:/12HD/admin/libs/login/login.html");
		return;
	}
	
	
	$page = (isset($_GET['page'])) ? $_GET['page'] : 'menu';
	
	$file = (file_exists("pages/{$page}.php")) ? "pages/{$page}.php" : null;
	
	
	if(!empty($file)){
		require_once $file;
	}else { 
		echo "arqvui nao existe";
		return ;
	}
	