<?php
require $_SERVER["DOCUMENT_ROOT"]."/12HD/admin/libs/crud/editMenu.php";

$id = $_GET['id'];

$row = EditaMenu($id);

?>

<div class="content">
	<div class="new">
		<h3>Editar Menu</h3>
		<form id="form-menu" action="../libs/validacao/editMenu.php?id=<?php echo $id;?>" method="post">
			<?php foreach($row as $valor):?>
			<span>link</span><br>
			<input type="text" name="link" value="<?php echo $valor['Link'];?>"><br>

			<span>Titulo</span><br>
			<input type="text" name="titulo" value="<?php echo $valor['Titulo'];?>"><br>

			<span>posicao</span><br>
			<input type="number" name="posicao" value="<?php echo $valor['Posicao'];?>"><br>

			<span>Status</span><br>
			<?php
				if ($valor['Ativo'] == 1) {
					$selecaoAtivo = "selected='selected'";
					$selecaoInativo = "";
				}
				else{
					$selecaoInativo = "selected='selected'";
					$selecaoAtivo = "";
				}
			?>
			<select name="ativo">
				<option value="1" <?php echo $selecaoAtivo;?>>Ativo</option>
				<option value="0" <?php echo $selecaoInativo;?>>Inativo</option>
			</select>
			<br>
			<span>texto</span><br>
			<textarea rows="4" cols="50" name="corpo">
				<?php echo $valor['Corpo'];?>
			</textarea>
			<?php endforeach;?>

			<input type="submit" name="salvar" value="Salvar"><br>

		</form>
	</div>	
</div>