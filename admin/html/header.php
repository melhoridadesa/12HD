<?php 
	
	if(!isset($_SESSION['user'])){
		header("Location:/12HD/admin/libs/login/login.html");
		return;
	}
?>

<div id="header" style="border: 1px solid; width:100%">
	<h1> header </h1>
</div>