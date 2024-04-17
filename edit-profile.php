<?php
    session_start();
    include('connectdb.php');

    if(isset($_POST['update'])){
        $fname = $_POST['fname'];
        $email = $_POST['email'];

        $userid = $_SESSION['id'];
        $update_info = mysqli_query($connectdb, "UPDATE `registration` SET `name`='$fname', `email`='$email' WHERE id='$userid'");

        if($update_info){
            echo "<script>alert('User Info Successfully Updated!')</script>";
            header("Location: dashboard.php");
            exit();
        }else{
            echo "<script>alert('Something went wrong, please try again!')</script>";
        }
    }

    // Fetch user data to pre-fill the form fields
    $userid = $_SESSION['id'];
    $get_info = mysqli_query($connectdb, "SELECT * FROM `registration` WHERE id='$userid'");
    $fetch_info = mysqli_fetch_array($get_info);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <?php require_once('layout.php') ?>
    <style>
        /* Add your custom styles here */
    </style>
</head>
<body>
    <div class="container my-5">
        <form method="post" action="" class="mt-auto me-auto ms-auto w-50">
            <fieldset class="border p-4">
                <legend class="float-none w-auto p-2"><h3><i>Edit Profile</i></h3></legend>
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" value="<?php echo isset($fetch_info['name']) ? $fetch_info['name'] : ''; ?>" class="form-control" name="fname">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" value="<?php echo isset($fetch_info['email']) ? $fetch_info['email'] : ''; ?>" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" disabled value="<?php echo isset($fetch_info['password']) ? $fetch_info['password'] : ''; ?>" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-danger" name="update">Update</button>
            </fieldset>
        </form>
    </div>

    <?php include('include/dash-nav.php') ?>

    <div class="text-center my-5">
        <a href="logout.php" class="btn btn-danger w-50">Logout</a>
    </div>
</body>
</html>
