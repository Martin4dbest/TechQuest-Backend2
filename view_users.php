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

// Fetch user data from the database
$sql = "SELECT * FROM users";
$result = $connection->query($sql);

// Check if there are users
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>DOB</th>
                <th>State</th>
                <th>Guidance Info</th>
                <th>Age</th>
                <th>Actions</th>
            </tr>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['name'] . "</td>
                <td>" . $row['phone'] . "</td>
                <td>" . $row['dob'] . "</td>
                <td>" . $row['state'] . "</td>
                <td>" . $row['guidance_info'] . "</td>
                <td>" . $row['age'] . "</td>
                <td><a href='edit_user.php?id=" . $row['id'] . "'>Edit</a></td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Close the database connection
$connection->close();
?>
