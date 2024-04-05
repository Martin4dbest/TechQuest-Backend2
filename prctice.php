<?php
// Database credentials
$host = 'localhost'; // XAMPP default host
$dbname = 'myphpdatabase'; // Name of your database
$username = 'root'; // XAMPP default username
$password = ''; // XAMPP default password is empty

try {
    // Connect to the database using PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    // Set PDO to throw exceptions on errors
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



    // Example update query
    $query = "UPDATE users SET age = :age WHERE name = :name";
    // Prepare the query
    $stmt = $pdo->prepare($query);
    // Bind parameters
    $stmt->bindParam(':age', $age);
    $stmt->bindParam(':name', $name);
    // Assign values to parameters
    $age =395;
    $name = "Johnson";
    // Execute the query
    $stmt->execute();

    echo "Record updated successfully";


} catch (PDOException $e) {
    // Display an error message if unable to connect or execute the query
    echo "Error: " . $e->getMessage();
}
?>
