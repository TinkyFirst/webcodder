<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Department List</title>
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
    <h2 class="mb-4">Department List</h2>
    <ul class="list-group">
        <?php if (isset($departments) && count($departments) > 0): ?>
            <?php foreach ($departments as $department): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center bg-secondary">
                    <?= $department['name'] ?>
                    <form action="/delete-department" method="POST" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $department['id'] ?>">
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <li class="list-group-item bg-secondary">No departments available</li>
        <?php endif; ?>
    </ul>
</div>
</body>
</html>
