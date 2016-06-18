<?php 
    $login = $_POST['login'];
    $entrar = $_POST['entrar'];
    $senha = $_POST['senha'];
    $connect = mysql_connect('localhost','root','123456');
    $db = mysql_select_db('MelhorIdadeSA');
    
        if (isset($entrar)) {
                      
            $verifica = mysql_query("SELECT Usuario,Senha FROM Usuarios WHERE Usuario = '$login' AND Senha = '$senha'");
           
            
            if (mysql_num_rows($verifica)<=0){
            echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='/12hd/admin/libs/login/login.html';</script>";
                    die();
            }else{
                    	setcookie("login",$login);
                    	header("Location:/12HD/admin/html/layout.php?page=lista");
                    }
        }
?>
