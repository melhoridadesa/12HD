
<?php 
	require_once $_SERVER["DOCUMENT_ROOT"]."/12HD/admin/libs/crud/visListaResp.php";
	
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

	<ul class="responsaveis lista">
		<?php foreach($row as $valor):?>
			<li><?php echo $valor['ResponsavelNome']?></li>
		<?php endforeach;?>
	</ul>
	<ul class="responsaveis lista">
		<li>
		<?php 
			if ($pagAtual>1)
				echo "<a href='?page=lista&pagina=$pagAnterior'> Página Anterior</a>"; 

			if ($pagAtual<$totalPaginas && $pagAtual>1)			
				echo " - ";

			if ($pagAtual<$totalPaginas)
				echo "<a href='?page=lista&pagina=$pagSeguinte'> Próxima Página</a>";
		?>
		</li>		
	</ul>
</div>
