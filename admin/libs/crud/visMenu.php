<?php
require_once('/var/www/12HD/admin/libs/conexao/db.php');

function VisualizaMenu()
{
	$sql = "SELECT * FROM Pagina WHERE Id not in (3, 4)";

	$funcao = ConexaoBD("localhost", "root", "123456", "MelhorIdadeSA", $sql);

	if ($funcao == true) {
		
		if (mysqli_num_rows($funcao) > 0){

			return $funcao;
		    
		} else {
		    echo "0 Resultado";
		}
	}
	else{
		echo "Erro ao conectar com o banco de dados";
	}
}
