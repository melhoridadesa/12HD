<?php

require('../crud/cadMenu.php');

$link = $_POST['link'];
$titulo = $_POST['titulo'];
$posicao = $_POST['posicao'];
$corpo = $_POST['corpo'];
$ativo = 1;
$data = date("Y-m-d H:i:s");

CadastraMenu($link, $titulo, $corpo, $ativo, $data, $posicao);