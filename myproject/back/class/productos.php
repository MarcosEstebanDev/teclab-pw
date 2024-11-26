<?php
// Autor: Marcos Esteban Godoy

class Producto {
    private $id;
    private $nombre;
    private $descripcion;
    private $precio;
    private $categoriaId;

    public function __construct($nombre, $descripcion, $precio, $categoriaId, $id = null) {
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->categoriaId = $categoriaId;
        $this->id = $id;
    }

    public function guardar($db) {
        if ($this->id) {
            $db->update("UPDATE productos SET nombre = ?, descripcion = ?, precio = ?, categoria_id = ? WHERE id = ?", [
                $this->nombre, $this->descripcion, $this->precio, $this->categoriaId, $this->id
            ]);
        } else {
            $this->id = $db->insert("INSERT INTO productos (nombre, descripcion, precio, categoria_id) VALUES (?, ?, ?, ?)", [
                $this->nombre, $this->descripcion, $this->precio, $this->categoriaId
            ]);
        }
    }

    public function eliminar($db) {
        if ($this->id) {
            $db->delete("DELETE FROM productos WHERE id = ?", [$this->id]);
        }
    }
}
?>
