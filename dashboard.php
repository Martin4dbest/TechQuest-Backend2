
<?php
    // Start the session
    session_start();

    // Include file for database connection
    include('connectdb.php');

    // Check if the user is logged in
    if(!isset($_SESSION['id'])) {
        // Redirect to login page if user is not logged in
        header("Location: login.php");
        exit();
    }

    // Get the user ID from the session
    $userid = $_SESSION['id'];

    // Prepare and execute the query to fetch user information
    $get_info = mysqli_prepare($connectdb, "SELECT * FROM `registration` WHERE id=?");
    mysqli_stmt_bind_param($get_info, "i", $userid);
    mysqli_stmt_execute($get_info);

    // Get the result of the query
    $result = mysqli_stmt_get_result($get_info);

    // Fetch the user data
    $fetch = mysqli_fetch_array($result);
?>


//work




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <?php require_once('layout.php'); ?>
    <style>
        .dash{
            padding: 40px;
        }
    </style>
</head>
<body>
    <div class="container card p-5 bg-light my-5">
        <b class="text-danger">Welcome</b>
        <h2>
            <?php
                // Display user's name if available
                if($fetch) {
                    echo $fetch['name'];
                } else {
                    echo "User information not found";
                }
            ?>
        </h2>
    </div>

    <div>
        <?php include('include/dash-nav.php'); ?>
    </div>

    <div class="text-center my-5">
        <a href="logout.php" class="btn btn-danger w-50">Logout</a>
    </div>
</body>
</html>
