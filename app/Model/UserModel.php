<?php

namespace app\Model;

class UserModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllUsers() {
        $query = "SELECT * FROM users";
        $result = $this->db->query($query);
        return $result->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function addUser($email, $name, $address, $phone, $comments, $departmentId) {
        $query = "INSERT INTO users (email, name, address, phone, comments, department_id) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$email, $name, $address, $phone, $comments, $departmentId]);
    }

    public function getAllDepartments() {
        $query = "SELECT * FROM departments";
        $result = $this->db->query($query);
        return $result->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function getUserById($id) {
        $query = "SELECT * FROM users WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

}
