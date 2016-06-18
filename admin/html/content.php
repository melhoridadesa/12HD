<?php 
	session_start();
	if(!isset($_SESSION['user'])){
		header("Location:/12HD/admin/html/layout.php?page=lista");
	}
	
	
	$page = (isset($_GET['page'])) ? $_GET['page'] : 'menu';
	
	$file = (file_exists("pages/{$page}.php")) ? "pages/{$page}.php" : null;
	
	
	if(!empty($file)){
		require_once $file;
	}else { 
		echo "arqvui nao existe";
	}
	