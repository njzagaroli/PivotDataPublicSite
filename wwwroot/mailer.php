<?php
$email_to = "tzhang@pivotdata.com";
$name = $_POST["name"];
$email_from = $_POST["email"];
$message = $_POST["message"];
$email_subject = "Feedback from website";
$headers = "From: " . $email_from . "\n";
$headers .= "Reply-To: " . $email_from . "\n"; 

$message = "Name: ". $name . "\r\nMessage: " . $message;

ini_set("sendmail_from", $email_from);
$sent = mail($email_to, $email_subject, $message, $headers, "-f".$email_from);
if ($sent)
{
header("Location:thanks.html");
} else {
echo "Go Back and Make sure you fill in all your info or else the form will not work.";
}
         
?>