<?php
require('/var/www/12HD/admin/libs/conexao/db.php');

function VisualizaMenu()
{
	$sql = "SELECT * FROM Pagina";

	$funcao = ConexaoBD("localhost", "root", "123456", "MelhorIdadeSA", $sql);

	if (mysqli_num_rows($funcao) > 0) {

		return $funcao;
	    
	} else {
	    echo "0 Resultado";
	}
}