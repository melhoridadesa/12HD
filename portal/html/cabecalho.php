
<?php
$arrayName = array(['link' => 'home',"titulo" => 'Quem somos'],['link' => 'Teste',"titulo" => 'Contato'],);
?>

<tr>
	<td>LOGO</td>
	<td>
		<ul>
			<?php foreach ($arrayName as $key => $value):  ?>

			<li><a href="?page=<?php  echo $value['link'] ?>"> <?php  echo $value['titulo'] ?> </a></li>
			<?php endforeach;?>

		</ul>
	</td>
</tr>
