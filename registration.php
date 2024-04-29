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

<div class="container my-5">
    <form method="post" action="operator.php" class="mt-auto me-auto ms-auto w-50">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="fname" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Password (Alphanumeric, at least 6 characters, no spaces)</label>
            <div class="input-group">
                <input type="password" class="form-control" id="password" name="password" pattern="^(?=\S*[a-zA-Z0-9])(?=\S{6,})\S*$" title="Password must be alphanumeric, at least 6 characters long, and contain no spaces" required>
                <button class="btn btn-outline-secondary" type="button" onclick="togglePassword()">Show</button>
            </div>
        </div>
        <button class="btn btn-primary" name="register">Register</button>
    </form>
    <br>

    <div class="w-50 mt-auto me-auto ms-auto">
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function togglePassword() {
        var passwordField = document.getElementById("password");
        if (passwordField.type === "password") {
            passwordField.type = "text";
        } else {
            passwordField.type = "password";
        }
    }
</script>
</body>
</html>

