<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="" rel="stylesheet">
    <title>User List</title>
</head>
<body>
<div class="container">
    <h1>User List</h1>
    <ul class="list-group">
        <?php if (isset($users) && count($users) > 0): ?>
            <?php foreach ($users as $user): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="/user/<?= $user['id'] ?>"><?= $user['name'] ?> - <?= $user['email'] ?></a>
                    <form action="/delete-user" method="POST" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $user['id'] ?>">
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <li class="list-group-item">No users available</li>
        <?php endif; ?>
    </ul>
</div>
</body>
</html>
