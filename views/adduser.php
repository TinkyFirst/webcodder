<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.min.css" rel="stylesheet">
    <title>Add User</title>
</head>
<body>
<div class="container">
    <h1>Add User</h1>
    <form action="/add-user" method="POST">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone">
        </div>
        <div class="form-group">
            <label for="comments">Comments</label>
            <textarea class="form-control" id="comments" name="comments"></textarea>
        </div>
        <div class="form-group">
            <label for="department_id">Department</label>
            <select class="form-control" id="department_id" name="department_id">
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
