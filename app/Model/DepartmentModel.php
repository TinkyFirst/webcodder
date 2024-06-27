<?php

namespace app\Model;

class DepartmentModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllDepartments() {
        $query = "SELECT * FROM departments";
        $result = $this->db->query($query);
        return $result->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function addDepartment($name) {
        $query = "INSERT INTO departments (name) VALUES (?)";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$name]);
    }

    public function deleteDepartment($id) {
        $query = "DELETE FROM departments WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$id]);
    }
}
