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

// Retrieve form data (add input validation)
$name = mysqli_real_escape_string($connection, $_POST['name']);
$password = mysqli_real_escape_string($connection, $_POST['password']);
$confirm_password = mysqli_real_escape_string($connection, $_POST['confirm_password']);
$phone = mysqli_real_escape_string($connection, $_POST['phone']);
$dob = mysqli_real_escape_string($connection, $_POST['dob']);
$state = mysqli_real_escape_string($connection, $_POST['state']);
$guidance_info = mysqli_real_escape_string($connection, $_POST['guidance_info']);
$age = mysqli_real_escape_string($connection, $_POST['age']);
$date_time = date('Y-m-d H:i:s');

// Verify password match
if ($password !== $confirm_password) {
    die("Password and Confirm Password do not match");
}

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert user data into the database using prepared statements
$sql = "INSERT INTO users (name, password, phone, dob, state, guidance_info, age, registration_date) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $connection->prepare($sql);
$stmt->bind_param("ssssssis", $name, $hashed_password, $phone, $dob, $state, $guidance_info, $age, $date_time);

if ($stmt->execute()) {
    echo "<script>alert('Registration successful!');</script>";
    echo "<script>window.location.href='registration_form.html';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

// Close the prepared statement and database connection
$stmt->close();
$connection->close();
?>
