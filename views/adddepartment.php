<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Add Department</title>
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
    <h2 class="mb-4">Add Department</h2>
    <form action="/add-department" method="POST">
        <div class="form-group">
            <label for="name">Department Name</label>
            <input type="text" class="form-control bg-secondary text-white" id="name" name="name" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Department</button>
    </form>
</div>
</body>
</html>
