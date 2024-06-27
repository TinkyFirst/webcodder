<?php

spl_autoload_register(function ($class) {
    $prefix = 'app\\';
    $base_dir = __DIR__ . '/../app/';
    $len = strlen($prefix);

    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

$config = require __DIR__ . '/../config/database.php';
try {
    $db = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'], $config['username'], $config['password']);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("DB Connection failed: " . $e->getMessage());
}

$model = new app\Model\UserModel($db);
$departmentModel = new app\Model\DepartmentModel($db);
$userController = new app\Controller\UserController($model);
$departmentController = new app\Controller\DepartmentController($departmentModel);

$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : '';
$url = filter_var($url, FILTER_SANITIZE_URL);
$url = explode('/', $url);

if ($url[0] === '') {
    $userController->listUsers();
} elseif ($url[0] === 'add-user' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $userController->addUserForm();
} elseif ($url[0] === 'add-user' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $userController->addUser($_POST['email'], $_POST['name'], $_POST['address'], $_POST['phone'], $_POST['comments'], $_POST['department_id']);
} elseif ($url[0] === 'users') {
    $userController->listUsers();
} elseif ($url[0] === 'user' && isset($url[1])) {
    $userController->viewUser($url[1]);
} elseif ($url[0] === 'delete-user' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $userController->deleteUser($_POST['id']);
} elseif ($url[0] === 'departments') {
    $departmentController->listDepartments();
} elseif ($url[0] === 'add-department' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $departmentController->addDepartmentForm();
} elseif ($url[0] === 'add-department' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $departmentController->addDepartment($_POST['name']);
} elseif ($url[0] === 'delete-department' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $departmentController->deleteDepartment($_POST['id']);
} else {
    echo "404 - Page not found";
}
