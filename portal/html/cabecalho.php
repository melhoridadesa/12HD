
<?php

	$resultado = ConexaoBD('localhost', 'root', '123456', 'MelhorIdadeSA1', 'select id, link from Pagina where ativo=1 order by posicao asc, datahoraupdate desc');

?>

<tr>
	<td>LOGO</td>
	<td>
		<ul>
			<?php

			if(mysqli_num_rows($resultado) < 1){
					echo "nenhum dado encontrado";
			}else{
				while($linha = mysqli_fetch_array($resultado,MYSQLI_ASSOC)){ ?>
				<li><a href="?page=<?php  echo $linha['id'] ?>"> <?php  echo $linha['link'] ?> </a></li>
			<?php
				}
			}
			?>
		</ul>
	</td>
</tr>
