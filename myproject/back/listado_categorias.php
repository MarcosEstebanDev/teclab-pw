<?php
require_once '../class/autoload.php';

$db = new Database();
$categorias = $db->select("SELECT * FROM categorias");

include '../views/lista_categorias.html';
?>
