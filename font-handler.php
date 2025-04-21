<?php
$name = $_POST['name'];
$visitor = $_POST['email'];
$subjet = $_POST['subject'];
$message = $_POST['message'];
    

$email_from = 'guzmansamuel175@gmail.com'
$email_subject = 'New Form Submission';
$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Message: $message .\n";
$to = 'guzmansamuel175@gmail.com'
$hearders ="From $email_from \r\n";
$hearders = "Reply_To $visitor_email \r\n"; 

mail($to,$email_subject,$email_body,$hearders);
header("Location: contact.html");+
>?
