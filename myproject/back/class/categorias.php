<?php
// Autor: Marcos Esteban Godoy

class Categoria {
    private $id;
    private $nombre;
    private $descripcion;

    public function __construct($nombre, $descripcion, $id = null) {
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->id = $id;
    }

    public function guardar($db) {
        if ($this->id) {
            $db->update("UPDATE categorias SET nombre = ?, descripcion = ? WHERE id = ?", [
                $this->nombre, $this->descripcion, $this->id
            ]);
        } else {
            $this->id = $db->insert("INSERT INTO categorias (nombre, descripcion) VALUES (?, ?)", [
                $this->nombre, $this->descripcion
            ]);
        }
    }

    public function eliminar($db) {
        if ($this->id) {
            $db->delete("DELETE FROM categorias WHERE id = ?", [$this->id]);
        }
    }
}
?>
