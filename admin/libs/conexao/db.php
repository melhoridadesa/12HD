<?php

function ConexaoBD($host, $user, $pass, $banco, $sql)
{

	if (strlen($host) == 0 || $host == "*" || !is_string($host)) {
		return "Por favor informar o host";
	}
	elseif (strlen($user) == 0 || $user == "*" || !is_string($user)) {
		return "Por favor informar o usuario";
	}
	elseif (strlen($pass) == 0 || $pass == "*" || !is_string($pass)) {
		return "Por favor informar o password";
	}
	elseif (strlen($banco) == 0 || $banco == "*" || !is_string($banco)) {
		return "Por favor informar o banco de dados";
	}
	elseif (strlen($sql) == 0 || $sql == "*" || !is_string($sql)) {
		return "Por favor informar a sql";
	}
	else{
		$conexao = mysqli_connect($host, $user, $pass, $banco);
		if (!$resultado = mysqli_query($conexao, $sql)) {
			printf("<br>MYSQL Errormessage: %s\n", mysqli_error($conexao));
		}
		return $resultado;
	}
}
