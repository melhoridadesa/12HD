<?php
require_once('/var/www/12HD/admin/libs/conexao/db.php');

function DeleteMenu($id)
{
	$link = mysqli_connect("localhost", "root", "123456", "MelhorIdadeSA");

	$sql = "DELETE FROM Pagina WHERE Id='$id'";

	mysqli_query($link, $sql);

	if (mysqli_affected_rows($link) > 0) {
		header("Location:http://localhost/12HD/admin/html/layout.php?page=lista");
	}
	else{
		echo "Erro ao deletar o menu";
	}
}