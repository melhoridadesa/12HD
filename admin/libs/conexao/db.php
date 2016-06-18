<?php
function ConexaoBD($host, $user, $pass, $banco, $sql)
{
	if (strlen($host) == 0 || $host == "*" || !is_string($host)) {
		return false;
	}
	elseif (strlen($user) == 0 || $user == "*" || !is_string($user)) {
		return false;
	}
	elseif (strlen($pass) == 0 || $pass == "*" || !is_string($pass)) {
		return false;
	}
	elseif (strlen($banco) == 0 || $banco == "*" || !is_string($banco)) {
		return false;
	}
	elseif (strlen($sql) == 0 || $sql == "*" || !is_string($sql)) {
		return false;
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
		}
	}
}