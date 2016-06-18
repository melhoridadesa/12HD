<?php 
$filename = $_SERVER["DOCUMENT_ROOT"] . "/12HD/admin/libs/crud/visMenu.php";

if (file_exists($filename)) {
	require_once $_SERVER["DOCUMENT_ROOT"]."/12HD/admin/libs/crud/visMenu.php";
}
else{
	echo "Arquivo visMenu.php nao existe";
}

$row = VisualizaMenu();

?>

<div class="content">
	<div class="new">
		<h3>Novo campo</h3>
		<form id="form-menu" action="../libs/validacao/cadMenu.php" method="post">
			<span>link</span><br>
			<input type="text" name="link" placeholder="insira o link"><br>

			<span>Titulo</span><br>
			<input type="text" name="titulo" placeholder="insira o titulo"><br>
			
			<span>posicao</span><br>
			<input type="number" name="posicao" value="1"><br>
			

			<span>texto</span><br>
			<textarea rows="4" cols="50" name="corpo">
			</textarea>

			<input type="submit" name="salvar" value="Salvar"><br>

		</form>
	</div>	

	<div class="list-menu">
		<ul>
			<?php foreach($row as $valor):?>
				
				<li>
					<span><?php echo $valor['Link'] . ' - ' . $valor['Titulo'];?>
					<a href="<?php echo 'layout.php?page=edit_menu&id='.$valor['Id']?>">editar</a>
					<a href="<?php echo 'link?id='.$valor['Id']?>">deletar</a>
				</li>
			<?php endforeach;?>
		<ul>
	</div>
	</div>

</div>

