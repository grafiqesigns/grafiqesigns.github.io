<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];
$formcontent="From: $firstname $lastname \n Subject: $subject \n Message: $message ";
$recipient = "info@grafiqesigns.com";
$subject = $_POST['subject'];
$mailheader = "From: $email \r\n";
$res= or die("Error!");
//echo "<script'>alert('We Received Your Request We will get Back to you Soon....');</script>";
if(mail($recipient, $subject, $formcontent, $mailheader))
{
    header('Location: /contact.html');
    alert('success');
}
else {
    # code...
    header('Location: /contact.html');

}

?>
