<?php 

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'nilanjan@support.com';

$email_subject = 'New Form Submission';

$email_subject = "User Name: $name.\n".
                "User Name: $visitor_email.\n".
                "User Name: $subject.\n".
                "User Name: $message.\n";
                
$to = 'sidahire094@gmail.com';

$headers =  "From: $email_from \r\n";
$headers .=  "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_subject,$headers);

header("Location: index.html");

?>
