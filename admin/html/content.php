<?php 

	$page = (isset($_GET['page'])) ? $_GET['page'] : 'menu';
	
	require_once "pages/{$page}.php";