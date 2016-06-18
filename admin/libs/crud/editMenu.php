<?php
require_once('/var/www/12HD/admin/libs/conexao/db.php');

function EditaMenu($id)
{
	$sql = "SELECT * FROM Pagina WHERE Id='$id'";

	$funcao = ConexaoBD("localhost", "root", "123456", "MelhorIdadeSA", $sql);

	if (mysqli_num_rows($funcao) > 0) {

		return $funcao;
	    
	} else {
	    echo "0 Resultado";
	}
}

function UpdateMenu($link, $titulo, $posicao, $ativo, $corpo, $data, $id)
{

	$sql = "UPDATE Pagina SET Link='$link', Titulo='$titulo', Posicao='$posicao', Ativo=$ativo, Corpo='$corpo', DataHoraUpdate='$data' WHERE Id='$id'";

	$funcao = ConexaoBD("localhost", "root", "123456", "MelhorIdadeSA", $sql);

	if ($funcao) {
		header("Location:http://localhost/12HD/admin/html/layout.php?page=lista");
	} else {
    	echo "Erro ao fazer update o cadastro";
	}
}
