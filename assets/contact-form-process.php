<?php
    $name = $POST['name'];
    $user_email = $POST['email'];
    $message = $_POST['message'];

    $email_sender = 'TheEvolutionProject.ie';
    $email_subject = 'New Contact Form Submission'

    $email_body = "Name: $name.\n";
                    "User Email: $visitor_email.\n";
                    "User Message: $message.\n";


                    $to = "wayneoneill@outlook.ie";
                    $headers = "From: $email_from \r\n";
                    $headers = "reply-To: $user_email \r\n";
             
                    mail($to,$email_subject,$email_body,$headers);
                    header ("Location: index.html");
?>