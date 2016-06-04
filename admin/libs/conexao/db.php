<?php

function ConexaoBD($host, $user, $pass, $banco)
{

	if (strlen($host) == 0 || $host == "*" || !is_string($host)) {
		die("Por favor informar o host");
	}
	elseif (strlen($user) == 0 || $user == "*" || !is_string($user)) {
		die("Por favor informar o usuario");
	}
	elseif (strlen($pass) == 0 || $pass == "*" || !is_string($pass)) {
		die("Por favor informar o password");
	}
	elseif (strlen($banco) == 0 || $banco == "*" || !is_string($banco)) {
		die("Por favor informar o banco de dados");
	}
	else{
		return $conexao = mysqli_connect($host, $user, $pass, $banco) or die(mysqli_error());
	}
}