<?php 	$id = (isset($_GET['id'])) ? $_GET['id'] : '';?>

<?php $menu = ['link' => 'teste1', 'title' => 'link teste'.$id]; ?>

<div class="content">
	<div class="new">
		<h3>Editar Menu</h3>
		<form id="form-menu" action="#" method="post">
			<span>link</span><br>
			<input type="text" name="link" value="<?php echo $menu['title'];?>"><br>

			<span>Titulo</span><br>
			<input type="text" name="titulo" value="<?php echo $menu['link'];?>"><br>

			<span>posicao</span><br>
			<input type="number" name="posicao" value="1"><br>

			<span>texto</span><br>
			<textarea rows="4" cols="50">
			</textarea>


			<input type="submit" name="salvar" value="Salvar"><br>

		</form>
	</div>	
</div>