<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Form</title>
</head>
<body>
    <h2>Input Form</h2>
    <form action="process_form.php" method="POST">
        <label for="user_input">Enter your text (maximum 10 words):</label><br>
        <textarea id="user_input" name="user_input" rows="4" cols="50"></textarea><br><br>
        <!-- Submit Button -->
        <button type="submit">Submit</button>
    </form>
</body>
</html>
