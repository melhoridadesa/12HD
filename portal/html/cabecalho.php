
<?php

	require_once '/var/www/12HD/admin/libs/conexao/db.php';
	$resultado = ConexaoBD('localhost', 'root', '123456', 'MelhorIdadeSA', 'select id, link from Pagina where ativo=1 order by posicao asc, datahoraupdate desc');

?>

<tr>
	<td>LOGO</td>
	<td>
		<ul>
			<?php

			if(!$resultado){
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
