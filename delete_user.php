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

// Check if user ID to delete is provided in the URL
if (isset($_GET['userid']) && is_numeric($_GET['userid'])) {
    $userid_to_delete = $_GET['userid'];

    // Check if the delete form is submitted
    if (isset($_POST['confirm_delete'])) {
        // Perform deletion
        $delete_query = mysqli_query($connectdb, "DELETE FROM `registration` WHERE id='$userid_to_delete'");

        if ($delete_query) {
            // Deletion successful
            header("Location: login.php"); // Redirect to login page
            exit();
        } else {
            // Deletion failed
            // Handle the error accordingly, e.g., display an error message
            echo "Error: Failed to delete user.";
        }
    }

    // Display confirmation dialog with styled buttons
    echo "<style>
            .confirmation-form {
                text-align: center;
                margin-top: 50px;
            }
            .confirmation-form button, .confirmation-form a {
                padding: 10px 40px;
                margin: 0 10px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                display: inline-block;
                text-decoration: none;
                color: white;
            }
            .delete-btn {
                background-color: red;
            }
            .cancel-btn {
                background-color: green;
            }
          </style>";
    echo "<form class='confirmation-form' method='post'>
            <p>Are you sure you want to delete this user?</p>
            <button type='submit' class='delete-btn' name='confirm_delete'>Delete</button>
            <a href='dashboard.php' class='cancel-btn'>Cancel</a>
          </form>";
} else {
    // User ID to delete is not provided or invalid
    // Handle the error accordingly, e.g., display an error message
    echo "Error: Invalid user ID.";
}
?>
