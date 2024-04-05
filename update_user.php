<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'user_registration');

// Connect to the database
$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Retrieve form data
$user_id = $_POST['user_id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$state = $_POST['state'];
$guidance_info = $_POST['guidance_info'];
$age = $_POST['age'];

// Update user information in the database
$sql = "UPDATE users SET name=?, phone=?, dob=?, state=?, guidance_info=?, age=? WHERE id=?";
$stmt = $connection->prepare($sql);
$stmt->bind_param("ssssssi", $name, $phone, $dob, $state, $guidance_info, $age, $user_id);

if ($stmt->execute()) {
    echo "<script>alert('User information updated successfully');</script>";
    echo "<script>window.location.href='view_users.php';</script>"; // Redirect to view_users.php after successful update
} else {
    echo "Error updating user information: " . $connection->error;
}

// Close the prepared statement and database connection
$stmt->close();
$connection->close();
?>
