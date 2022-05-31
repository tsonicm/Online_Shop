<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = 'tudormateian@gmail.com';
    $subject = 'ShoppingLine Contact Form';
    $body = "From: $name\n$message";
    if (mail ($to, $subject, $body)) {
        echo '<p>Your message has been sent!</p>';
    } else {
        echo '<p>Something went wrong, go back and try again!</p>';
    }
?>