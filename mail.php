<?php 
$name = $_POST['fullName'];
$visitor_email = $_POST['email_id'];
$visitor_Phone_Number = $_POST['phone_Number'];
$Subject = $_POST['subject'];
$Message = $_POST['message'];

// $email_from = 'yt7500288059@gmail.com';

$email_body = "Hello, You got a new message .\n".
               "Name: $name.\n".
               "Email Id: $visitor_email.\n".
               "Phone Number: $visitor_Phone_Number.\n".
               "Message: $Message.\n";


$to = "yt7500288059@gmail.com";
$mail_header = "From:".$name."<".$visitor_email.">\r\n";

mail($to,$Subject,$email_body,$mail_header);


?>