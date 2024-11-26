<?php
// Autor: Marcos Esteban Godoy

class Database {
    private $host = 'localhost';
    private $dbName = 'MIPROYECTO';
    private $username = 'postgres'; // Usuario de PostgreSQL
    private $password = 'password'; // Cambiar según tu configuración
    private $conn;

    public function __construct() {
        try {
            $this->conn = new PDO("pgsql:host=$this->host;dbname=$this->dbName", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public function query($sql, $params = []) {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }

    public function insert($sql, $params) {
        $this->query($sql, $params);
        return $this->conn->lastInsertId(); // Retorna el ID generado
    }

    public function update($sql, $params) {
        $this->query($sql, $params);
    }

    public function delete($sql, $params) {
        $this->query($sql, $params);
    }

    public function select($sql, $params = []) {
        return $this->query($sql, $params)->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>

