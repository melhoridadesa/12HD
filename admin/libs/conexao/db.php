<?php

function ConexaoBD($host, $user, $pass, $banco, $sql)
{

	if (strlen($host) == 0 || $host == "*" || !is_string($host)) {
<<<<<<< HEAD
		return ("Por favor informar o host");
	}
	elseif (strlen($user) == 0 || $user == "*" || !is_string($user)) {
		return ("Por favor informar o usuario");
	}
	elseif (strlen($pass) == 0 || $pass == "*" || !is_string($pass)) {
		return ("Por favor informar o password");
	}
	elseif (strlen($banco) == 0 || $banco == "*" || !is_string($banco)) {
		return ("Por favor informar o banco de dados");
	}
	elseif (strlen($sql) == 0 || $sql == "*" || !is_string($sql)) {
		return
		("Por favor informar a sql");
	}
	else{
		$conexao = mysqli_connect($host, $user, $pass, $banco) return (mysqli_error());
		if (!$resultado = mysqli_query($conexao, $sql)) {
			printf("<br>MYSQL Errormessage: %s\n", mysqli_error($conexao));
=======
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

		if (mysqli_connect_error()) {
            die('Conexao Falhou (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
        }
        else
        {

			if (mysqli_connect_errno()) {
	    		printf("Conexao Falhou: %s\n", mysqli_connect_error());
	    	exit();
			}
			else
			{

				if(!$conexao){
					return false;
				}
				else{
					if (!$resultado = mysqli_query($conexao, $sql)) {
						printf("<br>MYSQL Errormessage: %s\n", mysqli_error($conexao));
					}
					return $resultado;
				}
			}
>>>>>>> edfd506f799277a935c2a44d1db15a412925224a
		}
	}
}
