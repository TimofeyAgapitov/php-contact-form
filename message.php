<?php

 $name = $_POST['name'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $website = $_POST['website'];
 $message = $_POST['message'];

 if(!empty($email) && !empty($message)) {
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $recevier = "your email address";
        $subject = "From: $name <$email>";
        $body = "Name: $name\nEmail : $email\nPhone : $phone\nWebsite : $website\nMessage : $message\nRegards : $name";
        $sender = "From: $email";
        if(mail($recevier, $subject, $body, $sender)) { 
            echo "Your message has been sent";
        } else {
            echo "Sorry, failed to send email";
        }
    } else {
        echo "Enter a valid email address!"
    }
 } else {
    echo "Email and password field is required!";
 }

?>