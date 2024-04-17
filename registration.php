<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include('include/navbar.php') ?>
    <div class="container my-5">
        <form method="post" action="operator.php" class="mt-auto me-auto ms-auto w-50">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="fname">
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button class="btn btn-primary" name="register">Register</button>
        </form>
        <br>

        <div class="w-50 mt-auto me-auto ms-auto">
            <p>Already have an account? <a href="login.php">login</a></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>