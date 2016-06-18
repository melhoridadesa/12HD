<?php 

	$page = (isset($_GET['page'])) ? $_GET['page'] : 'menu';
	
	$file = (file_exists("pages/{$page}.php")) ? "pages/{$page}.php" : null;
	
	
	if(!empty($file)){
		require_once $file;
	}else {
		echo "arqvui nao existe";
	}
