<?php
require_once __DIR__ . '/../core/database.php';

class productModel {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getAllProducts() {
        $stmt = $this->db->prepare('SELECT * FROM product ORDER BY ID DESC');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function add($name, $price, $image) {
        $stmt = $this->db->prepare("INSERT INTO product (Name, Price, Image) VALUES (?, ?, ?)");
        $stmt->execute([$name, $price, $image]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM product WHERE ID = ?");
        $stmt->execute([$id]);
    }
}
