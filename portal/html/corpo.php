<?php
	$param = '';
	if (isset($_GET['page']) && !empty($_GET['page']) && is_numeric($_GET['page']) && ($_GET['page']==3 || $_GET['page']==4)){
		if ($_GET['page']==3)
<<<<<<< HEAD
			if(file_exists('/var/www/12HD/admin/libs/crud/cad_responsavel.php')){
			require "/var/www/12HD/admin/libs/crud/cad_responsavel.php";}
			else{
				echo 'Pagina nao existe';
			}
		
=======
			$responsavel = "/var/www/12HD/admin/libs/crud/cad_responsavel.php";
			if(isset(require $responsavel)){
				require_once $responsavel;
				echo "teste";
			}

			else{

			}
>>>>>>> 6c4c82503bafb472a7ccc038618049732e833835
	}else{
		if(isset($_GET['page']) && !empty($_GET['page']) && is_numeric($_GET['page']))
			$param = 'and id='. $_GET['page'];
		else 
			$param = '';
		
		$resultado = ConexaoBD('localhost', 'root', '123456', 'MelhorIdadeSA', 'select titulo,corpo from Pagina where ativo=1 '. $param .' order by posicao asc, datahoraupdate desc limit 1');
		$linha = mysqli_fetch_array($resultado,MYSQLI_ASSOC);
		echo '<h1>'.$linha['titulo'].'</h1>';
		echo '</br>';
		echo $linha['corpo'];
	}
?>
