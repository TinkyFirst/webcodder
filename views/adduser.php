<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Add User</title>
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
    <h2 class="mb-4">Add User</h2>
    <form action="/add-user" method="POST">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control bg-secondary text-white" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control bg-secondary text-white" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control bg-secondary text-white" id="address" name="address">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control bg-secondary text-white" id="phone" name="phone">
        </div>
        <div class="form-group">
            <label for="comments">Comments</label>
            <textarea class="form-control bg-secondary text-white" id="comments" name="comments"></textarea>
        </div>
        <div class="form-group">
            <label for="department_id">Department</label>
            <select class="form-control bg-secondary text-white" id="department_id" name="department_id">
                <?php if (isset($departments) && count($departments) > 0): ?>
                    <?php foreach ($departments as $department): ?>
                        <option value="<?= $department['id'] ?>"><?= $department['name'] ?></option>
                    <?php endforeach; ?>
                <?php else: ?>
                    <option>No departments available</option>
                <?php endif; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add User</button>
    </form>
</div>
</body>
</html>
