<?php $array = [
			'lista' => [
				'titulo' => 'teste1',
				'id'	=> 1
			],
			'lista1' => [
				'titulo' => 'teste2',
				'id'	=> 2
			],
			'lista3' => [
				'titulo' => 'teste3',
				'id'	=> 2
			]
		];

?>

<div class="content">

	<ul class="responsaveis lista">
		<?php foreach($array as $key => $val):?>
			<li><?php echo $val['titulo']?></li>
		<?php endforeach;?>
	</ul>
</div>