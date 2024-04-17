<?php
    // Start the session
    session_start();

    // Check if the user is logged in
    if (!isset($_SESSION['id'])) {
        // Redirect to login page if user is not logged in
        header("Location: login.php");
        exit();
    }

    // Include file for database connection
    include('connectdb.php');

    // Check if user has necessary permissions (e.g., admin role) to delete users
    // You need to implement this part according to your application's authorization logic

    // Check if user ID to delete is provided in the URL
    if (isset($_GET['userid']) && is_numeric($_GET['userid'])) {
        $userid_to_delete = $_GET['userid'];

        // Perform deletion
        $delete_query = mysqli_query($connectdb, "DELETE FROM `registration` WHERE id='$userid_to_delete'");

        if ($delete_query) {
            // Deletion successful
            // Redirect to a success page or back to the dashboard
            header("Location: dashboard.php");
            exit();
        } else {
            // Deletion failed
            // Handle the error accordingly, e.g., display an error message
            echo "Error: Failed to delete user.";
        }
    } else {
        // User ID to delete is not provided or invalid
        // Handle the error accordingly, e.g., display an error message
        echo "Error: Invalid user ID.";
    }
?>
