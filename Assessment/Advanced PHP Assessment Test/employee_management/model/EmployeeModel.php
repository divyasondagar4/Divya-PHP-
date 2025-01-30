<?php
require 'database.php';

class EmployeeModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function insertEmployee($data) {
        $stmt = $this->db->getConnection()->prepare("INSERT INTO employees (first_name, last_name, email, mobile, address, gender, password) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $data['first_name'], $data['last_name'], $data['email'], $data['mobile'], $data['address'], $data['gender'], $data['password']);
        $stmt->execute();
    }

    public function getAllEmployees() {
        $result = $this->db->getConnection()->query("SELECT * FROM employees");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getEmployeeById($id) {
        $stmt = $this->db->getConnection()->prepare("SELECT * FROM employees WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function updateEmployee($id, $data) {
        $stmt = $this->db->getConnection()->prepare("UPDATE employees SET first_name = ?, last_name = ?, email = ?, mobile = ?, address = ?, gender = ? WHERE id = ?");
        $stmt->bind_param("ssssssi", $data['first_name'], $data['last_name'], $data['email'], $data['mobile'], $data['address'], $data['gender'], $id);
        $stmt->execute();
    }

    public function deleteEmployee($id) {
        $stmt = $this->db->getConnection()->prepare("DELETE FROM employees WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
}
?>