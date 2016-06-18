
<?php 

	if(!isset($_SESSION['user'])){
		header("Location:/12HD/admin/libs/login/login.html");
		return;
	}
	
	$path = $_SERVER["DOCUMENT_ROOT"]."/12HD/admin/libs/crud/visListaCont.php";
	
	if(file_exists($path)){
		require_once $path;
	}
  	$pagina=isset($_GET['pagina'])?$_GET['pagina']:false;
	if (!$pagina) {
		$pagAtual = "1";
	} else {
		$pagAtual = $pagina;
	}

	if(empty(VisualizaResponsaveis()))return;
	
	$inicio = $pagAtual - 1;
	$inicio = $inicio * 10;
	
	$limite = "LIMIT $inicio, 10;";	
	$totalRegistros = mysqli_num_rows(VisualizaResponsaveis());
	$totalPaginas = $totalRegistros/10;
	$row = VisualizaResponsaveis($limite);

	$pagAnterior = $pagAtual - 1;
	$pagSeguinte = $pagAtual + 1;
?>

<div class="content">

	<table class="tabelacontato">
		<tr>
			<th>Nome</th>
			<th>Email</th>
			<th>Mensagem</th>
			<th>Data</th>
			<th>Hora</th>			
		</tr>
		<?php foreach($row as $valor):?>
		<tr>
			<td><?php echo $valor['Nome']?></td>
			<td><?php echo $valor['Email']?></td>
			<td><?php echo $valor['Mensagem']?></td>
			<td><?php echo $valor['Data']?></td>
			<td><?php echo $valor['Hora']?></td>
		</tr>
		<?php endforeach;?>
	</table>
	<ul class="responsaveis lista">
		<li>
		<?php 
			if ($pagAtual>1)
				echo "<a href='?page=contato&pagina=$pagAnterior'> Página Anterior</a>"; 

			if ($pagAtual<$totalPaginas && $pagAtual>1)			
				echo " - ";

			if ($pagAtual<$totalPaginas)
				echo "<a href='?page=contato&pagina=$pagSeguinte'> Próxima Página</a>";
		?>
		</li>		
	</ul>
</div>
