<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.min.css" rel="stylesheet">
    <title>Department List</title>
</head>
<body>
<div class="container">
    <h1>Department List</h1>
    <ul>
        <?php if (isset($departments) && count($departments) > 0): ?>
            <?php foreach ($departments as $department): ?>
                <li>
                    <?= $department['name'] ?>
                    <form action="/delete-department" method="POST" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $department['id'] ?>">
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>No departments available</li>
        <?php endif; ?>
    </ul>
    <a href="/add-department" class="btn btn-primary">Add Department</a>
</div>
</body>
</html>
