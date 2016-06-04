<?php

require('../crud/cadMenu.php');

$link = $_POST['link'];
$titulo = $_POST['titulo'];
$posicao = $_POST['posicao'];
$corpo = $_POST['corpo'];
$ativo = 1;
$data = "2016/06/04";

CadastraMenu($link, $titulo, $corpo, $ativo, $data, $posicao);