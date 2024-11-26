<?php
require_once '../class/autoload.php';

if ($_POST) {
    $db = new Database();
    $categoria = new Categoria($_POST['nombre'], $_POST['descripcion']);
    $categoria->guardar($db);
    header('Location: lista_categorias.php');
}
?>
