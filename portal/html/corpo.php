<?php
	$param = '';
	if (isset($_GET['page']) && !empty($_GET['page']) && is_numeric($_GET['page']) && ($_GET['page']==3 || $_GET['page']==4)){
		if ($_GET['page']==3)
			require "..\admin\libs\crud\cad_responsavel.php";
		else
			require "..\admin\libs\crud\cad_responsavel.php";
	}else{
		if(isset($_GET['page']) && !empty($_GET['page']) && is_numeric($_GET['page']))
			$param = 'and id='. $_GET['page'];
		else 
			$param = '';
		
		$resultado = ConexaoBD('localhost', 'root', '123456', 'MelhorIdadeSA', 'select corpo from pagina where ativo=1 '. $param .' order by posicao asc, datahoraupdate desc limit 1');
		$linha = mysqli_fetch_array($resultado,MYSQLI_ASSOC);
		echo $linha['corpo'];
	}
?>