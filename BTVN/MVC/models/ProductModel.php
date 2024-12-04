<?php
class Product {
    private $conn;
    private $table = 'products';

    public $id;
    public $name;
    public $price;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table . " (name, price) VALUES (:name, :price)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':price', $this->price);
        return $stmt->execute();
    }

    public function update() {
        $query = "UPDATE " . $this->table . " SET name = :name, price = :price WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':price', $this->price);
        return $stmt->execute();
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $this->id);
        return $stmt->execute();
    }

    public function getOne() {
        $query = "SELECT * FROM " . $this->table . " WHERE id = :id LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
