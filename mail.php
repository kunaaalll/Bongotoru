<?php 

if (!empty($_POST)){
 $name = $_POST['fullName'];
 $visitor_email = $_POST['email_id'];
 $visitor_Phone_Number = $_POST['phone_Number'];
 $Subject = $_POST['subject'];
 $Message = $_POST['message'];


 $email_body = 'Name: ' .$name. '<br>Email: ' .$visitor_email. '<br>Phone No: ' .$visitor_Phone_Number. '<br>Message: ' .$Message;

 $to = "yogesh@test.cowmesh.net";

 $mail_header = "MIME-Version: 1.0\n";
 $mail_header.="Content-type: text/html; charset=iso-8859-1\n";
 $mail_header.="From: " .$name." <" .$visitor_email. ">\n";
 $mail_header.="Reply To: " .$visitor_email. "\n";
 $mail_header.="X-Sender: <" .$visitor_email. ">\n";
 $mail_header.="X-Mailer: PHP\n";
 $mail_header.="X-Priority: 1\n";
 $mail_header.="Return-Path: <" .$visitor_email. ">\n";

 if(mail($to,$Subject,$email_body,$mail_header))
 {
  echo'<p style="color: green;">Thank you for contacting us :)</p>';
 }
 else{
  echo'<p style="color: red;">Oops, something went wrong. Please try again later</p>';
 }

}
?>

<!-- /****unwanted stufff */ -->
<!-- // $errors = [];
// $errorMessage = '';
// $successMessage = '';

// if (!empty($_POST)) {
//   $name = $_POST['fullName'];
//   $email = $_POST['email_id'];
//   $ph_number = $_POST['phone_Number'];
//   $subject = $_POST['subject'];
//   $message = $_POST['message'];
//   $email_from='communication@bongotoru.in';

//   if (empty($name)) {
//     $errors[] = 'Name is empty';
//   }
//   if (empty($email)) {
//     $errors[] = 'Email is empty';
//   }
//   else if (empty($ph_number)) {
//     $errors[] = 'Phone number is empty';
//   }
//   else if (empty($subject)) {
//     $errors[] = 'Subject is empty';
//   }
//   else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//     $errors[] = 'Email is invalid';
//   }
//   else if (empty($message)) {
//     $errors[] = 'Message is empty';
//   }

//   else if (!empty($errors)) {
//     $allErrors = join('<br/>', $errors);
//     $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
//   } else {
//     $toEmail = 'yt7500288059@gmail.com';
//    // $emailSubject = 'New email received from Bongotoru.in';
//     $headers = ['From' => $email_from, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];
//     $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Phone Number: {$ph_number}", "Message:, {$message}"];
//     $body = join(PHP_EOL, $bodyParagraphs);
//     if (mail($toEmail, $subject, $body, $headers)) {
//       $successMessage = "<p style='color: green;'>Thank you for contacting us :)</p>";
//     }
//     else {
//       $errorMessage = "<p style='color: red;'>Oops, something went wrong. Please try again later</p>";
//     }
//   }
// }  -->