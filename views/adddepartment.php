<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.min.css" rel="stylesheet">
    <title>Add Department</title>
</head>
<body>
<div class="container">
    <h1>Add Department</h1>
    <form action="/add-department" method="POST">
        <div class="form-group">
            <label for="name">Department Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Department</button>
    </form>
</div>
</body>
</html>
