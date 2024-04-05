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
    // Check if form data is submitted using POST method and if the input text is not empty
    if (isset($_POST['user_input']) && !empty($_POST['user_input'])) {
        $user_input = $_POST['user_input'];
        
        // Count the number of words in the input text
        $word_count = str_word_count($user_input);
        
        // Check if the number of words exceeds 10
        if ($word_count <= 10) {
            echo "You entered: $user_input";
        } else {
            echo "Please enter a maximum of 10 words.";
        }
    } else {
        echo "No data submitted.";
    }
    ?>
</body>
</html>
