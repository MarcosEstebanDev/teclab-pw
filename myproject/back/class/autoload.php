<?php
// Autor: Marcos Esteban Godoy

spl_autoload_register(function ($className) {
    $file = __DIR__ . '/' . $className . '.php';
    if (file_exists($file)) {
        require_once $file;
    } else {
        die("La clase $className no pudo ser cargada porque no existe el archivo $file.");
    }
});
?>
