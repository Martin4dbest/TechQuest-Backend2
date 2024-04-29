<?php
    if(isset($_POST['send'])){
        $to = 'martin4dtruth@gmail.com';
        $name = $_POST['name'];
        $email = $_POST['email'];
        $info = $_POST['info'];

        $header = "From: $name <$email>"; // Proper header format
        $subject = "New mail alert!";
        $message = "Name: $name\nEmail: $email\nMessage: $info"; // Proper string concatenation


         // Configure SMTP settings for Gmail
        ini_set("SMTP", "smtp.gmail.com");
        ini_set("smtp_port", "587");


        // Send mail
        $send_mail = mail($to, $subject, $message, $header);

        if($send_mail == true){
            echo "<script>window.alert('Mail Successfully Sent!')</script>";
        }else{
            echo "<script>window.alert('Not Successful!')</script>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Mail</title>
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <?php require_once('layout.php'); ?>
</head>
<body>
    <div class="mt-5"> 
        <form class="w-50 mt-auto me-auto ms-auto" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleTextarea" class="form-label">Message</label>
                <textarea name="info" id="exampleTextarea" class="form-control" rows="10"></textarea>
            </div>
            <button type="submit" name="send" class="btn btn-primary">Send Message</button>
       </form>
    </div>
</body>
</html>
