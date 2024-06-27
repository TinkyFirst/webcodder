<?php

namespace app\Controller;

class DepartmentController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function listDepartments() {
        $departments = $this->model->getAllDepartments();
        include __DIR__ . '/../../views/departmentlist.php';
    }

    public function addDepartmentForm() {
        include __DIR__ . '/../../views/adddepartment.php';
    }

    public function addDepartment($name) {
        $this->model->addDepartment($name);
        header('Location: /departments');
    }

    public function deleteDepartment($id) {
        $this->model->deleteDepartment($id);
        header('Location: /departments');
    }
}
