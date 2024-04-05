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

// Retrieve user ID from the URL
$user_id = $_GET['id'];

// Fetch user data based on the ID
$sql = "SELECT * FROM users WHERE id = ?";
$stmt = $connection->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Display form to edit user information
    echo "<form action='update_user.php' method='post'>
            <input type='hidden' name='user_id' value='" . $user_id . "'>
            Name: <input type='text' name='name' value='" . $row['name'] . "'><br>
            Phone: <input type='text' name='phone' value='" . $row['phone'] . "'><br>
            DOB: <input type='text' name='dob' value='" . $row['dob'] . "'><br>
            State: <input type='text' name='state' value='" . $row['state'] . "'><br>
            Guidance Info: <input type='text' name='guidance_info' value='" . $row['guidance_info'] . "'><br>
            Age: <input type='text' name='age' value='" . $row['age'] . "'><br>
            <input type='submit' value='Submit'>
        </form>";
} else {
    echo "User not found";
}

// Close the prepared statement and database connection
$stmt->close();
$connection->close();
?>
