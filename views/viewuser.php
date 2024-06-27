<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>View User</title>
</head>
<body class="bg-dark text-white">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">WebCoders</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/users">User List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/add-user">Add User</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/departments">Departments</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/add-department">Add Department</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container mt-5">
    <h2 class="mb-4">View User</h2>
    <?php if (isset($user)): ?>
        <p>Email: <?= $user['email'] ?></p>
        <p>Name: <?= $user['name'] ?></p>
        <p>Address: <?= $user['address'] ?></p>
        <p>Phone: <?= $user['phone'] ?></p>
        <p>Comments: <?= $user['comments'] ?></p>
        <p>Department ID: <?= $user['department_id'] ?></p>
    <?php else: ?>
        <p>User not found.</p>
    <?php endif; ?>
    <a href="/users" class="btn btn-primary">Back to Users</a>
</div>
</body>
</html>
