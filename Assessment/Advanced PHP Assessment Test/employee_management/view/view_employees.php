<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Employees</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Employee List</h2>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($employees as $employee): ?>
            <tr>
                <td><?= $employee['id'] ?></td>
                <td><?= $employee['first_name'] ?></td>
                <td><?= $employee['last_name'] ?></td>
                <td><?= $employee['email'] ?></td>
                <td><?= $employee['mobile'] ?></td>
                <td><?= $employee['address'] ?></td>
                <td><?= $employee['gender'] ?></td>
                <td>
                    <a href="index.php?action=edit&id=<?= $employee['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="index.php?action=delete&id=<?= $employee['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>