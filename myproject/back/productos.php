<?php
require_once '../class/autoload.php';

if ($_POST) {
    $db = new Database();
    $producto = new Producto($_POST['nombre'], $_POST['descripcion'], $_POST['precio'], $_POST['categoria_id']);
    $producto->guardar($db);
    header('Location: lista_productos.php');
}
?>
