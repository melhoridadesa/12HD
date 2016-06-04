<?php 
		$array = [
			'lista' => [
				'titulo' => 'teste1',
				'id'	=> 1
			],
			'lista1' => [
				'titulo' => 'teste2',
				'id'	=> 2
			]
		];

?>

<div class="content">
	<div class="new">
		<h3>Novo campo</h3>
		<form id="form-menu" action="../../libs/validacao/cadMenu.php" method="post">
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
			<?php foreach($array as $key => $val):?>
				
				<li>
					<span><?php echo $val['titulo'];?>
					<a href="<?php echo 'http://localhost/12hd/admin/index.php?page=edit_menu&id='.$val['id']?>">editar</a>
					<a href="<?php echo 'link?id='.$val['id']?>">deletar</a>
				</li>
			<?php endforeach;?>
		<ul>
	</div>
	</div>

</div>

