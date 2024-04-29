<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Navbar Example</title>
    <link href="path_to_bootstrap.css" rel="stylesheet">
</head>
<body>
<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" title="Take me to website">
            <!--<img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top"> -->
            <img src="images/bootstrap-logo.svg" alt="Bootstrap Logo" width="30" height="24" class="d-inline-block align-text-top">
        </a>
        <div class="nav justify-content-end">
            <?php
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            if (isset($_SESSION['id']) && $_SESSION['id'] > 0) {
                echo "<a href='dashboard.php' class='btn btn-danger'>Dashboard</a>";
            } else {
                echo "<a href='login.php' class='btn btn-dark mx-2'>Login</a>";
                echo "<a href='registration.php' class='btn btn-danger mx-2'>Register</a>";
            }
            ?>
        </div>
    </div>
</nav>
<script src="path_to_bootstrap.js"></script>
</body>
</html>

