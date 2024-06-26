<?php

namespace app\Controller;

class UserController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function listUsers() {
        $users = $this->model->getAllUsers();
        include __DIR__ . '/../../views/userlist.php';
    }

    public function addUserForm() {
        $departments = $this->model->getAllDepartments();
        include __DIR__ . '/../../views/adduser.php';
    }

    public function addUser($email, $name, $address, $phone, $comments, $departmentId) {
        $this->model->addUser($email, $name, $address, $phone, $comments, $departmentId);
        header('Location: /users');
    }
    public function viewUser($id) {
        $user = $this->model->getUserById($id);
        include __DIR__ . '/../../views/viewuser.php';
    }
    public function deleteUser($id) {
        $this->model->deleteUser($id);
        header('Location: /users');
    }

}
