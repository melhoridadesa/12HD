<?php
require_once('/var/www/12HD/admin/libs/conexao/db.php');

function CadastraMenu($link, $titulo, $corpo, $ativo, $data, $posicao)
{
	$sql = "INSERT INTO Pagina (Link, Titulo, Corpo, Ativo, DataHoraUpdate, Posicao) VALUES ('$link', '$titulo', '$corpo', '$ativo', '$data', '$posicao')";

	$funcao = ConexaoBD("localhost", "root", "123456", "MelhorIdadeSA", $sql);

	if ($funcao) {
		header("Location:http://localhost/12HD/admin/html/layout.php?page=lista");
	} else {
    	echo "Erro ao inserir o cadastro";
	}
}
