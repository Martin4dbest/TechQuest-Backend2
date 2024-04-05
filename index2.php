<?php
// Creating an array of fruits
$fruits = array("Apple", "Banana", "Orange", "Mango");

// Accessing elements of the array
echo "First fruit: " . $fruits[0] . "<br>";  // Output: First fruit: Apple
echo "Second fruit: " . $fruits[1] . "<br>"; // Output: Second fruit: Banana
echo "Third fruit: " . $fruits[2] . "<br>";  // Output: Third fruit: Orange
echo "Fourth fruit: " . $fruits[3] . "<br>"; // Output: Fourth fruit: Mango

// Alternatively, you can create an array using the shorthand syntax
$vegetables = ["Carrot", "Broccoli", "Spinach"];

// Accessing elements of the array
echo "First vegetable: " . $vegetables[0] . "<br>"; // Output: First vegetable: Carrot
echo "Second vegetable: " . $vegetables[1] . "<br>"; // Output: Second vegetable: Broccoli
echo "Third vegetable: " . $vegetables[2] . "<br>"; // Output: Third vegetable: Spinach


// Define a class called 'Car'
class Car {
    // Properties (attributes) of the Car class
    public $make;
    public $model;
    public $year;

    // Method to display information about the car
    public function displayInfo() {
        echo "Make: " . $this->make . "<br>";
        echo "Model: " . $this->model . "<br>";
        echo "Year: " . $this->year . "<br>";
    }
}

// Creating an object (instance) of the Car class
$car1 = new Car();

// Setting the properties of the car object
$car1->make = "Toyota";
$car1->model = "Corolla";
$car1->year = 2022;

// Calling the method to display information about the car
echo "Car 1:<br>";
$car1->displayInfo();

// Creating another object of the Car class
$car2 = new Car();

// Setting properties of the second car object
$car2->make = "Honda";
$car2->model = "Civic";
$car2->year = 2020;

// Displaying information about the second car
echo "<br>Car 2:<br>";
$car2->displayInfo();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Form</title>
</head>
<body>
    <h2>Input Form</h2>
    <form action="" method="POST">
        <label for="user_input">Enter your text:</label><br>
        <input type="text" id="user_input" name="user_input"><br><br>
        <!-- Submit Button -->
        <button type="submit">Submit</button>
    </form>

    <?php
    // Check if form is submitted
    if (isset($_POST['user_input'])) {
        #$user_input = $_GET['user_input'];
        $user_input = $_POST['user_input'];
        if(strlen($user_input>8)) 
        echo "<p>You entered: $user_input</p>";
    }

    ?>

</body>
</html>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Processing</title>
</head>
<body>
    <h2>Form Data Processing</h2>

    <?php
    // Check if form data is submitted using GET method and if the input text is not empty
    if (isset($_POST['user_input']) && strlen($_POST['user_input']) >= 8) {
        $user_input = $_POST['user_input'];
        echo "You entered: $user_input";
    } elseif (isset($_POST['user_input']) && strlen($_POST['user_input']) < 8) {
        echo "Please enter at least 8 characters.";
    } else {
        echo "No data submitted.";
    }
    ?>
</body>
</html>






