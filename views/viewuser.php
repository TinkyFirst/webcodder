<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.min.css" rel="stylesheet">
    <title>View User</title>
</head>
<body>
<div class="container">
    <h1>View User</h1>
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
