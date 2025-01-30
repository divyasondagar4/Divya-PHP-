<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Edit Employee</h2>
    <form method="POST" action="index.php?action=update">
        <input type="hidden" name="id" value="<?= $employee['id'] ?>">
        <div class="mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="<?= $employee['first_name'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="<?= $employee['last_name'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= $employee['email'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="mobile" class="form-label">Mobile</label>
            <input type="text" class="form-control" id="mobile" name="mobile" value="<?= $employee['mobile'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea class="form-control" id="address" name="address" required><?= $employee['address'] ?></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Gender</label><br>
            <input type="radio" id="male" name="gender" value="Male" <?= $employee['gender'] == 'Male' ? 'checked' : '' ?> required> <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="Female" <?= $employee['gender'] == 'Female' ? 'checked' : '' ?> required> <label for="female">Female</label>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</body>
</html>