<?php

require('../crud/editMenu.php');

$id = $_GET['id'];
$link = $_POST['link'];
$titulo = $_POST['titulo'];
$posicao = $_POST['posicao'];
$ativo = $_POST['ativo'];
$corpo = $_POST['corpo'];
$data = date("Y-m-d H:i:s");

UpdateMenu($link, $titulo, $posicao, $ativo, $corpo, $data, $id);