<?php 
	if(!isset($_SESSION['user'])){
		header("Location:/12HD/admin/libs/login/login.html");
		return;
	}
?>

<div id="footer" style="border: 1px solid; width:100%">
	<h1> footer </h1>
</div>