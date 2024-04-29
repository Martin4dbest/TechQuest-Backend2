<?php
    session_start();
    include('connectdb.php');

    // Check if the user is logged in
    if(!isset($_SESSION['id'])) {
        // Redirect to login page if user is not logged in
        header("Location: login.php");
        exit();
    }

?>

<head>
    <?php require_once('layout.php') ?>
    <style>
        table td,th{
            padding: 10px;
        }
    </style>
</head>

<div class="container p-5 my-5">
    <?php
        $userid = $_SESSION['id'];
        $get_info = mysqli_query($connectdb, "SELECT * FROM `registration` WHERE id='$userid'");
        $fetch_info = mysqli_fetch_array($get_info);
    ?>
    <table style="width: 60%;" class="table-striped table-bordered p-2">
        <tr class="bg-danger text-light">
           <td colspan="2"><h3><?php echo $fetch_info['name'] ?>'s Profile</h3></td>
        </tr>

        <tr>
            <th>Name</th>
            <td><?php echo $fetch_info['name'] ?></td>
        </tr>

        <tr>
            <th>Email</th>
            <td><?php echo $fetch_info['email'] ?></td>
        </tr>
    </table>
</div>

<div>
        <?php include('include/dash-nav.php') ?>
    </div>

    <div class="text-center my-5">
        <a href="logout.php" class="btn btn-danger w-50">Logout</a>
    </div>