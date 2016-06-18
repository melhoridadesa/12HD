
<?php 

	require_once('/var/www/12HD/admin/libs/conexao/db.php');

    $login = (isset($_POST['login'])) ? $_POST['login'] : null;
    $entrar = (isset($_POST['entrar'])) ? $_POST['entrar'] : null;
    $senha = (isset($_POST['senha'])) ? $_POST['senha'] : null;
    
    
        if (isset($entrar)) {
        	
        	$query = "SELECT Usuario,Senha FROM Usuarios WHERE Usuario = '$login' AND Senha = '$senha'";
        	$conexao = ConexaoBD("localhost","root","123456","MelhorIdadeSA",$query);
        	
            
            if (mysql_num_rows($conexao)<=0){
            echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='/12HD/admin/libs/login/login.html';</script>";
                    die();
            }else{
                    	setcookie("login",$login);
                    	header("Location:/12HD/admin/html/layout.php?page=lista");
                    }
        }
?>




	