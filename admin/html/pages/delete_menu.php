<?php
require $_SERVER["DOCUMENT_ROOT"]."/12HD/admin/libs/crud/deleteMenu.php";

$id = $_GET['id'];

$row = DeleteMenu($id);

?>
