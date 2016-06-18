<?php 
	$path = "/var/www/12HD/admin/libs/conexao/db.php";
	if(file_exists($path)){
		require_once $path;
	}else{
		echo "conexao nao existe";
	}
	
    $login = $_POST['login'];
    $entrar = $_POST['entrar'];
    $senha = $_POST['senha'];
    
        if (isset($entrar)) {
			
        	$host = 'localhost';
			$user = 'root';
			$pass = '123456';
			$banco = 'MelhorIdadeSA';
			$query = "SELECT Usuario,Senha, Perfil FROM Usuarios WHERE Usuario = '$login' AND Senha = '$senha'";
        	$verifica = ConexaoBD($host, $user, $pass, $banco, $query);
        	
            
            if (mysqli_num_rows($verifica)<=0){
            echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='/12HD/admin/libs/login/login.html';</script>";
                    return;
            }else{
            		session_start();
            		while( $data = mysqli_fetch_assoc($verifica)){
            			unset($data['Senha']);
            			$_SESSION['user'] = $data;
            		}
            		
                    setcookie("login",$login);
                    
                    header("Location:/12HD/admin/html/layout.php?page=lista");
           }
        }
?>
